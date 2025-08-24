<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Services - E-Gatepay</title>
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
            url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
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
                            <li class="breadcrumb-item active text-white" aria-current="page">Terms of Service</li>
                        </ol>
                    </nav>

                    <h1 class="hero-title text-white mb-4">
                            <span class="gradient-text"
                                  style="background: linear-gradient(45deg, #FF6B35, #F7931E); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Terms of Services</span>
                    </h1>
                    <p class="hero-subtitle text-white mb-5"
                       style="font-size: 1.3rem; font-weight: 400;  max-width: 600px; margin: 0 auto;">
                        Please read these terms carefully before using our services
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
                    <li><a href="#acceptance"><i class="fas fa-chevron-right"></i> Acceptance of Terms</a></li>
                    <li><a href="#changes"><i class="fas fa-chevron-right"></i> Changes to Terms & Services</a></li>
                    <li><a href="#account"><i class="fas fa-chevron-right"></i> Account Information & Security</a></li>
                    <li><a href="#ownership"><i class="fas fa-chevron-right"></i> Ownership & Intellectual Property</a></li>
                    <li><a href="#acceptable-use"><i class="fas fa-chevron-right"></i> Acceptable Use</a></li>
                    <li><a href="#third-party"><i class="fas fa-chevron-right"></i> Third-Party Information</a></li>
                    <li><a href="#disclaimers"><i class="fas fa-chevron-right"></i> Disclaimers</a></li>
                    <li><a href="#liability"><i class="fas fa-chevron-right"></i> Limitation of Liability</a></li>
                    <li><a href="#indemnification"><i class="fas fa-chevron-right"></i> Indemnification</a></li>
                    <li><a href="#changes-termination"><i class="fas fa-chevron-right"></i> Changes, Suspension & Termination</a></li>
                    <li><a href="#orders"><i class="fas fa-chevron-right"></i> Orders & Payments</a></li>
                    <li><a href="#eligibility"><i class="fas fa-chevron-right"></i> Eligibility & Responsibility</a></li>
                    <li><a href="#agreement"><i class="fas fa-chevron-right"></i> Entire Agreement</a></li>
                    <li><a href="#governing-law"><i class="fas fa-chevron-right"></i> Governing Law</a></li>
                    <li><a href="#contact"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
                </ul>
                <div class="last-updated">
                    <i class="fas fa-history me-2"></i>Last updated: August 18, 2025
                </div>
            </div>
        </div>

        <!-- Terms Content -->
        <div class="col-lg-8">
            <div class="terms-card">
                <h2 class="terms-title">Terms of Service</h2>

                <div id="introduction">
                    <h3 class="section-title">Introduction</h3>
                    <p>Welcome to E‑Gatepay (the "Company", "we", "us", or "our"). These Terms of Service (the "Terms") govern your access to and use of http://e-gatepay.net/ and any related sites, applications, products, and services we provide (collectively, the "Services").</p>

                    <div class="highlight">
                        <p><strong>Important:</strong> This document is a general template adapted from your supplied text and should be reviewed by qualified counsel before production use.</p>
                    </div>

                    <p>By accessing or using the Services, or by clicking "I agree to the Terms of Service," you agree to be bound by these Terms. If you do not agree, do not use the Services.</p>
                </div>

                <div id="acceptance">
                    <h3 class="section-title">1. Acceptance of the Terms</h3>
                    <p>By using the Services, you confirm that you:</p>
                    <ul>
                        <li>Have read and understood these Terms</li>
                        <li>Agree to comply with them</li>
                        <li>Have the legal capacity to enter into a binding agreement</li>
                    </ul>
                    <p>If you are using the Services on behalf of a company or other legal entity, you represent that you are authorized to bind that entity, in which case "you" and "your" shall refer to that entity.</p>
                </div>

                <div id="changes">
                    <h3 class="section-title">2. Changes to Terms & Services</h3>
                    <p>We may change or modify these Terms, the scope and availability of the Services, and any other aspect of the Site at any time, at our sole discretion. Changes take effect upon posting on the Site unless a later effective date is specified.</p>
                    <p>The version in effect at the time of your order, integration, or use will govern that transaction. If you do not agree to the updated Terms, you must stop using the Services.</p>
                </div>

                <div id="account">
                    <h3 class="section-title">3. Account Information, Security & Privacy</h3>
                    <p>You agree to provide accurate, current, and complete information when creating an account and to maintain and promptly update such information.</p>

                    <div class="highlight">
                        <p>We implement administrative, technical, and physical safeguards designed to protect information processed through the Services. However, no method of transmission over the Internet or electronic storage is 100% secure; we cannot guarantee absolute security.</p>
                    </div>

                    <p>We may retain and use personal information in accordance with our Privacy Policy. We may share information with Providers strictly as necessary to deliver the Services and complete transactions.</p>

                    <p><strong>Card on File:</strong> Where applicable:</p>
                    <ul>
                        <li>You agree that the merchant of record may store your card on file for quick deposit or subsequent transactions</li>
                        <li>You agree that a PCI DSS Level 1 service provider may store your card on file for the same purpose, in accordance with applicable law and card-network rules</li>
                    </ul>
                </div>

                <div id="ownership">
                    <h3 class="section-title">4. Ownership and Intellectual Property</h3>
                    <p>The Site, Services, software, interfaces, designs, trademarks, logos, and other content (collectively, "E‑Gatepay IP") are owned by E‑Gatepay and/or our licensors and are protected by intellectual‑property and other laws.</p>
                    <p>Except as expressly permitted, you may not:</p>
                    <ul>
                        <li>Copy, modify, distribute, sell, lease, reverse engineer, or create derivative works of any part of the E‑Gatepay IP</li>
                        <li>Remove any proprietary notices from materials</li>
                        <li>Use our trademarks without prior written permission</li>
                    </ul>
                    <p>You must not upload, post, or transmit unlawful, defamatory, obscene, infringing, or otherwise objectionable material, or any material that could give rise to civil or criminal liability.</p>
                </div>

                <div id="acceptable-use">
                    <h3 class="section-title">5. Acceptable Use</h3>
                    <p>You may use the Services only for legitimate, lawful purposes. You agree not to:</p>
                    <ul>
                        <li>Make speculative, false, or fraudulent orders or transactions</li>
                        <li>Interfere with or disrupt the integrity or performance of the Services</li>
                        <li>Attempt to gain unauthorized access to the Services or related systems or networks</li>
                        <li>Use the Services in violation of any applicable laws, regulations, or card‑network rules</li>
                    </ul>
                    <div class="highlight">
                        <p>Entering false information (including invalid or unauthorized card details) may constitute a criminal offense and may expose you to civil liability. We may report suspected illegal activity to law‑enforcement authorities.</p>
                    </div>
                </div>

                <div id="third-party">
                    <h3 class="section-title">6. Third‑Party Information & Links</h3>
                    <p>The Site may display information provided by third parties and may contain links to third‑party websites or services. We do not control and are not responsible for third‑party content, accuracy, or practices.</p>
                    <p>Accessing third‑party resources is at your own risk and may be subject to their terms and privacy policies.</p>
                </div>

                <div id="disclaimers">
                    <h3 class="section-title">7. Disclaimers</h3>
                    <p><strong>As‑Is Basis:</strong> The Site and Services are provided on an "as is" and "as available" basis without warranties of any kind, whether express, implied, or statutory, including warranties of merchantability, fitness for a particular purpose, title, and non‑infringement.</p>
                    <p>We do not warrant that:</p>
                    <ul>
                        <li>The Services will be uninterrupted, timely, secure, or error-free</li>
                        <li>The Site or any files available for download will be free of viruses or other harmful components</li>
                        <li>Any content or information made available through the Site will be accurate, complete, or reliable</li>
                    </ul>
                </div>

                <div id="liability">
                    <h3 class="section-title">8. Limitation of Liability</h3>
                    <p>To the maximum extent permitted by law, in no event will E‑Gatepay, its affiliates, Providers, directors, officers, employees, or agents be liable for any indirect, incidental, special, consequential, punitive, or exemplary damages (including loss of profits, revenues, savings, data, or goodwill), arising out of or related to your use of or inability to use the Services.</p>
                    <div class="highlight">
                        <p>To the extent permitted by law, our aggregate liability for all claims arising out of or related to the Services shall not exceed the total fees paid by you to us for the Services giving rise to the claim during the three (3) months preceding the event giving rise to liability.</p>
                    </div>
                </div>

                <div id="indemnification">
                    <h3 class="section-title">9. Indemnification</h3>
                    <p>You agree to defend, indemnify, and hold harmless E‑Gatepay, its affiliates, Providers, and their respective directors, officers, employees, and agents from and against any claims, liabilities, damages, losses, and expenses (including reasonable attorneys' fees) arising out of or in any way connected with:</p>
                    <ul>
                        <li>Your access to or use of the Services</li>
                        <li>Your breach of these Terms</li>
                        <li>Your violation of any law or the rights of any third party</li>
                        <li>Content you upload or submit through the Services</li>
                    </ul>
                </div>

                <div id="changes-termination">
                    <h3 class="section-title">10. Changes, Suspension, and Termination</h3>
                    <p>We may at any time modify, suspend, or discontinue any part of the Site or Services, including links or features, with or without notice.</p>
                    <p>We may also suspend or terminate your access to the Services if we believe you have violated these Terms or applicable law, or to protect the Services, users, or third parties.</p>
                </div>

                <div id="orders">
                    <h3 class="section-title">11. Orders, Payments, and Verifications</h3>
                    <p>Certain Services may require payment. You authorize us and our Providers to charge your selected payment method for fees and charges incurred.</p>
                    <p><strong>Cardholder Verification:</strong> Where the cardholder is not the service consumer, we or the service provider may require additional verification and documentation prior to providing the service. You may be required to present the card used for payment and valid identification before consumption of services.</p>
                    <p>All transactions are subject to compliance checks, fraud screening, card‑network rules, and applicable laws.</p>
                </div>

                <div id="eligibility">
                    <h3 class="section-title">12. Eligibility and Responsibility</h3>
                    <p>You represent that you are of legal age and have capacity under applicable law to use the Services and to create binding obligations.</p>
                    <p>You are responsible for all activities that occur under your account and for maintaining the confidentiality of your login credentials.</p>
                </div>

                <div id="agreement">
                    <h3 class="section-title">13. Entire Agreement; Severability; Assignment</h3>
                    <p>These Terms, together with any policies or terms referenced or incorporated herein (including our Privacy Policy), constitute the entire agreement between you and E‑Gatepay regarding the Services and supersede all prior or contemporaneous understandings.</p>
                    <p>If any provision is held invalid or unenforceable, it shall be enforced to the maximum extent permissible, and the remaining provisions shall remain in full force and effect.</p>
                    <p>You may not assign or transfer these Terms without our prior written consent. We may assign these Terms without restriction.</p>
                </div>

                <div id="governing-law">
                    <h3 class="section-title">14. Governing Law and Jurisdiction</h3>
                    <p>Unless otherwise required by mandatory law, these Terms and any dispute or claim arising out of or in connection with them or their subject matter shall be governed by and construed in accordance with the laws of Pakistan, without regard to its conflict‑of‑laws principles.</p>
                    <p>You agree that the courts located in Karachi, Pakistan shall have exclusive jurisdiction to settle any dispute or claim arising out of or in connection with these Terms or the Services.</p>
                    <div class="highlight">
                        <p>If your organization requires a different governing law or venue, please contact us to discuss a written amendment.</p>
                    </div>
                </div>

                <div id="contact">
                    <h3 class="section-title">15. Contact Us</h3>
                    <p>If you have questions about these Terms or the Services, please contact us at:</p>
                    <div class="d-flex align-items-center mt-3">
                        <div class="bg-light p-3 rounded-circle me-3">
                            <i class="fas fa-building text-primary fs-4"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">E‑Gatepay</h5>
                            <p class="mb-0 text-muted">Karachi, Pakistan</p>
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
