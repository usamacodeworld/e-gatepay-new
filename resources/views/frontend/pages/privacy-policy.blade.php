<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - E-Gatepay</title>
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

        .contact-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 107, 53, 0.1);
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }



        .contact-page .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)),
            url('https://images.unsplash.com/photo-1607799279861-4dd421887fb3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            min-height: 60vh;
            position: relative;
            overflow: hidden;
        }

        .contact-page .hero-section .hero-content .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
        }

        .contact-page .hero-section .hero-content .hero-subtitle {
            font-size: 1.3rem;
            font-weight: 400;
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-page .contact-card h5 {
            font-weight: 600;
            color: #2c3e50;
        }

        .contact-page .contact-form h3 {
            font-weight: 700;
            color: #2c3e50;
        }

        .contact-page .office-card h4 {
            font-weight: 600;
        }

        .terms-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
            url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            padding: 100px 0;
            position: relative;
            margin-bottom: 50px;
        }

        .terms-card {
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

        .terms-title {
            font-family: 'Sora', sans-serif;
            font-weight: 800;
            margin-bottom: 2rem;
            color: var(--dark);
            position: relative;
            padding-bottom: 1rem;
        }

        .terms-title:after {
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
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background: var(--secondary);
            transform: translateY(-5px);
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

        .last-updated {
            font-size: 0.9rem;
            color: var(--gray);
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #e9ecef;
        }

        @media (max-width: 992px) {
            .terms-hero {
                padding: 70px 0;
            }

            .terms-card {
                padding: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .toc-container {
                position: relative;
                top: 0;
            }
        }
    </style>
</head>

<body class="contact-page">
<!-- Navigation -->
@include('frontend.layouts.partials._header_sticky')
<section class="hero-section">
    <div class="container position-relative">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-8">
                <div class="hero-content">
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb" class="mb-4">
                        <ol class="breadcrumb justify-content-center bg-transparent p-0">
                            <li class="breadcrumb-item"><a href="/"
                                                           class="text-white-50 text-decoration-none">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Privacy Policy</li>
                        </ol>
                    </nav>

                    <h1 class="hero-title text-white mb-4">
                            <span class="gradient-text"
                                  style="background: linear-gradient(45deg, #FF6B35, #F7931E); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Privacy Policy</span>
                    </h1>
                    <p class="hero-subtitle text-white mb-5"
                       style="font-size: 1.3rem; font-weight: 400;  max-width: 600px; margin: 0 auto;">
                        Your Privacy is important to us. Learn you we protect your information.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<div class="container mb-5">
    <div class="row">
        <!-- Table of Contents -->
        <div class="col-lg-4">
            <div class="toc-container">
                <h3 class="toc-title">Table of Contents</h3>
                <ul class="toc-list">
                    <li><a href="#introduction"><i class="fas fa-chevron-right"></i> Introduction</a></li>
                    <li><a href="#collection"><i class="fas fa-chevron-right"></i> Collection of Information</a></li>
                    <li><a href="#use"><i class="fas fa-chevron-right"></i> Use of Information</a></li>
                    <li><a href="#disclosure"><i class="fas fa-chevron-right"></i> Disclosure of Information</a></li>
                    <li><a href="#tracking"><i class="fas fa-chevron-right"></i> Tracking Technologies</a></li>
                    <li><a href="#third-party"><i class="fas fa-chevron-right"></i> Third-Party Websites</a></li>
                    <li><a href="#security"><i class="fas fa-chevron-right"></i> Security</a></li>
                    <li><a href="#children"><i class="fas fa-chevron-right"></i> Children's Privacy</a></li>
                    <li><a href="#do-not-track"><i class="fas fa-chevron-right"></i> Do-Not-Track</a></li>
                    <li><a href="#rights"><i class="fas fa-chevron-right"></i> Your Rights</a></li>
                    <li><a href="#contact"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
                </ul>
                <div class="last-updated">
                    <i class="fas fa-history me-2"></i>Last updated: August 18, 2025
                </div>
            </div>
        </div>

        <!-- Privacy Content -->
        <div class="col-lg-8">
            <div class="privacy-card">
                <h2 class="privacy-title">Privacy Policy</h2>

                <div id="introduction">
                    <h3 class="section-title">Introduction</h3>
                    <p>E-Gatepay ("we," "our," or "us") respects the privacy of our users. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website <a href="https://www.e-gatepay.net">www.e-gatepay.net</a>, including any other media form, media channel, mobile website, or mobile application related or connected thereto (collectively, the "Site").</p>

                    <div class="highlight">
                        <p><strong>Please read this Privacy Policy carefully.</strong> If you do not agree with the terms of this Privacy Policy, please do not access the Site.</p>
                    </div>

                    <p>We reserve the right to make changes to this Privacy Policy at any time and for any reason. We will alert you of any changes by updating the "Last Updated" date of this Privacy Policy. Any modifications are effective immediately upon posting the updated Privacy Policy on the Site.</p>

                    <p>By continuing to use the Site after updates, you are deemed to have accepted the revised Privacy Policy. We encourage you to review this Privacy Policy periodically.</p>

                    <div class="privacy-timeline">
                        <div class="timeline-item">
                            <h5>Effective Date</h5>
                            <p>This policy is effective as of August 18, 2025</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Policy Updates</h5>
                            <p>We may update this policy periodically</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Your Consent</h5>
                            <p>By using our site, you consent to our privacy policy</p>
                        </div>
                    </div>
                </div>

                <div id="collection">
                    <h3 class="section-title">Collection of Your Information</h3>
                    <p>We may collect information about you in a variety of ways. The information we may collect on the Site includes:</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="data-type-card">
                                <div class="data-type-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <h5>Personal Data</h5>
                                <p class="mb-0">Name, address, email, phone number, demographic details that you voluntarily provide.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="data-type-card">
                                <div class="data-type-icon">
                                    <i class="fas fa-server"></i>
                                </div>
                                <h5>Derivative Data</h5>
                                <p class="mb-0">IP address, browser type, operating system, access times, and pages visited.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="data-type-card">
                                <div class="data-type-icon">
                                    <i class="fas fa-credit-card"></i>
                                </div>
                                <h5>Financial Data</h5>
                                <p class="mb-0">Payment method details (credit card, bank details) when making purchases.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="data-type-card">
                                <div class="data-type-icon">
                                    <i class="fas fa-hashtag"></i>
                                </div>
                                <h5>Social Media Data</h5>
                                <p class="mb-0">Information from social networks when you connect your account.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="data-type-card">
                                <div class="data-type-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <h5>Mobile Device Data</h5>
                                <p class="mb-0">Device ID, model, OS, and geolocation data (with permission).</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="data-type-card">
                                <div class="data-type-icon">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <h5>Other Data</h5>
                                <p class="mb-0">Information from contests, surveys, or feedback channels.</p>
                            </div>
                        </div>
                    </div>

                    <div class="highlight mt-4">
                        <p><strong>Note:</strong> Declining to provide personal information may limit access to certain Site features.</p>
                    </div>
                </div>

                <div id="use">
                    <h3 class="section-title">Use of Your Information</h3>
                    <p>We use the information collected for purposes including:</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Payment Processing</h6>
                                    <p class="mb-0">Processing and managing transactions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Security</h6>
                                    <p class="mb-0">Preventing fraud and ensuring secure services</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Account Management</h6>
                                    <p class="mb-0">Creating and managing user accounts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Personalization</h6>
                                    <p class="mb-0">Providing personalized services and recommendations</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Support</h6>
                                    <p class="mb-0">Delivering customer support and responses</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Communication</h6>
                                    <p class="mb-0">Sending updates, promotions, or newsletters</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Compliance</h6>
                                    <p class="mb-0">Meeting legal and regulatory obligations</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Improvement</h6>
                                    <p class="mb-0">Conducting analytics to improve our services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="disclosure">
                    <h3 class="section-title">Disclosure of Your Information</h3>
                    <p>We may share information in the following situations:</p>

                    <div class="mt-4">
                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-light p-3 rounded-circle me-3">
                                <i class="fas fa-gavel fa-lg text-primary"></i>
                            </div>
                            <div>
                                <h5>By Law or to Protect Rights</h5>
                                <p class="mb-0">When required by law, regulation, or to defend legal claims, prevent fraud, or ensure safety.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-light p-3 rounded-circle me-3">
                                <i class="fas fa-cogs fa-lg text-primary"></i>
                            </div>
                            <div>
                                <h5>Service Providers</h5>
                                <p class="mb-0">With trusted third parties that assist with payment processing, hosting, analytics, and marketing.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-light p-3 rounded-circle me-3">
                                <i class="fas fa-bullhorn fa-lg text-primary"></i>
                            </div>
                            <div>
                                <h5>Marketing</h5>
                                <p class="mb-0">With your consent, we may share limited information with third parties for promotional purposes.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-light p-3 rounded-circle me-3">
                                <i class="fas fa-exchange-alt fa-lg text-primary"></i>
                            </div>
                            <div>
                                <h5>Business Transfers</h5>
                                <p class="mb-0">In the event of a merger, acquisition, restructuring, or sale of assets.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <div class="bg-light p-3 rounded-circle me-3">
                                <i class="fas fa-users fa-lg text-primary"></i>
                            </div>
                            <div>
                                <h5>Other Users</h5>
                                <p class="mb-0">If you engage in Site interactions (e.g., forums, chat, or postings), other users may see your shared data.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tracking">
                    <h3 class="section-title">Tracking Technologies</h3>
                    <p>We may use cookies, tracking pixels, and similar technologies to improve user experience and customize content. You may disable cookies in your browser, but certain Site features may not function properly.</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="bg-light p-4 rounded text-center h-100">
                                <i class="fas fa-cookie-bite fa-2x text-primary mb-3"></i>
                                <h5>Cookies</h5>
                                <p class="mb-0">Small data files stored on your device to enhance site functionality.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-4 rounded text-center h-100">
                                <i class="fas fa-chart-line fa-2x text-primary mb-3"></i>
                                <h5>Analytics</h5>
                                <p class="mb-0">We use tools like Google Analytics to understand site usage patterns.</p>
                            </div>
                        </div>
                    </div>

                    <div class="highlight mt-4">
                        <p>We may partner with third-party providers such as Google Analytics for data analysis and remarketing. Please review their policies for more details and opt-out options.</p>
                    </div>
                </div>

                <div id="third-party">
                    <h3 class="section-title">Third-Party Websites</h3>
                    <p>The Site may contain links to third-party websites. This Privacy Policy does not apply to third-party platforms. Please review their policies before providing personal data.</p>

                    <div class="alert alert-warning mt-4">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        We are not responsible for the content or privacy practices of any third-party sites.
                    </div>
                </div>

                <div id="security">
                    <h3 class="section-title">Security of Your Information</h3>
                    <p>We implement administrative, technical, and physical security measures to protect your personal information. However, no system is completely secure, and we cannot guarantee 100% protection against unauthorized access or data breaches.</p>

                    <div class="row mt-4">
                        <div class="col-md-4 text-center mb-4">
                            <div class="bg-primary text-white p-3 rounded-circle d-inline-block">
                                <i class="fas fa-lock fa-2x"></i>
                            </div>
                            <h5 class="mt-3">Encryption</h5>
                            <p>Data transmission protected with SSL encryption</p>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="bg-primary text-white p-3 rounded-circle d-inline-block">
                                <i class="fas fa-shield-alt fa-2x"></i>
                            </div>
                            <h5 class="mt-3">Access Controls</h5>
                            <p>Strict access controls to protect your data</p>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="bg-primary text-white p-3 rounded-circle d-inline-block">
                                <i class="fas fa-user-shield fa-2x"></i>
                            </div>
                            <h5 class="mt-3">Monitoring</h5>
                            <p>Continuous security monitoring and testing</p>
                        </div>
                    </div>
                </div>

                <div id="children">
                    <h3 class="section-title">Children's Privacy</h3>
                    <p>We do not knowingly collect or market to children under the age of 18. If we learn we have collected personal data from a child, we will delete it promptly.</p>

                    <div class="d-flex align-items-center bg-light p-4 rounded mt-4">
                        <div class="me-3 text-primary">
                            <i class="fas fa-child fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Parental Controls</h5>
                            <p class="mb-0">Parents or guardians who believe their child has provided us with personal information should contact us immediately.</p>
                        </div>
                    </div>
                </div>

                <div id="do-not-track">
                    <h3 class="section-title">Do-Not-Track Signals</h3>
                    <p>Currently, our Site does not respond to Do-Not-Track browser signals. If future standards are adopted, we will update this Privacy Policy accordingly.</p>
                </div>

                <div id="rights">
                    <h3 class="section-title">Your Rights & Options</h3>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="bg-light p-4 rounded h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary text-white p-2 rounded-circle me-3">
                                        <i class="fas fa-user-cog"></i>
                                    </div>
                                    <h5 class="mb-0">Account Information</h5>
                                </div>
                                <p>You may review, update, or delete your account at any time by logging in or contacting us.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="bg-light p-4 rounded h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary text-white p-2 rounded-circle me-3">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <h5 class="mb-0">Emails & Communications</h5>
                                </div>
                                <p>You may opt out of receiving promotional emails by updating preferences in your account settings or contacting us directly.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="contact">
                    <h3 class="section-title">Contact Us</h3>
                    <p>If you have any questions or concerns regarding this Privacy Policy, please contact us:</p>

                    <div class="contact-card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white text-primary p-3 rounded-circle me-3">
                                        <i class="fas fa-envelope fa-lg"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Email</h5>
                                        <p class="mb-0">support@e-gatepay.net</p>
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
