<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments - E-Gatepay Payment Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('new_frontend/asset/css/style.css')}}">

</head>

<body>
    <!-- Navigation -->
    @include('frontend.layouts.partials._header_sticky')


    <!-- Payments Hero Banner -->
    <section class="hero-section" style="background: linear-gradient(135deg, rgba(102, 126, 234, 0.9) 0%, rgba(118, 75, 162, 0.9) 100%), url('https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&h=600&q=80') center/cover;">
        <div class="hero-bg-elements">
            <div class="floating-shape shape-1"></div>
            <div class="floating-shape shape-2"></div>
            <div class="floating-shape shape-3"></div>
        </div>
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="hero-content">
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb" class="mb-4">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html" class="text-white-50">Home</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Payments</li>
                            </ol>
                        </nav>

                        <div class="hero-badge">
                            <span class="badge-icon">💳</span>
                            <span>Complete Payment Solutions</span>
                        </div>
                        <h1 class="hero-title text-white">
                            Advanced <span class="gradient-text">Payment Solutions</span><br>
                            For Modern Businesses
                        </h1>
                        <p class="hero-subtitle text-white-75">
                            Accept payments anywhere, anytime with our comprehensive suite of payment processing solutions designed for businesses of all sizes.
                        </p>

                        <div class="hero-actions mt-5">
                            <button class="btn btn-primary btn-lg me-3">
                                Start Processing
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                            <button class="btn btn-outline-light btn-lg">
                                <i class="fas fa-play me-2"></i>
                                View Demo
                            </button>
                        </div>

                        <!-- Payment Stats -->
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <div class="hero-stat">
                                    <h3 class="text-white">$2.5B+</h3>
                                    <p class="text-white-75">Processed Monthly</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="hero-stat">
                                    <h3 class="text-white">99.9%</h3>
                                    <p class="text-white-75">Success Rate</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="hero-stat">
                                    <h3 class="text-white">150+</h3>
                                    <p class="text-white-75">Countries Supported</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Payment Methods Section -->
    <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title">
                        Accept All <span class="text-primary">Payment Methods</span>
                    </h2>
                    <p class="section-description">
                        Comprehensive payment acceptance with support for all major payment methods and digital wallets worldwide.
                    </p>
                </div>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=200&q=80" alt="Credit Cards" class="service-card-image">
                        <div class="service-icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h4>Card master visa</h4>
                        <p>Accept all major credit and debit cards with industry-leading processing rates and instant settlements.</p>
                        <div class="service-features">
                            <span class="feature-tag">Visa</span>
                            <span class="feature-tag">Mastercard</span>
                            <span class="feature-tag">Amex</span>
                            <span class="feature-tag">Discover</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=200&q=80" alt="Mobile Payments" class="service-card-image">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4>Mobile Money</h4>
                        <p>Seamless integration with popular mobile money for faster checkout and improved customer experience.</p>
                        <div class="service-features">
                            <span class="feature-tag">Apple Pay</span>
                            <span class="feature-tag">Google Pay</span>
                            <span class="feature-tag">PayPal</span>
                            <span class="feature-tag">Samsung Pay</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1541354329998-f4d9a9f9297f?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=200&q=80" alt="Bank Transfers" class="service-card-image">
                        <div class="service-icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <h4>Bank Transfers</h4>
                        <p>Direct bank transfers and ACH payments for lower fees and higher transaction limits.</p>
                        <div class="service-features">
                            <span class="feature-tag">ACH</span>
                            <span class="feature-tag">Wire Transfer</span>
                            <span class="feature-tag">SEPA</span>
                            <span class="feature-tag">Local Banks</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <img src="https://images.seeklogo.com/logo-png/33/2/google-pay-logo-png_seeklogo-334912.png" alt="Cryptocurrency" class="service-card-image">
                        <div class="service-icon">
                            <i class="fa-brands fa-google-pay"></i>
                        </div>
                        <h4>Gpay</h4>
                        <p>
                            Gpay makes it simple for businesses to accept crypto payments with instant, secure, and low-fee transactions.
                        </p>
                        <div class="service-features">
                            <span class="feature-tag">Fast Transactions</span>
                            <span class="feature-tag">Low Fees</span>
                            <span class="feature-tag">Global Access</span>
                            <span class="feature-tag">Secure Gateway</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <img src="https://static.cdnlogo.com/logos/a/95/apple-pay.png" alt="Apple Pay" class="service-card-image">
                        <div class="service-icon">
                            <i class="fab fa-apple-pay"></i>
                        </div>
                        <h4>Apple Pay</h4>
                        <p>
                            Apple Pay offers a fast, secure, and convenient way for customers to pay using their iPhone, iPad, or Apple Watch.
                        </p>
                        <div class="service-features">
                            <span class="feature-tag">One-Tap Checkout</span>
                            <span class="feature-tag">High Security</span>
                            <span class="feature-tag">Contactless</span>
                            <span class="feature-tag">Trusted by Apple</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Payment Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="features-content">
                        <h2 class="section-title">
                            Advanced <span class="text-primary">Payment Features</span>
                        </h2>
                        <p class="section-description">
                            Powerful features designed to optimize your payment processing and enhance customer experience.
                        </p>
                        <div class="features-list">
                            <div class="feature-item">
                                <div class="feature-check">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div class="feature-content">
                                    <h6>Real-Time Processing</h6>
                                    <p>Process payments instantly with sub-second response times</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-check">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="feature-content">
                                    <h6>Advanced Fraud Protection</h6>
                                    <p>AI-powered fraud detection with machine learning algorithms</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-check">
                                    <i class="fas fa-sync"></i>
                                </div>
                                <div class="feature-content">
                                    <h6>Automatic Retries</h6>
                                    <p>Smart retry logic to maximize successful payment completion</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-check">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="feature-content">
                                    <h6>Real-Time Analytics</h6>
                                    <p>Comprehensive reporting and analytics dashboard</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-check">
                                    <i class="fas fa-code"></i>
                                </div>
                                <div class="feature-content">
                                    <h6>Developer-Friendly APIs</h6>
                                    <p>RESTful APIs with comprehensive documentation and SDKs</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-check">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <div class="feature-content">
                                    <h6>24/7 Support</h6>
                                    <p>Round-the-clock technical support and customer service</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="features-visual">
                        <div class="features-image-container">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80"
                                alt="Payment Features" class="features-image">
                            <div class="floating-benefit benefit-1">
                                <div class="benefit-icon">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <span>Lightning Fast</span>
                            </div>
                            <div class="floating-benefit benefit-2">
                                <div class="benefit-icon">
                                    <i class="fas fa-shield-halved"></i>
                                </div>
                                <span>Ultra Secure</span>
                            </div>
                            <div class="floating-benefit benefit-3">
                                <div class="benefit-icon">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <span>Global Reach</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="onboarding-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title">
                        Transparent <span class="text-primary">Pricing</span>
                    </h2>
                    <p class="section-description">
                        Simple, competitive pricing with no hidden fees. Pay only for what you use.
                    </p>
                </div>
            </div>
            <div class="row g-4 mt-5">
                <div class="col-lg-4">
                    <div class="onboarding-step">
                        <div class="step-icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h4>Card Payments</h4>
                        <div class="pricing-rate">2.9% + $0.30</div>
                        <p>Per successful transaction</p>
                        <div class="step-features">
                            <span class="step-feature">✓ All Major Cards</span>
                            <span class="step-feature">✓ Instant Settlement</span>
                            <span class="step-feature">✓ Fraud Protection</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="onboarding-step">
                        <div class="step-icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <h4>Bank Transfers</h4>
                        <div class="pricing-rate">0.8% + $5.00</div>
                        <p>Per successful transaction</p>
                        <div class="step-features">
                            <span class="step-feature">✓ ACH Processing</span>
                            <span class="step-feature">✓ Lower Fees</span>
                            <span class="step-feature">✓ Higher Limits</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="onboarding-step">
                        <div class="step-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4>International</h4>
                        <div class="pricing-rate">3.4% + $0.30</div>
                        <p>Per successful transaction</p>
                        <div class="step-features">
                            <span class="step-feature">✓ Multi-Currency</span>
                            <span class="step-feature">✓ Local Methods</span>
                            <span class="step-feature">✓ FX Conversion</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Integration Section -->
    <section class="dashboard-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title">
                        Easy <span class="text-primary">Integration</span>
                    </h2>
                    <p class="section-description">
                        Get started in minutes with our developer-friendly APIs and comprehensive documentation.
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="dashboard-preview">
                        <div class="dashboard-image-container">
                            <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&h=600&q=80"
                                alt="API Integration" class="dashboard-image">
                            <div class="dashboard-overlay">
                                <div class="dashboard-stats">
                                    <div class="dashboard-stat">
                                        <span class="stat-value">5 min</span>
                                        <span class="stat-label">Setup Time</span>
                                    </div>
                                    <div class="dashboard-stat">
                                        <span class="stat-value">99.9%</span>
                                        <span class="stat-label">API Uptime</span>
                                    </div>
                                    <div class="dashboard-stat">
                                        <span class="stat-value">50ms</span>
                                        <span class="stat-label">Response Time</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2 class="section-title">
                            Ready to Start <span class="text-primary">Processing?</span>
                        </h2>
                        <p class="section-description">
                            Join thousands of businesses that trust E-Gatepay for their payment processing needs.
                        </p>
                        <div class="hero-actions mt-4">
                            <button class="btn btn-primary btn-lg me-3">
                                Get Started Now
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                            <button class="btn btn-outline-secondary btn-lg">
                                Contact Sales
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-visual">
                        <div class="about-image-container">
                            <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=500&q=80"
                                alt="Start Processing" class="about-image">
                            <div class="floating-metric metric-1">
                                <span class="metric-number">50K+</span>
                                <span class="metric-label">Businesses</span>
                            </div>
                            <div class="floating-metric metric-2">
                                <span class="metric-number">150+</span>
                                <span class="metric-label">Countries</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-brand">
                       <img src="assest/images/E-gatepay-logo-White.png"
                            alt="E-Gatepay" height="40" class="footer-logo">
                        <p class="footer-description">
                            Leading the future of digital payments with secure, seamless,
                            and scalable solutions for businesses worldwide.
                        </p>
                        <div class="footer-social">
                            <a href="#" class="social-link">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="footer-heading">Company</h6>
                    <ul class="footer-links">
                        <li><a href="our-company.blade.php">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="footer-heading">Services</h6>
                    <ul class="footer-links">
                        <li><a href="payments.html">Payment Processing</a></li>
                        <li><a href="#">Mobile Payments</a></li>
                        <li><a href="#">Global Payments</a></li>
                        <li><a href="#">API Integration</a></li>
                        <li><a href="#">Analytics</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="footer-heading">Resources</h6>
                    <ul class="footer-links">
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">API Reference</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Status Page</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="footer-heading">Legal</h6>
                    <ul class="footer-links">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">Compliance</a></li>
                        <li><a href="#">Licenses</a></li>
                    </ul>
                </div>
            </div>
            <hr class="footer-divider">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="footer-copyright">
                        &copy; 2024 E-Gatepay. All rights reserved.
                        <span class="footer-tagline">Powering the future of payments.</span>
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="footer-legal">
                        <a href="#">Privacy</a>
                        <a href="#">Terms</a>
                        <a href="#">Cookies</a>
                        <a href="#">Security</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('new_frontend/asset/js/script.js')}}"></script>
</body>

</html>
