@extends('frontend.layouts.user.index')
@section('title', __($page_name))
@if ($page_name == 'Monitoring')
    @section('monitoring', 'active_li_class')
@elseif ($page_name == 'Successful Transactions')
    @section('successful', 'active_li_class')
@else
    @section('archived', 'active_li_class')
@endif
@section('content')
    @php
        use App\Enums\TrxType;
        use App\Enums\TrxStatus;
        use App\Enums\CurrencyEnum;
    @endphp
    <main class="admin-main">
        <div class="container-fluid">
            <!-- Dashboard Header -->
            <div class="dashboard-header">
                <div class="row align-items-center mb-4">
                    <div class="col-md-8">
                        <h1 class="page-title">{{ __($page_name) }}</h1>
                        <p class="page-subtitle">View and manage your archived transaction history.</p>
                    </div>
                </div>
            </div>

            <!-- Updated filters section with working daterangepicker -->
            <!-- Filters Section -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="filter-section">
                        @if ($page_name == 'Monitoring')
                            <form action="{{ route('user.transaction.index') }}" method="GET">
                            @elseif ($page_name == 'Successful Transactions')
                                <form action="{{ route('user.transaction.successful') }}" method="GET">
                                @else
                                    <form action="{{ route('user.transaction.archived') }}" method="GET">
                        @endif
                        <div class="row g-3 align-items-end">
                            <!-- Search -->
                            <div class="col-md-3">
                                <label class="form-label">Search</label>
                                <input type="text" class="form-control" name="search"
                                    placeholder="Search Transaction..." value="{{ request('search') }}">
                            </div>

                            <!-- Date Range -->
                            <div class="col-md-3">
                                <label class="form-label">Date Range</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    <input type="text" class="form-control" id="dateRangePicker" name="daterange"
                                        placeholder="Select date range" value="{{ request('daterange') }}">
                                </div>
                            </div>


                            <!-- Currency Filter -->
                            <div class="col-md-2">
                                <label class="form-label">Currency</label>
                                <select class="form-select" name="currency">
                                    <option value="">All</option>
                                    @foreach ($currency as $cur)
                                        <option value="{{ $cur->code }}"
                                            {{ request('currency') == $cur->code ? 'selected' : '' }}>
                                            {{ $cur->code }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Records per page -->
                            <div class="col-md-2">
                                <label class="form-label">Show</label>
                                <select class="form-select" name="per_page" onchange="this.form.submit()">
                                    <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                                    <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
                                    <option value="30" {{ request('per_page') == 30 ? 'selected' : '' }}>30</option>
                                </select>
                            </div>

                            <!-- Search Button -->
                            <div class="col-md-2">
                                <button class="btn btn-primary d-block w-100">
                                    <i class="fas fa-search me-1"></i>Search
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- Updated data table section with improved structure and styling -->
            <!-- Data Table Section -->
            <div class="row">
                <div class="col-12">
                    <div class="section-card">
                        <!-- Professional Responsive Table -->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>{{ __('Date & Time') }}</th>
                                        <th>{{ __('Merchant ID') }}</th>
                                        <th>{{ __('Payment Type') }}</th>
                                        <th>{{ __('Provider') }}</th>
                                        <th>{{ __('Transaction #') }}</th>
                                        <th>{{ __('Currency') }}</th>
                                        <th>{{ __('Amount') }}</th>
                                        <th>{{ __('Refund Amount') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Response Code') }}</th>
                                        <th>{{ __('Response Description') }}</th>
                                        <th>{{ __('Email') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                        @php
                                            $trxData = is_string($transaction->trx_data)
                                                ? json_decode($transaction->trx_data, true)
                                                : $transaction->trx_data;

                                            $statusResponseMap = [
                                                TrxStatus::PENDING->value => [
                                                    'code' => '102',
                                                    'description' => __('Processing'),
                                                ],
                                                TrxStatus::COMPLETED->value => [
                                                    'code' => '200',
                                                    'description' => __('Success'),
                                                ],
                                                TrxStatus::CANCELED->value => [
                                                    'code' => '499',
                                                    'description' => __('Client Closed Request'),
                                                ],
                                                TrxStatus::FAILED->value => [
                                                    'code' => '400',
                                                    'description' => __('Bad Request'),
                                                ],
                                            ];

                                            $responseDetails = $statusResponseMap[$transaction->status->value] ?? [
                                                'code' => '000',
                                                'description' => __('Unknown Status'),
                                            ];
                                            $responseCode = $trxData['response_code'] ?? $responseDetails['code'];
                                        @endphp
                                        <tr data-bs-toggle="modal" data-bs-target="#transactionModal{{ $transaction->id }}"
                                            style="cursor:pointer">
                                            <td>{{ $transaction->created_at?->format('d M Y, h:i A') }}</td>
                                            <td>{{ $trxData['merchant_name'] ?? '-' }}</td>
                                            <td>{{ $transaction->trx_type->label() }}</td>
                                            <td>{{ $transaction->provider }}</td>
                                            <td>{{ strtoupper($transaction->trx_id) }}</td>
                                            <td>{{ $transaction->currency }}</td>
                                            <td>{{ number_format($transaction->payable_amount, 2) }}</td>
                                            <td>{{ $trxData['refund_amount'] ?? '0.00' }}</td>
                                            <td>
                                                <span class="badge bg-{{ $transaction->status->color() }}">
                                                    {{ strtoupper($transaction->status->label()) }}
                                                </span>
                                            </td>
                                            <td>{{ $responseCode }}</td>
                                            <td>{{ $transaction->description }}</td>
                                            <td>{{ $trxData['customer_email'] ?? ($transaction->user->email ?? '-') }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#transactionModal{{ $transaction->id }}">
                                                    View
                                                </button>
                                            </td>
                                        </tr>

                                        {{-- Transaction Modal --}}
                                        @include('frontend.user.transaction.partials._details_modal', [
                                            'transaction' => $transaction,
                                            'transactionTypeClass' => $transaction->trx_type,
                                        ])
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Enhanced Pagination -->
                        <div class="d-flex justify-content-between align-items-center p-3 bg-light">
                            <div>
                                <span class="text-muted">
                                    Showing <strong>{{ $transactions->firstItem() }}</strong> to
                                    <strong>{{ $transactions->lastItem() }}</strong> of
                                    <strong>{{ $transactions->total() }}</strong> entries
                                </span>
                            </div>
                            <div>
                                {{ $transactions->links('pagination::bootstrap-5') }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
