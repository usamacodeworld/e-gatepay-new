<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\MerchantStatus;
use App\Enums\TrxStatus;
use App\Enums\TrxType;
use App\Http\Controllers\Controller;
use App\Models\Settlement;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    /**
     * Display the dashboard view.
     */
    public function index(): View
    {
        $user = auth()->user();

        $relevantTypes  = $this->getRelevantTransactionTypes($user);
        $financialStats = $this->getFinancialStats($user, $relevantTypes);
        $staticStats    = $this->getStaticStats($user);
        $statistics     = array_merge($financialStats, $staticStats);
        // dd($statistics);
        // Define week day order to maintain consistent order in the view.
        $dayOrder          = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        $weeklyStats       = $this->getWeeklyTransactionStats($user, $dayOrder);
        $sortedDeposits    = $weeklyStats['deposits'];
        $sortedWithdrawals = $weeklyStats['withdrawals'];

        // Calculate totals for the past 7 days.
        $totalSuccessDeposit  = $this->getTotalAmountForTrx($user, TrxType::DEPOSIT, 7);
        $totalSuccessWithdraw = $this->getTotalAmountForTrx($user, TrxType::WITHDRAW, 7);

        $transactions = $user->transactions()->latest()->take(3)->get();

        $todayTotal = $user->transactions()
            ->where('status', TrxStatus::COMPLETED)
            ->where('trx_type', 'receive_payment')
            ->whereDate('created_at', now()->toDateString())
            ->sum('amount');

        $card_month_to_date = $user->transactions()
            ->where('status', TrxStatus::COMPLETED)
            ->where('trx_type', 'receive_payment')
            ->where('provider', 'card')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->sum('amount');

        $card_all_processed = $user->transactions()
            ->where('status', TrxStatus::COMPLETED)
            ->where('trx_type', 'receive_payment')
            ->where('provider', 'card')
            ->sum('amount');


        $mobile_month_to_date = $user->transactions()
            ->where('status', TrxStatus::COMPLETED)
            ->where('trx_type', 'receive_payment')
            ->where('provider', 'mobile')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->sum('amount');

        $mobile_all_processed = $user->transactions()
            ->where('status', TrxStatus::COMPLETED)
            ->where('trx_type', 'receive_payment')
            ->where('provider', 'mobile')
            ->sum('amount');


        $payouts_month_to_date = Settlement::where('user_id', $user->id)
            ->where('status', 'approved')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->sum('gross_amount');

        $payouts_all_processed = Settlement::where('user_id', $user->id)
            ->where('status', 'approved')
            ->sum('gross_amount');


        $disbursals_month_to_date = Settlement::where('user_id', $user->id)
            ->where('status', 'decline')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->sum('gross_amount');

        $disbursals_all_processed = Settlement::where('user_id', $user->id)
            ->where('status', 'decline')
            ->sum('gross_amount');

        $dailyData = $user->transactions()
            ->selectRaw('DATE(created_at) as date, SUM(amount) as total_amount, COUNT(*) as trx_count')
            ->where('status', TrxStatus::COMPLETED)
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        $dates = $dailyData->pluck('date');
        $dailyVolumes = $dailyData->pluck('total_amount');
        $dailyTrxCounts = $dailyData->pluck('trx_count');


        $weeklyData = $user->transactions()
            ->selectRaw('YEARWEEK(created_at, 1) as week, SUM(amount) as total_amount, COUNT(*) as trx_count')
            ->where('status', TrxStatus::COMPLETED)
            ->groupBy('week')
            ->orderBy('week', 'asc')
            ->get();

        $weeks = $weeklyData->pluck('week');
        $weeklyVolumes = $weeklyData->pluck('total_amount');
        $weeklyTrxCounts = $weeklyData->pluck('trx_count');

        return view('frontend.user.dashboard.index', compact(
            'statistics',
            'sortedDeposits',
            'sortedWithdrawals',
            'totalSuccessDeposit',
            'totalSuccessWithdraw',
            'transactions',
            'todayTotal',
            'card_month_to_date',
            'card_all_processed',
            'mobile_month_to_date',
            'mobile_all_processed',
            'payouts_month_to_date',
            'payouts_all_processed',
            'disbursals_month_to_date',
            'disbursals_all_processed',
            'dailyData',
            'dates',
            'dailyVolumes',
            'dailyTrxCounts',
            'weeklyData',
            'weeks',
            'weeklyVolumes',
            'weeklyTrxCounts'
        ));
    }

    /**
     * Get the transaction types relevant for the user.
     */
    private function getRelevantTransactionTypes(User $user): array
    {
        $types = [
            //            TrxType::DEPOSIT,
            TrxType::WITHDRAW,
            //            TrxType::SEND_MONEY,
            //            TrxType::REQUEST_MONEY,
            //            TrxType::EXCHANGE_MONEY,
            //            TrxType::RECEIVE_MONEY,
            //            TrxType::REWARD,
        ];

        if ($user->isMerchant()) {
            $types[] = TrxType::RECEIVE_PAYMENT;
            $types[] = TrxType::RECEIVE_PAYMENT_TODAY;
        }

        return $types;
    }

    /**
     * Retrieve financial statistics by grouping completed transactions.
     */
    private function getFinancialStats(User $user, array $relevantTypes): array
    {
        $transactions = $user->transactions()
            ->where('status', TrxStatus::COMPLETED)
            ->whereIn('trx_type', collect($relevantTypes)->filter(fn($t) => $t instanceof \App\Enums\TrxType)->pluck('value'))
            ->selectRaw('trx_type, currency, COALESCE(SUM(amount), 0) as total_amount')
            ->groupBy('trx_type', 'currency')
            ->get();

        $stats = [];

        foreach ($relevantTypes as $trxType) {
            // case 1: Enum Type
            if ($trxType instanceof \App\Enums\TrxType) {
                if ($trxType->value === 'receive_payment_today') {
                    // Special logic for today’s receive_payment
                    $todayTotal = $user->transactions()
                        ->where('status', TrxStatus::COMPLETED)
                        ->where('trx_type', 'receive_payment')
                        ->whereDate('created_at', now()->toDateString())
                        ->selectRaw('currency, COALESCE(SUM(amount), 0) as total_amount')
                        ->groupBy('currency')
                        ->get();

                    $formattedValue = $todayTotal->map(
                        fn($row) => getSymbol($row->currency) . number_format($row->total_amount, 2)
                    )->implode(', ');

                    $stats[] = [
                        'title'       => $trxType->label(),
                        'value'       => $formattedValue ?: getSymbol('USD') . '0',
                        'icon'        => $trxType->icon(),
                        'color_class' => $trxType->kebabCase(),
                        'link'        => route('user.transaction.index'),
                    ];
                } else {
                    // Normal types
                    $filtered = $transactions->where('trx_type', $trxType->value);

                    $formattedValue = $filtered->map(
                        fn($row) => getSymbol($row->currency) . number_format($row->total_amount, 2)
                    )->implode(', ');

                    $stats[] = [
                        'title'       => $trxType->label(),
                        'value'       => $formattedValue ?: getSymbol('USD') . '0',
                        'icon'        => $trxType->icon(),
                        'color_class' => $trxType->kebabCase(),
                        'link'        => route('user.transaction.index'),
                    ];
                }
            }

            // case 2: Already prepared array (like Total Tickets, Merchant Shop etc.)
            elseif (is_array($trxType)) {
                $stats[] = $trxType;
            }
        }

        return $stats;
    }


    /**
     * Retrieve static statistics for the user.
     */
    private function getStaticStats(User $user): array
    {
        $stats = [
            [
                'title'       => __('Total Tickets'),
                'value'       => $user->tickets()->count(),
                'icon'        => 'tickets',
                'color_class' => 'tickets',
                'link'        => '#',
            ],
            [
                'title'       => __('Total Referrals'),
                'value'       => $user->referrals()->count(),
                'icon'        => 'referrals',
                'color_class' => 'referrals',
                'link'        => '#',
            ],
        ];

        if ($user->isMerchant()) {
            $stats[] = [
                'title'       => __('Merchant Shop'),
                'value'       => $user->merchants()->count(),
                'icon'        => 'merchant',
                'color_class' => 'merchant',
                'link'        => '#',
            ];

            $stats[] = [
                'title'       => __('Awaiting Merchant'),
                'value'       => $user->merchants()->where('status', MerchantStatus::PENDING)->count(),
                'icon'        => 'merchant-2',
                'color_class' => 'merchant-pending',
                'link'        => '#',
            ];
        }

        return $stats;
    }

    /**
     * Get weekly deposit and withdrawal statistics.
     */
    private function getWeeklyTransactionStats(User $user, array $dayOrder): array
    {
        $transactions = $user->transactions()
            ->whereIn('trx_type', [TrxType::DEPOSIT, TrxType::WITHDRAW])
            ->whereDate('created_at', '>=', Carbon::now()->subDays(7))
            ->selectRaw("
                DATE_FORMAT(created_at, '%a') as day,
                trx_type,
                currency,
                SUM(CASE WHEN status = ? THEN amount ELSE 0 END) as success_total,
                SUM(CASE WHEN status IN (?, ?) THEN amount ELSE 0 END) as fail_total
            ", [
                TrxStatus::COMPLETED->value,
                TrxStatus::FAILED->value,
                TrxStatus::CANCELED->value,
            ])
            ->groupBy('day', 'trx_type', 'currency')
            ->get();

        // Map the deposits and withdrawals to the provided day order.
        $deposits = collect($dayOrder)->map(function (string $day) use ($transactions) {
            $data     = $transactions->where('trx_type', TrxType::DEPOSIT)->where('day', $day);
            $currency = $data->first()?->currency ?? 'USD';

            return [
                'day'           => $day,
                'success_total' => $data->sum('success_total') ?: 0,
                'fail_total'    => $data->sum('fail_total') ?: 0,
                'symbol'        => getSymbol($currency),
            ];
        });

        $withdrawals = collect($dayOrder)->map(function (string $day) use ($transactions) {
            $data     = $transactions->where('trx_type', TrxType::WITHDRAW)->where('day', $day);
            $currency = $data->first()?->currency ?? 'USD';

            return [
                'day'                    => $day,
                'withdraw_success_total' => $data->sum('success_total') ?: 0,
                'withdraw_fail_total'    => $data->sum('fail_total') ?: 0,
                'symbol'                 => getSymbol($currency),
            ];
        });

        return [
            'deposits'    => $deposits,
            'withdrawals' => $withdrawals,
        ];
    }

    /**
     * Get the total successful transaction amount for a given transaction type
     * over the past number of days.
     */
    private function getTotalAmountForTrx(User $user, TrxType $trxType, int $days): string
    {
        $total = $user->transactions()
            ->where('trx_type', $trxType)
            ->where('status', TrxStatus::COMPLETED)
            ->whereDate('created_at', '>=', Carbon::now()->subDays($days))
            ->selectRaw('currency, SUM(amount) as total')
            ->groupBy('currency')
            ->get()
            ->map(fn($row) => getSymbol($row->currency) . number_format($row->total, 2))
            ->implode(', ');

        return $total ?: getSymbol('USD') . '0';
    }
}
