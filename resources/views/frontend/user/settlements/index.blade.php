@php
    use App\Enums\TrxType;
    use App\Enums\TrxStatus;
    use App\Enums\CurrencyEnum;
@endphp

@extends('frontend.layouts.user.index')
@section('settlements_collapse_active', 'active_li_class')
@section('collapse_show', 'show')

@section('title', __($page_name))

@section('content')
    <main class="admin-main">
        <div class="container-fluid">
            <!-- Updated page title and subtitle for settlements -->
            <div class="dashboard-header">
                <div class="row align-items-center mb-4">
                    <div class="col-md-8">
                        <h1 class="page-title">{{ __($page_name) }}</h1>
                        <p class="page-subtitle">View and manage your settlement transactions and payouts.</p>
                    </div>
                </div>
            </div>

            <!-- Filters Section -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="filter-section">
                        @if ($page_name == 'Dispersal')
                            <form action="{{ route('user.settlements.dispursal') }}" method="GET">
                            @else
                                <form action="{{ route('user.settlements.index') }}" method="GET">
                        @endif
                        <div class="row g-3 align-items-end">
                            <!-- Date Range -->
                            <div class="col-md-3">
                                <label class="form-label">Date Range</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    <input type="text" class="form-control" id="dateRangePicker" name="daterange"
                                        placeholder="Select date range" value="{{ request('daterange') }}">
                                </div>
                            </div>
                            @if ($page_name == 'Dispersal')
                            @else
                                <div class="col-md-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" id="statusFilter" name="status"
                                        onchange="this.form.submit()">
                                        <option value="">All Status</option>
                                        <option value="approved">Approved</option>
                                        <option value="pending">Pending</option>
                                        <option value="rejected">Rejected</option>
                                    </select>
                                </div>
                            @endif



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

            <!-- Data Table Section -->
            <div class="row">
                <div class="col-12">
                    <div class="section-card">

                        <!-- Updated table structure for settlements data -->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Settlement ID <i class="fas fa-sort"></i></th>
                                        <th>Date <i class="fas fa-sort"></i></th>
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
                                    @forelse ($settlements as $settlement)
                                        <tr>
                                            <td>{{ $settlement->settlement_id }}</td>
                                            <td>{{ $settlement->settlement_date->format('d M Y') }}</td>
                                            <td class="text-primary fw-semibold">
                                                ${{ number_format($settlement->gross_amount, 2) }}</td>
                                            <td class="text-danger">${{ number_format($settlement->tax_amount, 2) }}</td>
                                            <td class="text-danger">
                                                ${{ number_format($settlement->rolling_balance_amount, 2) }}</td>
                                            <td class="text-warning">${{ number_format($settlement->gateway_fee, 2) }}
                                            </td>
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
                                            <td colspan="9" class="text-center py-5">
                                                <div class="text-muted">
                                                    <i class="fas fa-inbox fa-3x mb-3 d-block"></i>
                                                    <h5>No {{ $page_name }} found</h5>
                                                    <p>There are no {{ lcfirst($page_name) }} records to display at this
                                                        time.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-between align-items-center p-3 bg-light">
                            <div>
                                <span class="text-muted">
                                    Showing <strong>{{ $settlements->firstItem() }}</strong> to
                                    <strong>{{ $settlements->lastItem() }}</strong> of
                                    <strong>{{ $settlements->total() }}</strong> entries
                                </span>
                            </div>
                            <div>
                                {{ $settlements->links('pagination::bootstrap-5') }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
