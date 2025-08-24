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
                <div class="header-actions">
                    <!-- Added click functionality for mobile screens to show/hide text -->
                    <div class="payable-amount" id="payableAmount">
                        <i class="fas fa-wallet"></i>
                        <span class="amount-text">Payable: ${{ number_format(auth()->user()->payable_amount, 2) }}</span>
                    </div>
                    <div class="merchant-account" id="merchantAccount">
                        <i class="fas fa-user-circle"></i>
                        <span class="account-text">Merchant Account</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
