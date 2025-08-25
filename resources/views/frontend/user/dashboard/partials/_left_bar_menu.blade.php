    <aside class="admin-sidebar" id="adminSidebar">
        <div class="sidebar-header">
            <div class="sidebar-brand">
                <i class="fas fa-chart-line brand-icon"></i>
                <span class="brand-text">Merchant Portal</span>
            </div>
            <button class="sidebar-close d-lg-none" id="sidebarClose">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <nav class="sidebar-nav">
            <ul class="nav-list">
                <li class="nav-item @yield('dashboard')">
                    <a href="{{ route('user.dashboard') }}" class="nav-link">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item @yield('monitoring')">
                    <a href="{{ route('user.transaction.index') }}" class="nav-link">
                        <i class="fas fa-chart-line"></i>
                        <span>Monitoring</span>
                    </a>
                </li>
                <li class="nav-item @yield('archived')">
                    <a href="{{ route('user.transaction.archived') }}" class="nav-link">
                        <i class="fas fa-archive"></i>
                        <span>Archived Transactions</span>
                    </a>
                </li>
                <li class="nav-item @yield('successful')">
                    <a href="{{ route('user.transaction.successful') }}" class="nav-link">
                        <i class="fas fa-check-circle"></i>
                        <span>Successful Transactions</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link @yield('settlements_collapse_active')" data-bs-toggle="collapse"
                        data-bs-target="#settlementsMenu">
                        <i class="fas fa-chart-bar"></i>
                        <span>Settlements</span>
                        <i class="fas fa-chevron-right nav-arrow"></i>
                    </a>
                    <div class="collapse @yield('collapse_show')" id="settlementsMenu">
                        <ul class="sub-nav">
                            <li><a href="{{ route('user.settlements.index') }}" class="nav-link"><i
                                        class="fas fa-circle"></i><span>Settlements</span></a></li>
                            <li><a href="{{ route('user.settlements.running-balance') }}" class="nav-link"><i
                                        class="fas fa-circle"></i><span>Running Balance</span></a></li>
                            <li><a href="{{ route('user.settlements.dispursal') }}" class="nav-link"><i
                                        class="fas fa-circle"></i><span>Dispersal</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link  @yield('merchant_collapse_active')" data-bs-toggle="collapse"
                        data-bs-target="#apiMenu">
                        <i class="fas fa-code"></i>
                        <span>My API</span>
                        <i class="fas fa-chevron-right nav-arrow"></i>
                    </a>
                    <div class="collapse  @yield('merchant_collapse_show')" id="apiMenu">
                        <ul class="sub-nav">
                            @php
                                // Check if the merchant exists
                                $merchant = \App\Models\Merchant::where('user_id', auth()->user()->id)->first();
                                $hasMerchant = $merchant ? true : false;
                            @endphp
                            @if ($hasMerchant)
                                <li>
                                    <a href="{{ route('user.merchant.config', $merchant->id) }}" class="nav-link">
                                        <i class="fas fa-circle"></i> API Credentials
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('user.merchant.index') }}" class="nav-link">
                                        <i class="fas fa-circle"></i> Merchant Dashboard
                                    </a>
                                </li>
                            @endauth
                            <li><a href="{{ route('api-docs.index') }}" target="_blank" class="nav-link"><i
                                        class="fas fa-circle"></i><span>Documentation</span></a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</aside>
