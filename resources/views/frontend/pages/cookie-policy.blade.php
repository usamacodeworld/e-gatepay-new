<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Policy - E-Gatepay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('new_frontend/asset/css/style.css')}}">
    <style>
        :root {
            --primary: #FF6B35;
            --secondary: #F7931E;
            --dark: #2c3e50;
            --light: #f8f9fa;
            --gray: #6c757d;
            --border-radius: 12px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #444;
            background-color: #f9fbfd;
            line-height: 1.7;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Sora', sans-serif;
            color: var(--dark);
        }

        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)),
            url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            min-height: 60vh;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
        }

        .hero-content {
            text-align: center;
            color: white;
            padding: 3rem 0;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            font-weight: 400;
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        .gradient-text {
            background: linear-gradient(45deg, #FF6B35, #F7931E);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .policy-card {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 2.5rem;
            margin-bottom: 30px;
            border-left: 4px solid var(--primary);
        }

        .toc-container {
            position: sticky;
            top: 30px;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
            margin-bottom: 30px;
        }

        .toc-title {
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--dark);
            border-bottom: 2px solid var(--primary);
            padding-bottom: 0.75rem;
        }

        .toc-list {
            list-style: none;
            padding: 0;
        }

        .toc-list li {
            margin-bottom: 0.7rem;
            padding-bottom: 0.7rem;
            border-bottom: 1px dashed #e9ecef;
        }

        .toc-list li:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .toc-list a {
            color: var(--gray);
            text-decoration: none;
            transition: all 0.3s;
            display: flex;
            align-items: center;
        }

        .toc-list a:hover {
            color: var(--primary);
            transform: translateX(5px);
        }

        .toc-list a i {
            margin-right: 10px;
            font-size: 0.8rem;
            color: var(--primary);
        }

        .policy-title {
            font-family: 'Sora', sans-serif;
            font-weight: 800;
            margin-bottom: 2rem;
            color: var(--dark);
            position: relative;
            padding-bottom: 1rem;
        }

        .policy-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            border-radius: 10px;
        }

        .section-title {
            font-weight: 700;
            margin-top: 2rem;
            margin-bottom: 1rem;
            color: var(--dark);
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #e9ecef;
        }

        .highlight {
            background: linear-gradient(45deg, rgba(255, 107, 53, 0.1), rgba(247, 147, 30, 0.1));
            padding: 1.5rem;
            border-radius: var(--border-radius);
            border-left: 3px solid var(--primary);
            margin: 1.5rem 0;
        }

        .cookie-type-card {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border-top: 3px solid var(--primary);
            transition: all 0.3s ease;
        }

        .cookie-type-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .cookie-icon {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .last-updated {
            font-size: 0.9rem;
            color: var(--gray);
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #e9ecef;
        }

        .breadcrumb {
            background: rgba(255,255,255,0.2);
            padding: 0.75rem 1rem;
            border-radius: 30px;
            display: inline-flex;
        }

        .breadcrumb-item a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: white;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            color: rgba(255,255,255,0.5);
        }

        .table-cookies {
            width: 100%;
            border-collapse: collapse;
        }

        .table-cookies th {
            background-color: rgba(255, 107, 53, 0.1);
            text-align: left;
            padding: 12px 15px;
            font-weight: 600;
        }

        .table-cookies td {
            padding: 12px 15px;
            border-bottom: 1px solid #e9ecef;
        }

        .table-cookies tr:hover {
            background-color: rgba(247, 147, 30, 0.05);
        }

        .cookie-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .badge-essential {
            background-color: rgba(40, 167, 69, 0.15);
            color: #28a745;
        }

        .badge-analytics {
            background-color: rgba(0, 123, 255, 0.15);
            color: #007bff;
        }

        .badge-functional {
            background-color: rgba(220, 53, 69, 0.15);
            color: #dc3545;
        }

        .badge-advertising {
            background-color: rgba(255, 193, 7, 0.15);
            color: #ffc107;
        }

        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.3);
            z-index: 1000;
            transition: all 0.3s;
            opacity: 0;
            visibility: hidden;
            text-decoration: none;
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background: var(--secondary);
            transform: translateY(-5px);
        }

        footer {
            background: var(--dark);
            color: white;
            padding: 3rem 0;
            margin-top: 3rem;
        }

        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.8rem;
            }

            .policy-card {
                padding: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.3rem;
            }

            .toc-container {
                position: relative;
                top: 0;
            }
        }
    </style>
