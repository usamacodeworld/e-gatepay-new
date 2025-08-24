<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply For Merchant - E-Gatepay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('general/css/simple-notify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('new_frontend/styles/login-styles.css') }}">
</head>

<body>
    @php
        $myCurrentLocation = getLocation();
        $allCountries = getCountries();
    @endphp

    <!-- Enhanced register background with floating shapes -->
    <div class="auth-background register-background">
        <div class="floating-shapes"></div>
        <div class="auth-container register-container">
            <div class="auth-card">
                <!-- Enhanced logo design matching login page -->
                <div class="logo-container">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/E-gatepay-logo-NaOCHgGrTsVTCS5De4gqN65gJH5tJL.png"
                        alt="E-Gatepay" height="35" class="brand-logo">
                </div>
                <div class="register-title-container">
                    <div class="register-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <h2 class="auth-title">Apply For Merchant</h2>
                </div>
                <p class="auth-subtitle">Sign up as a merchant with E-Gatepay</p>

                <button type="button" class="btn-business">
                    <i class="fas fa-briefcase me-2"></i>Business Account
                </button>

                <div class="merchant-benefits">
                    <div class="benefits-content">
                        <i class="fas fa-check-circle benefits-icon"></i>
                        <span class="benefits-text">Merchant benefits: Accept payments, generate QR codes, access API,
                            reduced fees</span>
                    </div>
                </div>

                <form class="auth-form" method="POST" action="{{ route('merchant.register') }}">
                    @csrf
                    <div class="section-header">
                        <i class="fas fa-user section-icon"></i>
                        <h5 class="section-title">Personal Information</h5>
                    </div>

                    <!-- Enhanced responsive form layout -->
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">First Name</label>
                            <input type="text" class="auth-input" placeholder="First Name" name="first_name"
                                value="{{ old('first_name') }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="auth-input" placeholder="Last Name" name="last_name"
                                value="{{ old('last_name') }}" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Username</label>
                            <input type="text" class="auth-input" placeholder="Choose a username" name="username"
                                value="{{ old('username') }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="auth-input" placeholder="Email Address" name="email"
                                value="{{ old('email') }}" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Country</label>
                            <select class="auth-input" id="countrySelect"  name="country" required>
                                <option selected disabled>{{ __('Select Country') }}</option>
                                @foreach ($allCountries as $country)
                                    <option value="{{ $country['code'] . ':' . $country['dial_code'] }}"
                                        @selected(old('country', $myCurrentLocation['dial_code']) == $country['dial_code'])>
                                        {{ title($country['name']) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <div class="phone-input-group">
                                <span class="country-code" id="phone">{{ $myCurrentLocation['dial_code'] }}</span>
                                <input type="tel" class="phone-input" placeholder="Phone" name="phone"
                                    value="{{ old('phone') }}" required>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced submit button -->
                    <button type="submit" class="auth-btn">
                        <i class="fas fa-user-plus me-2"></i>Apply For Merchant Account
                    </button>

                    <div class="auth-footer">
                        <span class="footer-text">Already have an account? </span>
                        <a href="{{ route('merchant.login') }}" class="auth-link">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('general/js/simple-notify.min.js') }}"></script>
    <script src="{{ asset('general/js/helpers.js?v=' . config('app.version')) }}"></script>{{-- Auth Script --}}
    <script src="{{ asset('frontend/js/auth.js') }}"></script>
    {{-- Global Notify Configuration --}}
    @include('general._notify_evs')
    {{-- Page Specific Scripts --}}
    @yield('scripts')
    @stack('scripts')
</body>

</html>
