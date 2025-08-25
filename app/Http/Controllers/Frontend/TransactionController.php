<?php

namespace App\Http\Controllers\Frontend;

use Log;
use Exception;
use App\Enums\TrxType;
use App\Models\Currency;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Exceptions\NotifyErrorException;

class TransactionController extends Controller
{
    public function index()
    {
        $query = Transaction::query()->where('user_id', auth()->user()->id)->where('status', 'failed');

        if (request()->has('search') && !empty(request('search'))) {
            $search = request('search');
            $query->where(function ($q) use ($search) {
                $q->where('trx_id', 'LIKE', "%{$search}%")
                    ->orWhere('provider', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%")
                    ->orWhereHas('user', function ($userQuery) use ($search) {
                        $userQuery->where('email', 'LIKE', "%{$search}%");
                    });
            });
        }

        if (request()->has('currency') && !empty(request('currency'))) {
            $query->where('currency', request('currency'));
        }

        if (request()->has('daterange') && !empty(request('daterange'))) {
            $dates = explode(' - ', request('daterange'));
            if (count($dates) == 2) {
                $from = date('Y-m-d 00:00:00', strtotime($dates[0]));
                $to   = date('Y-m-d 23:59:59', strtotime($dates[1]));
                $query->whereBetween('created_at', [$from, $to]);
            }
        }

        $perPage = request('per_page', 10);

        $transactions = $query->orderBy('created_at', 'desc')->paginate($perPage)->appends(request()->query());

        $currency = Currency::where('status', 1)->get();

        $page_name = 'Monitoring';

        return view('frontend.user.transaction.index', compact('transactions', 'currency', 'page_name'));
    }


    public function successful()
    {
        $query = Transaction::query()->where('user_id', auth()->user()->id)->where('status', 'completed');

        if (request()->has('search') && !empty(request('search'))) {
            $search = request('search');
            $query->where(function ($q) use ($search) {
                $q->where('trx_id', 'LIKE', "%{$search}%")
                    ->orWhere('provider', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%")
                    ->orWhereHas('user', function ($userQuery) use ($search) {
                        $userQuery->where('email', 'LIKE', "%{$search}%");
                    });
            });
        }

        if (request()->has('currency') && !empty(request('currency'))) {
            $query->where('currency', request('currency'));
        }

        if (request()->has('daterange') && !empty(request('daterange'))) {
            $dates = explode(' - ', request('daterange'));
            if (count($dates) == 2) {
                $from = date('Y-m-d 00:00:00', strtotime($dates[0]));
                $to   = date('Y-m-d 23:59:59', strtotime($dates[1]));
                $query->whereBetween('created_at', [$from, $to]);
            }
        }

        $perPage = request('per_page', 10);

        $transactions = $query->orderBy('created_at', 'desc')->paginate($perPage)->appends(request()->query());

        $currency = Currency::where('status', 1)->get();

        $page_name = 'Successful Transactions';

        return view('frontend.user.transaction.index', compact('transactions', 'currency', 'page_name'));
    }

    public function archived()
    {
        $query = Transaction::query()->where('user_id', auth()->user()->id);

        if (request()->has('search') && !empty(request('search'))) {
            $search = request('search');
            $query->where(function ($q) use ($search) {
                $q->where('trx_id', 'LIKE', "%{$search}%")
                    ->orWhere('provider', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%")
                    ->orWhereHas('user', function ($userQuery) use ($search) {
                        $userQuery->where('email', 'LIKE', "%{$search}%");
                    });
            });
        }

        if (request()->has('currency') && !empty(request('currency'))) {
            $query->where('currency', request('currency'));
        }

        if (request()->has('daterange') && !empty(request('daterange'))) {
            $dates = explode(' - ', request('daterange'));
            if (count($dates) == 2) {
                $from = date('Y-m-d 00:00:00', strtotime($dates[0]));
                $to   = date('Y-m-d 23:59:59', strtotime($dates[1]));
                $query->whereBetween('created_at', [$from, $to]);
            }
        }

        $perPage = request('per_page', 10);

        $transactions = $query->orderBy('created_at', 'desc')->paginate($perPage)->appends(request()->query());

        $currency = Currency::where('status', 1)->get();

        $page_name = 'Archived Transactions';

        return view('frontend.user.transaction.index', compact('transactions', 'currency', 'page_name'));
    }


    /**
     * Handle transaction actions: save remarks, approve, or reject.
     *
     * @throws NotifyErrorException
     */
    public function handleAction(Request $request)
    {
        // Validate request inputs
        $validated = $request->validate([
            'trx_id'  => 'required|exists:transactions,trx_id',
            'remarks' => 'nullable|string|max:255',
            'action'  => 'required|in:approve,reject',
        ]);

        try {
            // Fetch the transaction
            $transaction = Transaction::findTransaction($validated['trx_id']);

            if (! $transaction) {
                throw new NotifyErrorException('Transaction not found.');
            }

            // Handle the approve action
            if ($validated['action'] === 'approve') {
                return $this->approveTransaction($transaction, $validated['remarks']);
            }

            // Handle the reject action
            if ($validated['action'] === 'reject') {
                return $this->rejectTransaction($transaction, $validated['remarks']);
            }
            throw new NotifyErrorException(__('Invalid action.'));
        } catch (Exception $e) {

            // Log the error and notify the user
            Log::error('Transaction handling error: ' . $e->getMessage());

            throw new NotifyErrorException(__('An error occurred while processing the transaction.'));
        }
    }

    public function downloadPdf($trx_id)
    {
        // Retrieve the logo from the storage folder
        $logoPath = setting('logo'); // Assuming this returns a relative path like "logos/site-logo.png"

        $fileContent = Storage::get('public/' . $logoPath);
        $fileType    = pathinfo(Storage::path('public/' . $logoPath), PATHINFO_EXTENSION);
        $siteLogo    = 'data:image/' . $fileType . ';base64,' . base64_encode($fileContent);

        // Retrieve transaction data
        $transaction = Transaction::findTransaction($trx_id);

        // Generate the PDF
        $pdf = Pdf::loadView('general.pdf.transaction', compact('transaction', 'siteLogo'));

        // Return the PDF for download
        return $pdf->download('transaction_receipt_' . $transaction->trx_id . '.pdf');
    }

    private function approveTransaction($transaction, $remarks)
    {
        if ($transaction->trx_type !== TrxType::REQUEST_MONEY && $transaction->status !== 'pending') {
            notifyEvs('error', 'Transaction cannot be approved.');

            return redirect()->back();
        }

        $payableAmount = $transaction->payable_amount;
        $myWalletUuid  = $transaction->wallet_reference;

        if (! Wallet::isWalletBalanceSufficient($myWalletUuid, $payableAmount)) {
            notifyEvs('error', 'Not enough balance in your wallet.');

            return redirect()->back();
        }

        // Complete transactions within a database transaction
        DB::transaction((function () use ($transaction, $remarks) {
            Transaction::completeTransaction($transaction->trx_id);
            Transaction::completeTransaction($transaction->trx_reference, $remarks);
        }));

        notifyEvs('success', 'Transaction approved successfully.');

        return redirect()->back();
    }

    private function rejectTransaction($transaction, $remarks)
    {

        // Cancel transactions within a database transaction
        DB::transaction((function () use ($transaction, $remarks) {
            Transaction::cancelTransaction($transaction->trx_id);
            Transaction::cancelTransaction($transaction->trx_reference, $remarks);
        }));

        notifyEvs('success', 'Transaction rejected successfully.');

        return redirect()->back();
    }
}
