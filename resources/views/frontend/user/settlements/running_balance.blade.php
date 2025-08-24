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
                            <form action="{{ route('user.settlements.dispursal') }}" method="GET"
                                class="row gy-3 align-items-end">
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
                                    <x-form.select name="currency" label="{{ __('Currency') }}" :options="CurrencyEnum::options()"
                                        :selected="request('currency')" />
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
                    <!-- Running Balance Table -->
                    <div class="table-responsive shadow-sm mt-5">
                        <h5 class="mb-3 text-white">Running Balance History</h5>
                        <table class="table table-bordered table-hover">
                            <thead class="table-info text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Settlement ID</th>
                                    <th>Previous Balance</th>
                                    <th>Settlement Amount</th>
                                    <th>Current Balance</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($runningBalance as $key => $balance)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $balance->created_at->format('d M Y') }}</td>
                                        <td>{{ $balance->settlement_id }}</td>
                                        <td class="text-primary fw-semibold">
                                            ${{ number_format($balance->opening_balance, 2) }}
                                        </td>
                                        <td class="text-success fw-semibold">
                                            ${{ number_format($balance->transaction_amount, 2) }}
                                        </td>
                                        <td class="text-warning fw-semibold">
                                            ${{ number_format($balance->closing_balance, 2) }}
                                        </td>
                                        <td>{{ $balance->description ?? 'N/A' }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-muted">No running balance records found
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- table-responsive -->
                </div> <!-- card-body -->
            </div> <!-- card -->
        </div> <!-- col-12 -->
    </div> <!-- row -->
@endsection
