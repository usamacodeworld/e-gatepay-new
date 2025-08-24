<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - E-Gatepay Merchant Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('new_frontend/styles/login-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('general/css/simple-notify.min.css') }}">
</head>

<body>
    <!-- Enhanced ultra professional gradient background with floating shapes -->
    <div class="auth-background">

        <div class="auth-container">
            <div class="auth-card">
                <!-- Enhanced logo design with better styling -->
                <div class="logo-container">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/E-gatepay-logo-NaOCHgGrTsVTCS5De4gqN65gJH5tJL.png"
                        alt="E-Gatepay" height="50" class="brand-logo">
                </div>


                <form class="auth-form" action="{{ route('merchant.login') }}" method="POST">
                    @csrf
                    <!-- Enhanced form inputs with better styling -->
                    <div class="form-group">
                        <label class="form-label">E-mail Or Username</label>
                        <div class="input-group">
                            <span class="input-icon">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="email" name="login" class="auth-input auth-input-t"
                                value="{{ old('login') }}" placeholder="Enter your email or username" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-icon">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" name="password" class="auth-input auth-input-t" required
                                placeholder="Enter your password">
                            <button type="button" class="password-toggle">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="form-options">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Remember Me
                            </label>
                        </div>
                        {{-- <a href="{{ route('user.password.request') }}" class="forgot-password">Forgot Password?</a> --}}
                    </div>

                    <!-- Enhanced button with gradient and hover effects -->
                    <button type="submit" class="auth-btn">
                        <i class="fas fa-sign-in-alt me-2"></i>Login
                    </button>

                </form>
            </div>
        </div>
    </div>

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
