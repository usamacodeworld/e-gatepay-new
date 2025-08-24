@php
use App\Enums\TrxType;
use App\Enums\TrxStatus;
use App\Enums\CurrencyEnum;
@endphp

@extends('frontend.layouts.user.index')

@section('title', __($page_name))

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card single-form-card">
            <!-- Card Header -->
            <div class="card-title mb-0">
                <h6 class="mb-0 text-white">{{ __($page_name) }}</h6>

                <!-- Toggle Button: Visible only on small devices -->
                <div class="d-md-none">
                    <button class="btn btn-light-primary d-flex align-items-center" type="button"
                        data-bs-toggle="collapse" data-bs-target="#filterSection" aria-expanded="false"
                        aria-controls="filterSection">
                        <i class="fa-solid fa-filter me-2"></i> {{ __('Filters') }}
                    </button>
                </div>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                <!-- Filter Section -->
                <div class="collapse d-md-block" id="filterSection">
                    <div class="single-form-card card card-body">
                        <form action="{{ route('user.transaction.index') }}" method="GET" class="row gy-3 align-items-end">
                            <!-- Date Range -->
                            <div class="col-md-auto">
                                <label for="reportrange" class="form-label small">{{ __('Date Range') }}</label>
                                <div class="input-group">
                                    <input type="hidden" name="daterange" value="{{ request('daterange') }}">
                                    <div id="reportrange" class="form-control rounded d-flex align-items-center"
                                         role="button" tabindex="0" aria-label="{{ __('Select date range') }}">
                                        <i class="fa-solid fa-calendar-days me-2"></i>
                                        <span class="flex-grow-1">{{ request('daterange') ?? __('Select Date') }}</span>
                                        <i class="fa-solid fa-angle-down ms-2"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Currency -->
                            <div class="col-md-auto">
                                <x-form.select name="currency" label="{{ __('Currency') }}"
                                    :options="CurrencyEnum::options()" :selected="request('currency')" />
                            </div>

                            <div class="col-md-auto">
                                  <button type="submit" class="btn btn-primary">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                            </div>


                        </form>
                    </div>
                </div>

                <!-- Transactions Table -->
                <div class="table-responsive mt-3">
                    <table id="datatable" class="table table-bordered table-hover align-middle">
                        <thead class="table-light">
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
                                        TrxStatus::PENDING->value => ['code' => '102','description' => __('Processing')],
                                        TrxStatus::COMPLETED->value => ['code' => '200','description' => __('Success')],
                                        TrxStatus::CANCELED->value => ['code' => '499','description' => __('Client Closed Request')],
                                        TrxStatus::FAILED->value => ['code' => '400','description' => __('Bad Request')],
                                    ];

                                    $responseDetails = $statusResponseMap[$transaction->status->value] ?? ['code' => '000','description' => __('Unknown Status')];
                                    $responseCode = $trxData['response_code'] ?? $responseDetails['code'];
                                @endphp
                                <tr data-bs-toggle="modal" data-bs-target="#transactionModal{{ $transaction->id }}" style="cursor:pointer">
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
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#transactionModal{{ $transaction->id }}">
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
                </div> <!-- table-responsive -->
            </div> <!-- card-body -->
        </div> <!-- card -->
    </div> <!-- col-12 -->
</div> <!-- row -->
@endsection
