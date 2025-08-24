@extends('frontend.layouts.app')
@section('content')

<!-- Revolutionary hero section -->
<section class="hero-section">
    <div class="hero-bg-elements">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
        <div class="floating-shape shape-4"></div>
    </div>
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="hero-badge"> <span class="badge-icon">🚀</span> <span>Trusted by 50,000+ businesses
                            worldwide</span> </div>
                    <h1 class="hero-title"> All-In-One Platform<br> For <span class="gradient-text">Digitised
                            Payments</span> </h1>
                    <p class="hero-subtitle"> <span class="highlight-text">Simple. Seamless. Secure.</span> </p>
                    <div class="hero-features">
                        <div class="feature-pill"> <i class="fas fa-bolt"></i> <span>Instant Processing</span> </div>
                        <div class="feature-pill"> <i class="fas fa-shield-halved"></i> <span>Bank-Grade Security</span>
                        </div>
                        <div class="feature-pill"> <i class="fas fa-globe"></i> <span>Global Coverage</span> </div>
                    </div>
                    <div class="hero-actions"> <button class="btn btn-primary btn-lg"> Get Started Today <i
                                class="fas fa-arrow-right ms-2"></i>
                        </button>{{--                            <button class="btn btn-outline-secondary btn-lg"> --}}{{--                                <i class="fas fa-play me-2"></i> --}}{{--                                Watch Demo --}}{{--                            </button> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-visual">
                    <div class="hero-image-container"> <img
                            src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                            alt="Modern Payment Dashboard" class="hero-image">
                        <div class="floating-ui-card card-success">
                            <div class="ui-card-icon"> <i class="fas fa-check"></i> </div>
                            <div class="ui-card-content"> <span class="ui-card-title">Payment Successful</span> <span
                                    class="ui-card-amount">$1,250.00</span> </div>
                        </div>
                        <div class="floating-ui-card card-analytics">
                            <div class="ui-card-icon"> <i class="fas fa-chart-line"></i> </div>
                            <div class="ui-card-content"> <span class="ui-card-title">Revenue Growth</span> <span
                                    class="ui-card-amount">+127%</span> </div>
                        </div>
                        <div class="floating-ui-card card-security">
                            <div class="ui-card-icon"> <i class="fas fa-shield-alt"></i> </div>
                            <div class="ui-card-content"> <span class="ui-card-title">Secure Transactions</span> <span
                                    class="ui-card-amount">100%</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- Enhanced about section -->
<section id="company" class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-visual">
                    <div class="about-image-container"> <img
                            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=500&q=80"
                            alt="E-Gatepay Team" class="about-image">
                        <div class="floating-metric metric-1"> <span class="metric-number">2.5B+</span> <span
                                class="metric-label">Transactions</span> </div>
                        <div class="floating-metric metric-2"> <span class="metric-number">99.9%</span> <span
                                class="metric-label">Success Rate</span> </div>
                    </div>
                    <div class="dotted-pattern"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 class="section-title"> We Are <span class="text-primary">E-Gatepay</span> </h2>
                    <p class="section-subtitle">Global Payment Provider</p>
                    <p class="section-description"> At E-Gatepay, we're revolutionizing the way businesses handle
                        payments. Our cutting-edge platform combines advanced technology with intuitive design to
                        deliver seamless payment experiences that drive growth and customer satisfaction. </p>
                    <div class="about-features">
                        <div class="about-feature">
                            <div class="feature-icon-small"> <i class="fas fa-rocket"></i> </div>
                            <div class="feature-content">
                                <h6>Lightning Fast</h6>
                                <p>Process payments in milliseconds with our optimized infrastructure</p>
                            </div>
                        </div>
                        <div class="about-feature">
                            <div class="feature-icon-small"> <i class="fas fa-lock"></i> </div>
                            <div class="feature-content">
                                <h6>Ultra Secure</h6>
                                <p>Bank-grade encryption and compliance with global security standards</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- Modern services section -->
<section id="payments" class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title"> Payments And <span class="text-primary">Beyond</span> </h2>
                <p class="section-subtitle">Everything E-Gatepay Offers</p>
                <p class="section-description"> Comprehensive payment solutions designed to meet every business need,
                    from startups to enterprises. </p>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon"> <i class="fas fa-credit-card"></i> </div>
                    <h4>Card Processing</h4>
                    <p>Accept all major credit and debit cards with industry-leading processing rates and instant
                        settlements.</p>
                    <div class="service-features"> <span class="feature-tag">Visa</span> <span
                            class="feature-tag">Mastercard</span> <span class="feature-tag">Amex</span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon"> <i class="fas fa-mobile-alt"></i> </div>
                    <h4>Mobile Payments</h4>
                    <p>Seamless mobile payment integration with support for Apple Pay, Google Pay, and digital wallets.
                    </p>
                    <div class="service-features"> <span class="feature-tag">Apple Pay</span> <span
                            class="feature-tag">Google Pay</span> <span class="feature-tag">Samsung Pay</span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon"> <i class="fas fa-globe"></i> </div>
                    <h4>Global Payments</h4>
                    <p>Process international transactions with multi-currency support and competitive exchange rates.
                    </p>
                    <div class="service-features"> <span class="feature-tag">150+ Countries</span> <span
                            class="feature-tag">Multi-Currency</span> <span class="feature-tag">Real-time FX</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- Redesigned industries section -->
<section id="merchants" class="industries-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title"> One Solution For<br> <span class="text-primary">All Industries</span> </h2>
                <p class="section-description"> Tailored payment solutions for every business vertical, from e-commerce
                    to healthcare and beyond. </p>
            </div>
        </div>
        <div class="row g-4 mt-5">
            <div class="col-lg-4 col-md-6">
                <div class="industry-card">
                    <div class="industry-icon"> <i class="fas fa-briefcase"></i> </div>
                    <h5>Financial Services</h5>
                    <p>Secure payment processing for banks, fintech companies, and financial institutions with
                        regulatory compliance.</p>
                    <div class="industry-stats"> <span class="stat">500+ Clients</span> <span class="stat">$1B+
                            Processed</span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="industry-card">
                    <div class="industry-icon"> <i class="fas fa-shopping-cart"></i> </div>
                    <h5>Retail & E-commerce</h5>
                    <p>Optimized checkout experiences and inventory management integration for online and offline
                        retailers.</p>
                    <div class="industry-stats"> <span class="stat">1000+ Stores</span> <span class="stat">99.8%
                            Uptime</span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="industry-card">
                    <div class="industry-icon"> <i class="fas fa-graduation-cap"></i> </div>
                    <h5>Education</h5>
                    <p>Streamlined payment solutions for educational institutions, online courses, and student
                        management systems.</p>
                    <div class="industry-stats"> <span class="stat">200+ Schools</span> <span class="stat">1M+
                            Students</span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="industry-card">
                    <div class="industry-icon"> <i class="fas fa-heartbeat"></i> </div>
                    <h5>Healthcare</h5>
                    <p>HIPAA-compliant payment processing for medical practices, hospitals, and healthcare service
                        providers.</p>
                    <div class="industry-stats"> <span class="stat">300+ Clinics</span> <span class="stat">HIPAA
                            Compliant</span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="industry-card">
                    <div class="industry-icon"> <i class="fas fa-utensils"></i> </div>
                    <h5>Food & Beverage</h5>
                    <p>Fast and reliable payment processing for restaurants, food delivery, and hospitality businesses.
                    </p>
                    <div class="industry-stats"> <span class="stat">800+ Restaurants</span> <span class="stat">2s
                            Avg Processing</span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="industry-card">
                    <div class="industry-icon"> <i class="fas fa-plane"></i> </div>
                    <h5>Travel & Tourism</h5>
                    <p>Multi-currency payment solutions for travel agencies, hotels, and tourism service providers
                        worldwide.</p>
                    <div class="industry-stats"> <span class="stat">150+ Agencies</span> <span
                            class="stat">Global Coverage</span> </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- Enhanced onboarding section -->
<section id="resources" class="onboarding-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title"> Quick Merchant Onboarding<br> And <span
                        class="text-primary">Integrations</span> </h2>
                <p class="section-subtitle">Get Started In 3 Simple Steps</p>
                <p class="section-description"> Our streamlined onboarding process gets you accepting payments in
                    minutes, not days. No complex paperwork, no lengthy approvals. </p>
            </div>
        </div>
        <div class="row g-4 mt-5">
            <div class="col-lg-4">
                <div class="onboarding-step">
                    <div class="step-number">1</div>
                    <div class="step-icon"> <i class="fas fa-user-plus"></i> </div>
                    <h4>Apply</h4>
                    <p>Complete our simple online application form with your business details. Takes less than 5
                        minutes.</p>
                    <div class="step-features"> <span class="step-feature">✓ Quick Form</span> <span
                            class="step-feature">✓ Secure Upload</span> <span class="step-feature">✓ Real-time
                            Validation</span> </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="onboarding-step">
                    <div class="step-number">2</div>
                    <div class="step-icon"> <i class="fas fa-shield-halved"></i> </div>
                    <h4>Verify</h4>
                    <p>Our automated verification system reviews your application and approves qualified merchants
                        instantly.</p>
                    <div class="step-features"> <span class="step-feature">✓ Instant Review</span> <span
                            class="step-feature">✓ AI-Powered</span> <span class="step-feature">✓ Secure
                            Process</span> </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="onboarding-step">
                    <div class="step-number">3</div>
                    <div class="step-icon"> <i class="fas fa-rocket"></i> </div>
                    <h4>Account Opening</h4>
                    <p>Get your merchant account activated and start accepting payments immediately with our easy
                        integration.</p>
                    <div class="step-features"> <span class="step-feature">✓ Instant Activation</span> <span
                            class="step-feature">✓ API Access</span> <span class="step-feature">✓ 24/7 Support</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="onboarding-connector">
            <div class="connector-line"></div>
        </div>
    </div>
</section> <!-- Modern features section -->
<section id="contact" class="features-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="features-content">
                    <h2 class="section-title"> Why Choose <span class="text-primary">E-Gatepay?</span> </h2>
                    <p class="section-description"> Experience the difference with our advanced payment platform
                        designed for modern businesses. </p>
                    <div class="features-list">
                        <div class="feature-item">
                            <div class="feature-check"> <i class="fas fa-check"></i> </div>
                            <div class="feature-content">
                                <h6>Easy Payments In Real Time</h6>
                                <p>Process transactions instantly with our real-time payment engine</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check"> <i class="fas fa-check"></i> </div>
                            <div class="feature-content">
                                <h6>Receive & Send Payments Instantly</h6>
                                <p>Bi-directional payment flows for complete financial flexibility</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check"> <i class="fas fa-check"></i> </div>
                            <div class="feature-content">
                                <h6>All Your Transactions Are Safe System</h6>
                                <p>Military-grade encryption and fraud protection for every transaction</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check"> <i class="fas fa-check"></i> </div>
                            <div class="feature-content">
                                <h6>Lowest Transaction Fees</h6>
                                <p>Competitive rates with transparent pricing and no hidden fees</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check"> <i class="fas fa-check"></i> </div>
                            <div class="feature-content">
                                <h6>Quick Integration</h6>
                                <p>Developer-friendly APIs and comprehensive documentation</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check"> <i class="fas fa-check"></i> </div>
                            <div class="feature-content">
                                <h6>Global Payment Gateway For Fast Approvals & Transfers</h6>
                                <p>Worldwide coverage with local payment methods and currencies</p>
                            </div>
                        </div>
                    </div> <button class="btn btn-primary btn-lg mt-4"> Get Started Now <i
                            class="fas fa-arrow-right ms-2"></i> </button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="features-visual">
                    <div class="features-image-container"> <img
                            src="https://images.unsplash.com/photo-1556741533-2c7e140cd038?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Why Choose E-Gatepay" class="features-image">
                        <div class="floating-benefit benefit-1">
                            <div class="benefit-icon"> <i class="fas fa-bolt"></i> </div> <span>Lightning Fast</span>
                        </div>
                        <div class="floating-benefit benefit-2">
                            <div class="benefit-icon"> <i class="fas fa-shield-halved"></i> </div> <span>Ultra
                                Secure</span>
                        </div>
                        <div class="floating-benefit benefit-3">
                            <div class="benefit-icon"> <i class="fas fa-globe"></i> </div> <span>Global Reach</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- Enhanced dashboard section -->
<section class="dashboard-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title"> Click Less, <span class="text-primary">Manage More</span> </h2>
                <p class="section-subtitle">Control All Expenses And Transactions With Our Dashboard</p>
                <p class="section-description"> Get complete visibility into your payment operations with our intuitive
                    dashboard featuring real-time analytics and insights. </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="dashboard-preview">
                    <div class="dashboard-image-container"> <img
                            src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&h=600&q=80"
                            alt="E-Gatepay Dashboard" class="dashboard-image">
                        <div class="dashboard-overlay">
                            <div class="dashboard-stats">
                                <div class="dashboard-stat"> <span class="stat-value">$2.5M</span> <span
                                        class="stat-label">Monthly Volume</span> </div>
                                <div class="dashboard-stat"> <span class="stat-value">99.9%</span> <span
                                        class="stat-label">Success Rate</span> </div>
                                <div class="dashboard-stat"> <span class="stat-value">1.2s</span> <span
                                        class="stat-label">Avg Response</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endSection
