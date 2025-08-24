@extends('frontend.layouts.user.index')
@section('title', __('Dashboard'))
@section('dashboard', 'active')
@section('content')

    <main class="admin-main">
        <div class="container-fluid">
            <!-- Dashboard Header -->
            <div class="dashboard-header">
                <div class="row align-items-center mb-4">
                    <div class="col-lg-8 col-md-12">
                        <h1 class="page-title">Dashboard</h1>
                        <p class="page-subtitle">Welcome back! Here's what's happening with your payments today.
                        </p>
                    </div>
                    {{-- <div class="col-lg-4 col-md-12">
                        <div class="date-range-picker">
                            <button class="btn btn-outline-secondary">
                                <i class="fas fa-calendar-alt me-2"></i>
                                Last 30 days
                            </button>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- Top Stats Card -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="stats-card">
                        <div class="stats-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="stats-content">
                            <h3 class="stats-value">${{ number_format($todayTotal, 2) }}</h3>
                            <p class="stats-label">Day's Collection</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Collections and Disbursals -->
            <div class="row g-4">
                <!-- Collections Section -->
                <div class="col-lg-6">
                    <div class="section-card">
                        <div class="section-header">
                            <div class="section-icon collections-icon">
                                <i class="fas fa-arrow-down"></i>
                            </div>
                            <h4 class="section-title">Collections</h4>
                        </div>

                        <!-- Card Collections -->
                        <div class="payment-method-card">
                            <div class="method-header">
                                <h5 class="method-title">Card</h5>
                            </div>
                            <div class="method-stats">
                                <div class="stat-item">
                                    <span class="stat-label">Collections (Month to Date)</span>
                                    <span class="stat-value">$ {{ number_format($card_month_to_date, 2) }}</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-label">Collections (All processed)</span>
                                    <span class="stat-value">$ {{ number_format($card_all_processed, 2) }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Collections -->
                        <div class="payment-method-card">
                            <div class="method-header">
                                <h5 class="method-title mobile-title">Mobile</h5>
                            </div>
                            <div class="method-stats">
                                <div class="stat-item">
                                    <span class="stat-label">Collections (Month to Date)</span>
                                    <span class="stat-value">$ {{ number_format($mobile_month_to_date, 2) }}</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-label">Collections (All processed)</span>
                                    <span class="stat-value">$ {{ number_format($mobile_all_processed, 2) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Disbursals Section -->
                <div class="col-lg-6">
                    <div class="section-card">
                        <div class="section-header">
                            <div class="section-icon disbursals-icon">
                                <i class="fas fa-arrow-up"></i>
                            </div>
                            <h4 class="section-title">Disbursals/Payouts</h4>
                        </div>

                        <!-- Card Disbursals -->
                        <div class="payment-method-card">
                            <div class="method-header">
                                <h5 class="method-title">Card</h5>
                            </div>
                            <div class="method-stats">
                                <div class="stat-item">
                                    <span class="stat-label">Payouts (Month to Date)</span>
                                    <span class="stat-value">$ {{ number_format($payouts_month_to_date, 2) }}</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-label">Payouts (All processed)</span>
                                    <span class="stat-value">$ {{ number_format($payouts_all_processed, 2) }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Disbursals -->
                        <div class="payment-method-card">
                            <div class="method-header">
                                <h5 class="method-title mobile-title">Mobile</h5>
                            </div>
                            <div class="method-stats">
                                <div class="stat-item">
                                    <span class="stat-label">Disbursals (Month to Date)</span>
                                    <span class="stat-value">$ {{ number_format($disbursals_month_to_date, 2) }}</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-label">Disbursals (All processed)</span>
                                    <span class="stat-value">$ {{ number_format($disbursals_all_processed, 2) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="row g-4 mt-4">
                <div class="col-12">
                    <div class="chart-card">
                        <div class="chart-header">
                            <h5 class="chart-title">Volume by Currency (Collections vs Disbursals)</h5>
                        </div>
                        <div class="chart-container">
                            <canvas id="volumeByCurrencyChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-lg-6">
                    <div class="chart-card">
                        <div class="chart-header">
                            <h5 class="chart-title">Daily Volume vs Transaction Count</h5>
                        </div>
                        <div class="chart-container">
                            <canvas id="dailyVolumeChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="chart-card">
                        <div class="chart-header">
                            <h5 class="chart-title">Weekly Volume vs Transaction Count</h5>
                        </div>
                        <div class="chart-container">
                            <canvas id="weeklyVolumeChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @push('scripts')
        @include('frontend.user.dashboard.partials._script')
    @endpush
@endsection
