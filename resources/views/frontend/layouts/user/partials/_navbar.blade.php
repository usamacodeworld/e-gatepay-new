<header class="admin-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-8">
                <div class="header-brand">
                    <button class="mobile-toggle d-lg-none" id="sidebarToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/E-gatepay-logo-NaOCHgGrTsVTCS5De4gqN65gJH5tJL.png"
                         alt="E-Gatepay" height="35" class="brand-logo">
                </div>
            </div>

            <div class="col-lg-8 col-md-6 col-4">
                <div class="header-actions d-flex justify-content-end align-items-center gap-3">
                    <div class="payable-amount" id="payableAmount">
                        <i class="fas fa-wallet"></i>
                        <span class="amount-text">
                            Payable: ${{ number_format(auth()->user()->payable_amount, 2) }}
                        </span>
                    </div>

                    <!-- Merchant Account Dropdown -->
                    <div class="dropdown">
                        <button class="btn btn-light d-flex align-items-center gap-2" id="merchantDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle"></i>
                            <span class="account-text">Merchant Account</span>
                            <i class="fas fa-chevron-down small"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="merchantDropdown">
                            <!-- Edit Profile -->
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('user.settings.profile') }}">
                                    <i class="fas fa-edit text-primary"></i> Edit Profile
                                </a>
                            </li>

                            <li><hr class="dropdown-divider"></li>

                            <!-- Logout -->
                            <li>
                                <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item d-flex align-items-center gap-2 text-danger">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- End Merchant Account Dropdown -->
                </div>
            </div>
        </div>
    </div>
</header>
