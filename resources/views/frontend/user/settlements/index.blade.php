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
                            <form action="{{ route('user.settlements.index') }}" method="GET"
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
                    <div class="table-responsive shadow-sm mt-4">
                        <table class="table table-bordered table-hover">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th>Settlement ID</th>
                                    <th>Date</th>
                                    <th>Gross</th>
                                    <th>Tax</th>
                                    <th>Rolling Balance</th>
                                    <th>Gateway Fee</th>
                                    <th>Net</th>
                                    <th>Status</th>
                                    <th>Receipt</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($settlements as $settlement)
                                    <tr>
                                        <td>{{ $settlement->settlement_id }}</td>
                                        <td>{{ $settlement->settlement_date->format('d M Y') }}</td>
                                        <td class="text-primary fw-semibold">
                                            ${{ number_format($settlement->gross_amount, 2) }}</td>
                                        <td class="text-danger">${{ number_format($settlement->tax_amount, 2) }}</td>
                                        <td class="text-danger">
                                            ${{ number_format($settlement->rolling_balance_amount, 2) }}</td>
                                        <td class="text-warning">${{ number_format($settlement->gateway_fee, 2) }}</td>
                                        <td><strong
                                                class="text-success">${{ number_format($settlement->net_amount, 2) }}</strong>
                                        </td>
                                        <td>
                                            <span
                                                class="badge bg-{{ $settlement->status === 'paid' ? 'success' : ($settlement->status === 'pending' ? 'warning' : 'danger') }}">
                                                {{ ucfirst($settlement->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            @if ($settlement->payment_receipts)
                                                @foreach (json_decode($settlement->payment_receipts) as $receipt)
                                                    <a href="{{ asset('storage/' . $receipt) }}" target="_blank"
                                                        class="badge bg-primary">View</a><br>
                                                @endforeach
                                            @else
                                                —
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="12" class="text-center text-muted">No settlements found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div> <!-- table-responsive -->
                </div> <!-- card-body -->
            </div> <!-- card -->
        </div> <!-- col-12 -->
    </div> <!-- row -->
@endsection
