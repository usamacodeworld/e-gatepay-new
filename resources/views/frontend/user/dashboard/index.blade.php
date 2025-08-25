@extends('frontend.layouts.user.index')
@section('title', __('Dashboard'))
@section('dashboard', 'active_li_class')
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
    <script>
        // Pass PHP variables to JavaScript safely
        const volumeData = {
            cardCollections: @json($card_all_processed),
            mobileCollections: @json($mobile_all_processed),
            payouts: @json($payouts_all_processed),
            disbursals: @json($disbursals_all_processed),
        };

        const dailyStats = {
            dates: @json($dates),
            volumes: @json($dailyVolumes),
            trxCounts: @json($dailyTrxCounts),
        };

        const weeklyStats = {
            weeks: @json($weeks),
            volumes: @json($weeklyVolumes),
            trxCounts: @json($weeklyTrxCounts),
        };

        // Initialize charts after a short delay to ensure Chart.js is loaded
        function initializeCharts() {
            if (typeof window.Chart !== "undefined") {
                // Volume by Currency Chart (Bar Chart)
                const volumeByCurrencyCtx = document.getElementById("volumeByCurrencyChart");
                if (volumeByCurrencyCtx) {
                    new window.Chart(volumeByCurrencyCtx, {
                        type: "bar",
                        data: {
                            labels: ["Card", "Mobile"],
                            datasets: [{
                                    label: "Collections",
                                    data: [volumeData.cardCollections, volumeData.mobileCollections],
                                    backgroundColor: "#10b981",
                                    borderRadius: 8,
                                    maxBarThickness: 80,
                                },
                                {
                                    label: "Disbursals",
                                    data: [volumeData.payouts, volumeData.disbursals],
                                    backgroundColor: "#f04f36",
                                    borderRadius: 8,
                                    maxBarThickness: 80,
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    position: "top",
                                    align: "center",
                                    labels: {
                                        usePointStyle: true,
                                        padding: 20,
                                        font: {
                                            family: "Poppins",
                                            size: 12
                                        },
                                    },
                                },
                            },
                            scales: {
                                x: {
                                    grid: {
                                        display: false
                                    },
                                    ticks: {
                                        font: {
                                            family: "Poppins",
                                            size: 11
                                        }
                                    },
                                },
                                y: {
                                    beginAtZero: true,
                                    grid: {
                                        color: "#e2e8f0"
                                    },
                                    ticks: {
                                        font: {
                                            family: "Poppins",
                                            size: 11
                                        }
                                    },
                                },
                            },
                        },
                    });
                }

                // Daily Volume vs Transaction Count Chart (Line Chart)
                const dailyVolumeCtx = document.getElementById("dailyVolumeChart");
                if (dailyVolumeCtx) {
                    new window.Chart(dailyVolumeCtx, {
                        type: "line",
                        data: {
                            labels: dailyStats.dates,
                            datasets: [{
                                    label: "Volume",
                                    data: dailyStats.volumes,
                                    borderColor: "#10b981",
                                    backgroundColor: "rgba(16, 185, 129, 0.1)",
                                    tension: 0.4,
                                    fill: true,
                                },
                                {
                                    label: "Transactions",
                                    data: dailyStats.trxCounts,
                                    borderColor: "#60a5fa",
                                    backgroundColor: "rgba(96, 165, 250, 0.1)",
                                    tension: 0.4,
                                    fill: true,
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    position: "top",
                                    align: "center",
                                    labels: {
                                        usePointStyle: true,
                                        padding: 20,
                                        font: {
                                            family: "Poppins",
                                            size: 12
                                        },
                                    },
                                },
                            },
                            scales: {
                                x: {
                                    grid: {
                                        color: "#e2e8f0"
                                    },
                                    ticks: {
                                        font: {
                                            family: "Poppins",
                                            size: 11
                                        }
                                    },
                                },
                                y: {
                                    beginAtZero: true,
                                    grid: {
                                        color: "#e2e8f0"
                                    },
                                    ticks: {
                                        font: {
                                            family: "Poppins",
                                            size: 11
                                        }
                                    },
                                },
                            },
                        },
                    });
                }

                // Weekly Volume vs Transaction Count Chart (Line Chart)
                const weeklyVolumeCtx = document.getElementById("weeklyVolumeChart");
                if (weeklyVolumeCtx) {
                    new window.Chart(weeklyVolumeCtx, {
                        type: "line",
                        data: {
                            labels: weeklyStats.weeks,
                            datasets: [{
                                    label: "Volume",
                                    data: weeklyStats.volumes,
                                    borderColor: "#f89043",
                                    backgroundColor: "rgba(248, 144, 67, 0.1)",
                                    tension: 0.4,
                                    fill: true,
                                },
                                {
                                    label: "Transactions",
                                    data: weeklyStats.trxCounts,
                                    borderColor: "#60a5fa",
                                    backgroundColor: "rgba(96, 165, 250, 0.1)",
                                    tension: 0.4,
                                    fill: true,
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    position: "top",
                                    align: "center",
                                    labels: {
                                        usePointStyle: true,
                                        padding: 20,
                                        font: {
                                            family: "Poppins",
                                            size: 12
                                        },
                                    },
                                },
                            },
                            scales: {
                                x: {
                                    grid: {
                                        color: "#e2e8f0"
                                    },
                                    ticks: {
                                        font: {
                                            family: "Poppins",
                                            size: 11
                                        }
                                    },
                                },
                                y: {
                                    beginAtZero: true,
                                    grid: {
                                        color: "#e2e8f0"
                                    },
                                    ticks: {
                                        font: {
                                            family: "Poppins",
                                            size: 11
                                        }
                                    },
                                },
                            },
                        },
                    });
                }
            } else {
                setTimeout(initializeCharts, 100);
            }
        }

        setTimeout(initializeCharts, 200);
    </script>

    @push('scripts')
        @include('frontend.user.dashboard.partials._script')
    @endpush
@endsection
