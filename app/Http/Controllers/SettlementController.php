<?php

namespace App\Http\Controllers;

use App\Models\Settlement;
use App\Models\Merchant;
use App\Models\User;
use App\Models\RunningBalance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SettlementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Settlement::where('user_id', Auth::id())
            ->where('status', '!=', 'decline')
            ->orderBy('created_at', 'desc');

        if ($request->filled('daterange')) {
            $dates = explode(',', $request->daterange);
            if (count($dates) === 2) {
                $start = $dates[0];
                $end = $dates[1];
                $query->whereBetween('created_at', [$start . ' 00:00:00', $end . ' 23:59:59']);
            }
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        $perPage = request('per_page', 10);
        $settlements = $query->orderBy('created_at', 'desc')->paginate($perPage)->appends(request()->query());
        $page_name = 'Settlements';
        return view('frontend.user.settlements.index', compact('settlements', 'page_name'));
    }

    public function running_balance(Request $request)
    {
        $query = RunningBalance::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc');

        // ✅ Date range filter
        if ($request->filled('daterange')) {
            $dates = explode(',', $request->daterange);
            if (count($dates) === 2) {
                $start = $dates[0];
                $end = $dates[1];
                $query->whereBetween('created_at', [$start . ' 00:00:00', $end . ' 23:59:59']);
            }
        }

        $runningBalance = $query->paginate(10);
        $page_name = 'Running Balance';
        return view('frontend.user.settlements.running_balance', compact('runningBalance', 'page_name'));
    }

    public function dispursal(Request $request)
    {
        $query = Settlement::where('user_id', Auth::id())
            ->where('status', 'decline')
            ->orderBy('created_at', 'desc');

        if ($request->filled('daterange')) {
            $dates = explode(',', $request->daterange);
            if (count($dates) === 2) {
                $start = $dates[0];
                $end = $dates[1];
                $query->whereBetween('created_at', [$start . ' 00:00:00', $end . ' 23:59:59']);
            }
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        $perPage = request('per_page', 10);
        $settlements = $query->orderBy('created_at', 'desc')->paginate($perPage)->appends(request()->query());
        $page_name = 'Dispersal';
        return view('frontend.user.settlements.index', compact('settlements', 'page_name'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ✅ Validate Request
        $validated = $request->validate([
            'user_id'            => 'required|exists:users,id',
            'merchant_id'        => 'required|exists:merchants,id',
            'gross_amount'       => 'required|numeric|min:1',
            'tax_percentage'     => 'nullable|numeric|min:0|max:100',
            'rolling_balance_percentage'     => 'nullable|numeric|min:0|max:100',
            'gateway_fee_percentage' => 'nullable|numeric|min:0|max:100',
            'platform_commission' => 'nullable|numeric|min:0',
            'other_charges'      => 'nullable|numeric|min:0',
            'adjustments'        => 'nullable|numeric',
            'settlement_type'    => 'nullable|in:manual,automatic',
            'settlement_method'  => 'nullable|in:bank_transfer,cheque,cash,wallet',
            'base_currency'      => 'nullable|string|size:3',
            'settlement_currency' => 'nullable|string|size:3',
            'exchange_rate'      => 'nullable|numeric|min:0',
            'payment_receipts.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'remarks'            => 'nullable|string',
            'status'             => 'nullable|in:pending,processing,approved,paid,decline',
        ]);

        try {
            DB::beginTransaction();

            // ✅ Get merchant details
            $merchant = Merchant::findOrFail($validated['merchant_id']);

            // ✅ Set currencies & exchange rate
            $baseCurrency = $validated['base_currency'] ?? 'USD';
            $settlementCurrency = $validated['settlement_currency'] ?? 'USD';
            $exchangeRate = $validated['exchange_rate'] ?? 1;

            // ✅ Calculate amounts
            $grossAmount = $validated['gross_amount'];
            $taxPercentage = $validated['tax_percentage'] ?? 0;
            $vatPercentage = $validated['rolling_balance_percentage'] ?? 0;
            $gatewayFeePercentage = $validated['gateway_fee_percentage'] ?? 0;
            $platformCommission = $validated['platform_commission'] ?? 0;
            $otherCharges = $validated['other_charges'] ?? 0;
            $adjustments = $validated['adjustments'] ?? 0;

            // ✅ Auto calculate deduction amounts
            $taxAmount = ($grossAmount * $taxPercentage) / 100;
            $vatAmount = ($grossAmount * $vatPercentage) / 100;
            $gatewayFee = ($grossAmount * $gatewayFeePercentage) / 100;

            // ✅ Calculate net amount
            $netAmount = $grossAmount - ($taxAmount + $vatAmount + $gatewayFee + $platformCommission + $otherCharges) + $adjustments;

            // ✅ Convert amount if settlement currency is different
            $convertedAmount = $settlementCurrency !== $baseCurrency
                ? $netAmount * $exchangeRate
                : $netAmount;

            // ✅ Handle multiple payment receipts upload
            $uploadedReceipts = [];
            if ($request->hasFile('payment_receipts')) {
                foreach ($request->file('payment_receipts') as $file) {
                    $uploadedReceipts[] = $file->store('settlements/receipts', 'public');
                }
            }

            // ✅ Create settlement record
            $settlement = Settlement::create([
                'settlement_id'        => Str::uuid(),
                'settlement_date'      => now(),
                'settlement_type'      => $validated['settlement_type'] ?? 'manual',
                'settlement_method'    => $validated['settlement_method'] ?? 'bank_transfer',

                'base_currency'        => $baseCurrency,
                'settlement_currency'  => $settlementCurrency,
                'exchange_rate'        => $exchangeRate,
                'converted_amount'     => $convertedAmount,

                'user_id'             => $validated['user_id'],
                'merchant_id'         => $validated['merchant_id'],
                'merchant_name'       => $merchant->name ?? null,
                'merchant_email'      => $merchant->email ?? null,

                'requested_by'        => Auth::id(),
                'requested_at'        => now(),

                'gross_amount'        => $grossAmount,
                'tax_percentage'      => $taxPercentage,
                'tax_amount'          => $taxAmount,
                'rolling_balance_percentage'      => $vatPercentage,
                'rolling_balance_amount'          => $vatAmount,
                'gateway_fee_percentage' => $gatewayFeePercentage,
                'gateway_fee'        => $gatewayFee,
                'platform_commission' => $platformCommission,
                'other_charges'      => $otherCharges,
                'adjustments'       => $adjustments,
                'net_amount'        => $netAmount,

                'payment_receipts'   => !empty($uploadedReceipts) ? json_encode($uploadedReceipts) : null,
                'status'            => $validated['status'] ?? 'pending',
                'remarks'           => $validated['remarks'] ?? null,
            ]);

            $user = User::where('id', $merchant->user_id)->first();
            if ($user && $validated['status'] != 'decline') {
                $closingBalance = $user->payable_amount - $grossAmount; // assuming settlement reduces running balance

                RunningBalance::create([
                    'user_id' => $user->id,
                    'settlement_id' => $settlement->id,
                    'opening_balance' => $user->payable_amount,
                    'transaction_amount' => $grossAmount,
                    'closing_balance' => $closingBalance,
                    'transaction_type' => 'debit', // debit for settlement
                    'description' => 'Settlement processed',
                ]);

                // ✅ Deduct payable amount
                $user->decrement('payable_amount', $grossAmount);
            }

            DB::commit();

            notifyEvs('success', __('Settlement created successfully.'));

            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'status'  => false,
                'message' => 'Failed to create settlement.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    public function updateStatus(Request $request)
    {
        $request->validate([
            'settlement_id' => 'required|exists:settlements,id',
            'status' => 'required|in:pending,processing,approved,paid,decline',
        ]);

        DB::beginTransaction();

        try {
            $settlement = Settlement::findOrFail($request->settlement_id);

            // If already declined or paid, don't allow re-updates
            if ($settlement->status === $request->status) {
                return response()->json([
                    'success' => false,
                    'message' => 'Settlement status is already ' . ucfirst($request->status),
                ], 400);
            }

            $user = User::findOrFail($settlement->user_id);

            // If settlement is declined → return gross_amount to user payable_amount
            if ($request->status === 'decline') {
                $user->payable_amount += $settlement->gross_amount;
                $user->save();
            }

            // Update settlement status
            $settlement->status = $request->status;
            $settlement->save();

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Settlement status updated successfully.',
                'new_status' => ucfirst($settlement->status),
                'payable_amount' => number_format($user->payable_amount, 2)
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! ' . $e->getMessage(),
            ], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Settlement $settlement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Settlement $settlement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Settlement $settlement)
    {
        //
    }
}
