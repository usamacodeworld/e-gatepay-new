@php
    use App\Enums\TrxType;
    use App\Enums\TrxStatus;
    use App\Enums\CurrencyEnum;
@endphp

@extends('frontend.layouts.user.index')

@section('title', __($page_name))
@section('settlements_collapse_active', 'active_li_class')
@section('collapse_show', 'show')
@section('content')
    <main class="admin-main">
        <div class="container-fluid">
            <!-- Updated page title and subtitle for settlements -->
            <div class="dashboard-header">
                <div class="row align-items-center mb-4">
                    <div class="col-md-8">
                        <h1 class="page-title">{{ __($page_name) }}</h1>
                        <p class="page-subtitle">Track your account balance changes and settlement history.</p>
                    </div>
                </div>
            </div>

            <!-- Filters Section -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="filter-section">
                        <form action="{{ route('user.settlements.running-balance') }}" method="GET">

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
                                    Showing <strong>{{ $runningBalance->firstItem() }}</strong> to
                                    <strong>{{ $runningBalance->lastItem() }}</strong> of
                                    <strong>{{ $runningBalance->total() }}</strong> entries
                                </span>
                            </div>
                            <div>
                                {{ $runningBalance->links('pagination::bootstrap-5') }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
