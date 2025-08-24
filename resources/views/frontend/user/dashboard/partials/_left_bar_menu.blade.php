    <aside class="admin-sidebar" id="adminSidebar">
            <div class="sidebar-header">
                <div class="sidebar-brand">
                    <i class="fas fa-chart-line brand-icon"></i>
                    <span class="brand-text">Admin Portal</span>
                </div>
                <button class="sidebar-close d-lg-none" id="sidebarClose">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <nav class="sidebar-nav">
                <ul class="nav-list">
                    <li class="nav-item active_li_class sdadada">
                        <a href="{{ route('user.dashboard') }}" class="nav-link">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="monitoring.html" class="nav-link">
                            <i class="fas fa-chart-line"></i>
                            <span>Monitoring</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="archived-transactions.html" class="nav-link">
                            <i class="fas fa-archive"></i>
                            <span>Archived Transactions</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="successful-transactions.html" class="nav-link">
                            <i class="fas fa-check-circle"></i>
                            <span>Successful Transactions</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#settlementsMenu">
                            <i class="fas fa-chart-bar"></i>
                            <span>Settlements</span>
                            <i class="fas fa-chevron-right nav-arrow"></i>
                        </a>
                        <div class="collapse" id="settlementsMenu">
                            <ul class="sub-nav">
                                <li><a href="settlements.html" class="nav-link"><i
                                            class="fas fa-circle"></i><span>Settlements</span></a></li>
                                <li><a href="running-balance.html" class="nav-link"><i
                                            class="fas fa-circle"></i><span>Running Balance</span></a></li>
                                <li><a href="dispersal.html" class="nav-link"><i
                                            class="fas fa-circle"></i><span>Dispersal</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#apiMenu">
                            <i class="fas fa-code"></i>
                            <span>My API</span>
                            <i class="fas fa-chevron-right nav-arrow"></i>
                        </a>
                        <div class="collapse" id="apiMenu">
                            <ul class="sub-nav">
                                <li><a href="api-keys.html" class="nav-link"><i class="fas fa-circle"></i><span>API
                                            Keys</span></a></li>
                                <li><a href="documentation.html" class="nav-link"><i
                                            class="fas fa-circle"></i><span>Documentation</span></a></li>
                                <li><a href="webhooks.html" class="nav-link"><i
                                            class="fas fa-circle"></i><span>Webhooks</span></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </aside>