</head>
<body>
@include('frontend.layouts.partials._header_sticky')

<!-- Hero Section -->
<section class="hero-section">
    <div class="container position-relative">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-8">
                <div class="hero-content">
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb" class="mb-4">
                        <ol class="breadcrumb justify-content-center bg-transparent p-0">
                            <li class="breadcrumb-item"><a href="#" class="text-white-50 text-decoration-none">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Cookie Policy</li>
                        </ol>
                    </nav>

                    <h1 class="hero-title">
                        <span class="gradient-text">Cookie Policy</span>
                    </h1>
                    <p class="hero-subtitle">
                        Learn how E-Gatepay uses cookies and similar technologies to enhance your experience and how you can manage your preferences.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<div class="container my-5">
    <div class="row">
        <!-- Table of Contents -->
        <div class="col-lg-4">
            <div class="toc-container">
                <h3 class="toc-title">Table of Contents</h3>
                <ul class="toc-list">
                    <li><a href="#introduction"><i class="fas fa-chevron-right"></i> Introduction</a></li>
                    <li><a href="#what-are-cookies"><i class="fas fa-chevron-right"></i> What Are Cookies?</a></li>
                    <li><a href="#how-we-use"><i class="fas fa-chevron-right"></i> How We Use Cookies</a></li>
                    <li><a href="#types-of-cookies"><i class="fas fa-chevron-right"></i> Types of Cookies We Use</a></li>
                    <li><a href="#third-party"><i class="fas fa-chevron-right"></i> Third-Party Cookies</a></li>
                    <li><a href="#managing"><i class="fas fa-chevron-right"></i> Managing Cookies</a></li>
                    <li><a href="#changes"><i class="fas fa-chevron-right"></i> Changes to This Policy</a></li>
                    <li><a href="#contact"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
                </ul>
                <div class="last-updated">
                    <i class="fas fa-history me-2"></i>Last updated: August 18, 2025
                </div>
            </div>
        </div>

        <!-- Cookie Policy Content -->
        <div class="col-lg-8">
            <div class="policy-card">
                <h2 class="policy-title">Cookie Policy</h2>

                <div id="introduction">
                    <h3 class="section-title">Introduction</h3>
                    <p>This Cookie Policy explains how E-Gatepay ("we", "us", or "our") uses cookies and similar tracking technologies when you visit our website <a href="https://www.e-gatepay.net">www.e-gatepay.net</a> and any related services. By using our website, you consent to the use of cookies as described in this policy.</p>

                    <div class="highlight">
                        <p><strong>What you need to know:</strong> Cookies are small text files that are stored on your device when you visit websites. They help us provide you with a better experience by remembering your preferences and understanding how you interact with our site.</p>
                    </div>

                    <p>This policy is designed to help you understand what cookies are, how we use them, and how you can manage your cookie preferences. We may update this policy from time to time, so please review it periodically.</p>
                </div>

                <div id="what-are-cookies">
                    <h3 class="section-title">What Are Cookies?</h3>
                    <p>Cookies are small text files placed on your computer or mobile device when you visit websites. They are widely used to make websites work more efficiently and to provide information to website owners.</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="cookie-type-card">
                                <div class="cookie-icon">
                                    <i class="fas fa-cookie-bite"></i>
                                </div>
                                <h4>How Cookies Work</h4>
                                <p>When you visit a website, it sends a cookie to your device. Your browser stores the cookie and sends it back to the website with your next visit.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cookie-type-card">
                                <div class="cookie-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <h4>Cookie Duration</h4>
                                <p>Cookies can be "session" cookies (deleted when you close your browser) or "persistent" cookies (remain until they expire or are deleted).</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="how-we-use">
                    <h3 class="section-title">How We Use Cookies</h3>
                    <p>We use cookies for several important purposes:</p>

                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Essential Operation</h5>
                                    <p class="mb-0">To enable core functionality like page navigation and access to secure areas</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Performance & Analytics</h5>
                                    <p class="mb-0">To understand how visitors interact with our website</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Functionality</h5>
                                    <p class="mb-0">To remember your preferences and settings</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Security</h5>
                                    <p class="mb-0">To protect against fraudulent use and enhance security</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Personalization</h5>
                                    <p class="mb-0">To provide relevant content based on your interests</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Advertising</h5>
                                    <p class="mb-0">To measure the effectiveness of advertising campaigns</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="types-of-cookies">
                    <h3 class="section-title">Types of Cookies We Use</h3>
                    <p>We use different types of cookies for various purposes:</p>

                    <div class="mt-4">
                        <div class="cookie-type-card">
                            <div class="d-flex align-items-center mb-3">
                                <span class="cookie-badge badge-essential">Essential</span>
                                <h4 class="mb-0">Strictly Necessary Cookies</h4>
                            </div>
                            <p>These cookies are essential for the website to function properly. They enable core functionality such as security, network management, and accessibility. You cannot opt out of these cookies as the website won't work without them.</p>
                        </div>

                        <div class="cookie-type-card">
                            <div class="d-flex align-items-center mb-3">
                                <span class="cookie-badge badge-analytics">Analytics</span>
                                <h4 class="mb-0">Performance Cookies</h4>
                            </div>
                            <p>These cookies help us understand how visitors interact with our website by collecting and reporting information anonymously. This helps us improve the way our website works.</p>
                        </div>

                        <div class="cookie-type-card">
                            <div class="d-flex align-items-center mb-3">
                                <span class="cookie-badge badge-functional">Functional</span>
                                <h4 class="mb-0">Functionality Cookies</h4>
                            </div>
                            <p>These cookies enable the website to provide enhanced functionality and personalization, such as remembering your preferences and choices (like language or region).</p>
                        </div>

                        <div class="cookie-type-card">
                            <div class="d-flex align-items-center mb-3">
                                <span class="cookie-badge badge-advertising">Advertising</span>
                                <h4 class="mb-0">Targeting/Advertising Cookies</h4>
                            </div>
                            <p>These cookies may be set through our site by our advertising partners to build a profile of your interests and show you relevant ads on other sites.</p>
                        </div>
                    </div>

                    <h4 class="mt-5 mb-3">Cookie Details</h4>
                    <div class="table-responsive">
                        <table class="table-cookies">
                            <thead>
                            <tr>
                                <th>Cookie Name</th>
                                <th>Purpose</th>
                                <th>Duration</th>
                                <th>Type</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>session_id</td>
                                <td>Maintains user session state</td>
                                <td>Session</td>
                                <td><span class="cookie-badge badge-essential">Essential</span></td>
                            </tr>
                            <tr>
                                <td>consent_preferences</td>
                                <td>Stores your cookie preferences</td>
                                <td>1 year</td>
                                <td><span class="cookie-badge badge-functional">Functional</span></td>
                            </tr>
                            <tr>
                                <td>_ga</td>
                                <td>Google Analytics - distinguishes users</td>
                                <td>2 years</td>
                                <td><span class="cookie-badge badge-analytics">Analytics</span></td>
                            </tr>
                            <tr>
                                <td>_gid</td>
                                <td>Google Analytics - distinguishes users</td>
                                <td>24 hours</td>
                                <td><span class="cookie-badge badge-analytics">Analytics</span></td>
                            </tr>
                            <tr>
                                <td>_gat</td>
                                <td>Google Analytics - throttle request rate</td>
                                <td>1 minute</td>
                                <td><span class="cookie-badge badge-analytics">Analytics</span></td>
                            </tr>
                            <tr>
                                <td>fr</td>
                                <td>Facebook advertising cookie</td>
                                <td>3 months</td>
                                <td><span class="cookie-badge badge-advertising">Advertising</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="third-party">
                    <h3 class="section-title">Third-Party Cookies</h3>
                    <p>We work with third-party services that may set cookies on our behalf to provide their services. These include:</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start mb-4">
                                <div class="bg-light p-3 rounded-circle me-3">
                                    <i class="fab fa-google fa-lg text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Google Analytics</h5>
                                    <p class="mb-0">Helps us analyze website traffic and user behavior</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start mb-4">
                                <div class="bg-light p-3 rounded-circle me-3">
                                    <i class="fab fa-facebook fa-lg text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Facebook Pixel</h5>
                                    <p class="mb-0">Helps us measure ad effectiveness and build audiences</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start mb-4">
                                <div class="bg-light p-3 rounded-circle me-3">
                                    <i class="fab fa-linkedin fa-lg text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">LinkedIn Insight</h5>
                                    <p class="mb-0">Provides analytics for our LinkedIn advertising campaigns</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start mb-4">
                                <div class="bg-light p-3 rounded-circle me-3">
                                    <i class="fas fa-video fa-lg text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">YouTube</h5>
                                    <p class="mb-0">Allows embedding of videos and tracking engagement</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-warning mt-4">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        These third-party cookies are subject to the respective privacy policies of the providers. We recommend reviewing their policies for more information.
                    </div>
                </div>

                <div id="managing">
                    <h3 class="section-title">Managing Cookies</h3>
                    <p>You have the right to choose whether to accept non-essential cookies. You can manage your cookie preferences in several ways:</p>

                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="bg-light p-4 rounded h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary text-white p-2 rounded-circle me-3">
                                        <i class="fas fa-sliders-h"></i>
                                    </div>
                                    <h5 class="mb-0">Browser Settings</h5>
                                </div>
                                <p>Most browsers allow you to control cookies through their settings. You can usually find these settings in the "Options" or "Preferences" menu.</p>
                                <p class="mb-0">Refer to your browser's help section for specific instructions.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="bg-light p-4 rounded h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary text-white p-2 rounded-circle me-3">
                                        <i class="fas fa-cookie"></i>
                                    </div>
                                    <h5 class="mb-0">Consent Management</h5>
                                </div>
                                <p>When you first visit our website, you'll see a cookie banner where you can manage your preferences for non-essential cookies.</p>
                                <p class="mb-0">You can change your preferences at any time by clicking the "Cookie Settings" link in our website footer.</p>
                            </div>
                        </div>
                    </div>

                    <div class="highlight mt-4">
                        <p><strong>Note:</strong> Blocking certain types of cookies may impact your experience of our website and the services we are able to offer. Essential cookies cannot be disabled as they are necessary for basic functionality.</p>
                    </div>

                    <h4 class="mt-4">Browser-Specific Instructions</h4>
                    <div class="row mt-3">
                        <div class="col-md-3 col-6 text-center mb-4">
                            <i class="fab fa-chrome fa-2x text-primary mb-2"></i>
                            <h6>Chrome</h6>
                        </div>
                        <div class="col-md-3 col-6 text-center mb-4">
                            <i class="fab fa-firefox fa-2x text-primary mb-2"></i>
                            <h6>Firefox</h6>
                        </div>
                        <div class="col-md-3 col-6 text-center mb-4">
                            <i class="fab fa-safari fa-2x text-primary mb-2"></i>
                            <h6>Safari</h6>
                        </div>
                        <div class="col-md-3 col-6 text-center mb-4">
                            <i class="fab fa-edge fa-2x text-primary mb-2"></i>
                            <h6>Edge</h6>
                        </div>
                    </div>
                </div>

                <div id="changes">
                    <h3 class="section-title">Changes to This Cookie Policy</h3>
                    <p>We may update this Cookie Policy from time to time to reflect changes in technology, legislation, or our data practices. We encourage you to periodically review this page for the latest information on our use of cookies.</p>

                    <div class="d-flex align-items-center bg-light p-4 rounded mt-4">
                        <div class="me-3 text-primary">
                            <i class="fas fa-bell fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Notification of Changes</h5>
                            <p class="mb-0">When we make significant changes to this policy, we will notify you through our website or by email where appropriate.</p>
                        </div>
                    </div>
                </div>

                <div id="contact">
                    <h3 class="section-title">Contact Us</h3>
                    <p>If you have any questions about our use of cookies or this Cookie Policy, please contact us:</p>

                    <div class="bg-light p-4 rounded mt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white text-primary p-3 rounded-circle me-3">
                                        <i class="fas fa-envelope fa-lg"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Email</h5>
                                        <p class="mb-0">privacy@e-gatepay.net</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white text-primary p-3 rounded-circle me-3">
                                        <i class="fas fa-globe fa-lg"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Website</h5>
                                        <p class="mb-0">www.e-gatepay.net</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
@include('frontend.layouts.partials._footer')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('new_frontend/asset/js/script.js')}}"></script>
</body>

</html>
