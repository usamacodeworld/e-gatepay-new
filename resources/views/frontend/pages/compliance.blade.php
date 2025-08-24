<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compliance - E-Gatepay</title>
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
            url('https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
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

        .compliance-card {
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

        .compliance-title {
            font-family: 'Sora', sans-serif;
            font-weight: 800;
            margin-bottom: 2rem;
            color: var(--dark);
            position: relative;
            padding-bottom: 1rem;
        }

        .compliance-title:after {
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

        .compliance-badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .badge-pci {
            background-color: rgba(40, 167, 69, 0.15);
            color: #28a745;
        }

        .badge-gdpr {
            background-color: rgba(0, 123, 255, 0.15);
            color: #007bff;
        }

        .badge-aml {
            background-color: rgba(220, 53, 69, 0.15);
            color: #dc3545;
        }

        .badge-kyc {
            background-color: rgba(255, 193, 7, 0.15);
            color: #ffc107;
        }

        .badge-soc {
            background-color: rgba(111, 66, 193, 0.15);
            color: #6f42c1;
        }

        .compliance-timeline {
            position: relative;
            padding-left: 30px;
            margin: 2rem 0;
        }

        .compliance-timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
            border-radius: 3px;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
            padding-left: 20px;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -30px;
            top: 5px;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: var(--primary);
            border: 3px solid white;
            box-shadow: 0 0 0 3px var(--primary);
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

        .compliance-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .compliance-item {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border-top: 3px solid var(--primary);
            transition: all 0.3s ease;
        }

        .compliance-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .compliance-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .cert-badge {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1rem;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .cert-icon {
            font-size: 2rem;
            color: var(--primary);
            margin-right: 1rem;
            min-width: 50px;
            text-align: center;
        }

        .framework-card {
            background: linear-gradient(to right, rgba(255, 107, 53, 0.05), rgba(247, 147, 30, 0.05));
            border-radius: var(--border-radius);
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-left: 3px solid var(--primary);
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

            .compliance-card {
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
                            <li class="breadcrumb-item active text-white" aria-current="page">Compliance</li>
                        </ol>
                    </nav>

                    <h1 class="hero-title">
                        <span class="gradient-text">Compliance & Security</span>
                    </h1>
                    <p class="hero-subtitle">
                        At E-Gatepay, we prioritize regulatory compliance and security to protect your financial transactions and personal information.
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
                <h3 class="toc-title">Compliance Framework</h3>
                <ul class="toc-list">
                    <li><a href="#commitment"><i class="fas fa-chevron-right"></i> Our Commitment</a></li>
                    <li><a href="#regulatory"><i class="fas fa-chevron-right"></i> Regulatory Compliance</a></li>
                    <li><a href="#security"><i class="fas fa-chevron-right"></i> Security Standards</a></li>
                    <li><a href="#data-protection"><i class="fas fa-chevron-right"></i> Data Protection</a></li>
                    <li><a href="#certifications"><i class="fas fa-chevron-right"></i> Certifications</a></li>
                    <li><a href="#monitoring"><i class="fas fa-chevron-right"></i> Continuous Monitoring</a></li>
                    <li><a href="#training"><i class="fas fa-chevron-right"></i> Employee Training</a></li>
                    <li><a href="#reporting"><i class="fas fa-chevron-right"></i> Reporting Concerns</a></li>
                    <li><a href="#contact"><i class="fas fa-chevron-right"></i> Contact Compliance</a></li>
                </ul>
                <div class="last-updated">
                    <i class="fas fa-history me-2"></i>Last updated: August 18, 2025
                </div>
            </div>
        </div>

        <!-- Compliance Content -->
        <div class="col-lg-8">
            <div class="compliance-card">
                <h2 class="compliance-title">Compliance Excellence</h2>

                <div id="commitment">
                    <h3 class="section-title">Our Compliance Commitment</h3>
                    <p>At E-Gatepay, we maintain the highest standards of regulatory compliance and security. Our commitment to compliance is integral to our mission of providing secure, reliable payment solutions to our customers worldwide.</p>

                    <div class="highlight">
                        <p><strong>Core Principles:</strong> We operate with transparency, accountability, and integrity in all aspects of our business. Our compliance framework is built on industry best practices and regulatory requirements to ensure the security of your financial transactions.</p>
                    </div>

                    <div class="compliance-grid">
                        <div class="compliance-item">
                            <div class="compliance-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4>Security First</h4>
                            <p>Protecting customer data and financial information is our top priority.</p>
                        </div>
                        <div class="compliance-item">
                            <div class="compliance-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <h4>Regulatory Adherence</h4>
                            <p>Compliance with all applicable financial regulations and standards.</p>
                        </div>
                        <div class="compliance-item">
                            <div class="compliance-icon">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <h4>Continuous Improvement</h4>
                            <p>Ongoing enhancement of our compliance programs and controls.</p>
                        </div>
                    </div>
                </div>

                <div id="regulatory">
                    <h3 class="section-title">Regulatory Compliance</h3>
                    <p>E-Gatepay adheres to a comprehensive set of financial regulations and industry standards:</p>

                    <div class="framework-card">
                        <div class="d-flex align-items-center mb-3">
                            <span class="compliance-badge badge-pci">PCI DSS</span>
                            <h4 class="mb-0">Payment Card Industry Data Security Standard</h4>
                        </div>
                        <p>We maintain full compliance with PCI DSS requirements to ensure the secure handling of credit card information. Our systems are regularly audited by qualified security assessors.</p>
                    </div>

                    <div class="framework-card">
                        <div class="d-flex align-items-center mb-3">
                            <span class="compliance-badge badge-gdpr">GDPR</span>
                            <h4 class="mb-0">General Data Protection Regulation</h4>
                        </div>
                        <p>We comply with GDPR requirements for data protection and privacy for all individuals within the European Union. Our data processing activities follow the principles of lawfulness, fairness, and transparency.</p>
                    </div>

                    <div class="framework-card">
                        <div class="d-flex align-items-center mb-3">
                            <span class="compliance-badge badge-aml">AML</span>
                            <span class="compliance-badge badge-kyc">KYC</span>
                            <h4 class="mb-0">Anti-Money Laundering & Know Your Customer</h4>
                        </div>
                        <p>Our robust AML and KYC programs help prevent financial crimes through identity verification, transaction monitoring, and suspicious activity reporting.</p>
                    </div>

                    <div class="framework-card">
                        <div class="d-flex align-items-center mb-3">
                            <span class="compliance-badge badge-soc">SOC 2</span>
                            <h4 class="mb-0">Service Organization Control</h4>
                        </div>
                        <p>We undergo regular SOC 2 Type II audits to validate our security, availability, processing integrity, confidentiality, and privacy controls.</p>
                    </div>
                </div>

                <div id="security">
                    <h3 class="section-title">Security Standards</h3>
                    <p>We implement enterprise-grade security measures to protect our systems and your data:</p>

                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-lock fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Encryption</h5>
                                    <p class="mb-0">End-to-end encryption of data in transit and at rest using AES-256</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-user-shield fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Access Control</h5>
                                    <p class="mb-0">Role-based access controls and multi-factor authentication</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-network-wired fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Network Security</h5>
                                    <p class="mb-0">Firewalls, intrusion detection systems, and DDoS protection</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-code fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Secure Development</h5>
                                    <p class="mb-0">Regular security audits and penetration testing</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="highlight mt-4">
                        <p><strong>Security Operations Center:</strong> Our 24/7 SOC monitors systems for threats and vulnerabilities, ensuring rapid response to security incidents.</p>
                    </div>
                </div>

                <div id="data-protection">
                    <h3 class="section-title">Data Protection</h3>
                    <p>We implement comprehensive data protection measures in compliance with global regulations:</p>

                    <div class="compliance-timeline">
                        <div class="timeline-item">
                            <h5>Data Minimization</h5>
                            <p>We collect only the data necessary to provide our services and fulfill legal obligations.</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Data Retention</h5>
                            <p>We retain personal data only for as long as necessary for the purposes collected.</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Data Subject Rights</h5>
                            <p>We facilitate data subject rights including access, rectification, erasure, and portability.</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Data Processing Agreements</h5>
                            <p>We maintain DPAs with all third-party processors to ensure data protection compliance.</p>
                        </div>
                    </div>
                </div>

                <div id="certifications">
                    <h3 class="section-title">Certifications & Audits</h3>
                    <p>Our compliance is validated through independent audits and certifications:</p>

                    <div class="cert-badge">
                        <div class="cert-icon">
                            <i class="fas fa-shield-check"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">PCI DSS Level 1</h5>
                            <p class="mb-0">Certified compliant with the highest level of PCI standards</p>
                        </div>
                    </div>

                    <div class="cert-badge">
                        <div class="cert-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">SOC 2 Type II</h5>
                            <p class="mb-0">Annual audit of security controls and processes</p>
                        </div>
                    </div>

                    <div class="cert-badge">
                        <div class="cert-icon">
                            <i class="fas fa-globe-europe"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">GDPR Compliance</h5>
                            <p class="mb-0">Certified under EU-US Privacy Shield Framework</p>
                        </div>
                    </div>

                    <div class="cert-badge">
                        <div class="cert-icon">
                            <i class="fas fa-balance-scale-left"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">ISO 27001</h5>
                            <p class="mb-0">Information security management system certification</p>
                        </div>
                    </div>
                </div>

                <div id="monitoring">
                    <h3 class="section-title">Continuous Monitoring</h3>
                    <p>Our compliance program includes ongoing monitoring and improvement:</p>

                    <div class="row mt-4">
                        <div class="col-md-4 text-center mb-4">
                            <div class="bg-primary text-white p-3 rounded-circle d-inline-block">
                                <i class="fas fa-search fa-2x"></i>
                            </div>
                            <h5 class="mt-3">Risk Assessments</h5>
                            <p>Quarterly risk assessments to identify compliance gaps</p>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="bg-primary text-white p-3 rounded-circle d-inline-block">
                                <i class="fas fa-chart-line fa-2x"></i>
                            </div>
                            <h5 class="mt-3">Transaction Monitoring</h5>
                            <p>Real-time monitoring of payment activities</p>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="bg-primary text-white p-3 rounded-circle d-inline-block">
                                <i class="fas fa-sync-alt fa-2x"></i>
                            </div>
                            <h5 class="mt-3">Control Testing</h5>
                            <p>Regular testing of security and compliance controls</p>
                        </div>
                    </div>
                </div>

                <div id="training">
                    <h3 class="section-title">Employee Training</h3>
                    <p>We invest in comprehensive compliance training for all employees:</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-graduation-cap fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Annual Compliance Training</h6>
                                    <p class="mb-0">Mandatory training for all employees on regulatory requirements</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-shield-alt fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Security Awareness</h6>
                                    <p class="mb-0">Regular security best practices and phishing awareness training</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-money-check-alt fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">AML Certification</h6>
                                    <p class="mb-0">Specialized training for employees in financial operations</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-user-secret fa-lg"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Data Privacy</h6>
                                    <p class="mb-0">GDPR and data protection training for relevant staff</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="reporting">
                    <h3 class="section-title">Reporting Compliance Concerns</h3>
                    <p>We encourage stakeholders to report any compliance concerns or suspected violations:</p>

                    <div class="alert alert-primary mt-4">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="fas fa-exclamation-circle fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Compliance Hotline</h5>
                                <p class="mb-0">Reports can be made anonymously through our 24/7 compliance hotline: +1 (800) 555-COMPLY</p>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-secondary">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Email Reporting</h5>
                                <p class="mb-0">Send concerns to: compliance@e-gatepay.net</p>
                            </div>
                        </div>
                    </div>

                    <div class="highlight">
                        <p><strong>Non-Retaliation Policy:</strong> E-Gatepay prohibits retaliation against any individual who reports compliance concerns in good faith.</p>
                    </div>
                </div>

                <div id="contact">
                    <h3 class="section-title">Contact Our Compliance Team</h3>
                    <p>For compliance-related inquiries, please contact us:</p>

                    <div class="bg-light p-4 rounded mt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white text-primary p-3 rounded-circle me-3">
                                        <i class="fas fa-envelope fa-lg"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Email</h5>
                                        <p class="mb-0">compliance@e-gatepay.net</p>
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
