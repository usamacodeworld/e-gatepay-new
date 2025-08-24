<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licenses - E-Gatepay</title>
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

        .licenses-card {
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

        .licenses-title {
            font-family: 'Sora', sans-serif;
            font-weight: 800;
            margin-bottom: 2rem;
            color: var(--dark);
            position: relative;
            padding-bottom: 1rem;
        }

        .licenses-title:after {
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

        .license-badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .badge-global {
            background-color: rgba(40, 167, 69, 0.15);
            color: #28a745;
        }

        .badge-us {
            background-color: rgba(0, 123, 255, 0.15);
            color: #007bff;
        }

        .badge-eu {
            background-color: rgba(111, 66, 193, 0.15);
            color: #6f42c1;
        }

        .badge-asia {
            background-color: rgba(220, 53, 69, 0.15);
            color: #dc3545;
        }

        .badge-cert {
            background-color: rgba(255, 193, 7, 0.15);
            color: #ffc107;
        }

        .licenses-timeline {
            position: relative;
            padding-left: 30px;
            margin: 2rem 0;
        }

        .licenses-timeline::before {
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

        .licenses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .license-item {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border-top: 3px solid var(--primary);
            transition: all 0.3s ease;
        }

        .license-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .license-icon {
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

        .regulation-card {
            background: linear-gradient(to right, rgba(255, 107, 53, 0.05), rgba(247, 147, 30, 0.05));
            border-radius: var(--border-radius);
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-left: 3px solid var(--primary);
        }

        .map-container {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            margin: 2rem 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
        }

        .world-map {
            max-width: 100%;
            height: auto;
            margin: 1rem 0;
        }

        .map-legend {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 1rem;
        }

        .legend-item {
            display: flex;
            align-items: center;
            margin: 0.5rem 1rem;
        }

        .legend-color {
            width: 20px;
            height: 20px;
            border-radius: 4px;
            margin-right: 0.5rem;
        }

        footer {
            background: var(--dark);
            color: white;
            padding: 3rem 0;
            margin-top: 3rem;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .status-active {
            background-color: rgba(40, 167, 69, 0.15);
            color: #28a745;
        }

        .status-pending {
            background-color: rgba(255, 193, 7, 0.15);
            color: #ffc107;
        }

        .status-renewal {
            background-color: rgba(0, 123, 255, 0.15);
            color: #007bff;
        }

        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.8rem;
            }

            .licenses-card {
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
                            <li class="breadcrumb-item active text-white" aria-current="page">Licenses</li>
                        </ol>
                    </nav>

                    <h1 class="hero-title">
                        <span class="gradient-text">Regulatory Licenses</span>
                    </h1>
                    <p class="hero-subtitle">
                        E-Gatepay operates under full regulatory compliance with licenses and approvals in multiple jurisdictions worldwide.
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
                <h3 class="toc-title">Licenses Overview</h3>
                <ul class="toc-list">
                    <li><a href="#introduction"><i class="fas fa-chevron-right"></i> Introduction</a></li>
                    <li><a href="#global"><i class="fas fa-chevron-right"></i> Global Licenses</a></li>
                    <li><a href="#us"><i class="fas fa-chevron-right"></i> US Licenses</a></li>
                    <li><a href="#europe"><i class="fas fa-chevron-right"></i> European Licenses</a></li>
                    <li><a href="#asia"><i class="fas fa-chevron-right"></i> Asia-Pacific Licenses</a></li>
                    <li><a href="#certifications"><i class="fas fa-chevron-right"></i> Industry Certifications</a></li>
                    <li><a href="#verification"><i class="fas fa-chevron-right"></i> License Verification</a></li>
                    <li><a href="#contact"><i class="fas fa-chevron-right"></i> Contact</a></li>
                </ul>
                <div class="last-updated">
                    <i class="fas fa-history me-2"></i>Last updated: August 18, 2025
                </div>
            </div>
        </div>

        <!-- Licenses Content -->
        <div class="col-lg-8">
            <div class="licenses-card">
                <h2 class="licenses-title">Regulatory Licenses</h2>

                <div id="introduction">
                    <h3 class="section-title">Our Regulatory Framework</h3>
                    <p>E-Gatepay maintains full compliance with financial regulations across all jurisdictions where we operate. We are licensed and regulated by financial authorities worldwide, ensuring the highest standards of security and consumer protection.</p>

                    <div class="highlight">
                        <p><strong>Transparency Commitment:</strong> We believe in complete transparency regarding our regulatory status. All licenses are current and publicly verifiable with the respective regulatory bodies.</p>
                    </div>

                    <div class="map-container">
                        <h4>Global Regulatory Coverage</h4>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/World_map_blank_without_borders.svg/1920px-World_map_blank_without_borders.svg.png" alt="World Map" class="world-map">
                        <div class="map-legend">
                            <div class="legend-item">
                                <div class="legend-color" style="background-color: #28a745;"></div>
                                <span>Full Licensing</span>
                            </div>
                            <div class="legend-item">
                                <div class="legend-color" style="background-color: #ffc107;"></div>
                                <span>Approval Pending</span>
                            </div>
                            <div class="legend-item">
                                <div class="legend-color" style="background-color: #007bff;"></div>
                                <span>Operational Under EU Passport</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="global">
                    <h3 class="section-title">Global Payment Licenses</h3>
                    <p>As a global payment provider, E-Gatepay holds international licenses that enable cross-border transactions:</p>

                    <div class="regulation-card">
                        <div class="d-flex align-items-center mb-3">
                            <span class="license-badge badge-global">Global</span>
                            <h4 class="mb-0">Financial Action Task Force (FATF) Compliance</h4>
                        </div>
                        <p>We adhere to FATF recommendations for anti-money laundering and counter-terrorist financing across all jurisdictions.</p>
                        <div class="d-flex align-items-center mt-3">
                                <span class="status-badge status-active">
                                    <i class="fas fa-check-circle me-1"></i> Active
                                </span>
                            <span class="ms-3">License Number: FATF-EGP-2023-001</span>
                        </div>
                    </div>

                    <div class="regulation-card">
                        <div class="d-flex align-items-center mb-3">
                            <span class="license-badge badge-global">Global</span>
                            <h4 class="mb-0">SWIFT Membership</h4>
                        </div>
                        <p>As a SWIFT member, we facilitate secure international payments through the global financial messaging network.</p>
                        <div class="d-flex align-items-center mt-3">
                                <span class="status-badge status-active">
                                    <i class="fas fa-check-circle me-1"></i> Active
                                </span>
                            <span class="ms-3">Member Code: EGPTUS33XXX</span>
                        </div>
                    </div>
                </div>

                <div id="us">
                    <h3 class="section-title">United States Licenses</h3>
                    <p>E-Gatepay is licensed as a Money Transmitter in all 50 states, the District of Columbia, and US territories:</p>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                            <tr>
                                <th>State</th>
                                <th>License Number</th>
                                <th>Status</th>
                                <th>Expiration</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>New York</td>
                                <td>NYDFS-1503045</td>
                                <td><span class="status-badge status-active">Active</span></td>
                                <td>Dec 31, 2026</td>
                            </tr>
                            <tr>
                                <td>California</td>
                                <td>CTML-2023-EGP001</td>
                                <td><span class="status-badge status-active">Active</span></td>
                                <td>Nov 15, 2025</td>
                            </tr>
                            <tr>
                                <td>Texas</td>
                                <td>MT-10004567</td>
                                <td><span class="status-badge status-active">Active</span></td>
                                <td>Feb 28, 2027</td>
                            </tr>
                            <tr>
                                <td>Florida</td>
                                <td>FT-55003344</td>
                                <td><span class="status-badge status-renewal">Renewal Pending</span></td>
                                <td>Sep 30, 2025</td>
                            </tr>
                            <tr>
                                <td>Illinois</td>
                                <td>IL-MTL-2022-0045</td>
                                <td><span class="status-badge status-active">Active</span></td>
                                <td>Mar 15, 2026</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="alert alert-info mt-4">
                        <i class="fas fa-info-circle me-2"></i>
                        Full state licensing information is available through the Nationwide Multistate Licensing System (NMLS) under ID: 1234567.
                    </div>
                </div>

                <div id="europe">
                    <h3 class="section-title">European Licenses</h3>
                    <p>E-Gatepay operates under the following regulatory frameworks in Europe:</p>

                    <div class="regulation-card">
                        <div class="d-flex align-items-center mb-3">
                            <span class="license-badge badge-eu">EU</span>
                            <h4 class="mb-0">Authorized Payment Institution</h4>
                        </div>
                        <p>Licensed by the Financial Conduct Authority (UK) and authorized by the Central Bank of Ireland to provide payment services throughout the European Economic Area.</p>
                        <div class="d-flex align-items-center mt-3">
                                <span class="status-badge status-active">
                                    <i class="fas fa-check-circle me-1"></i> Active
                                </span>
                            <span class="ms-3">FCA Registration Number: 123456</span>
                        </div>
                    </div>

                    <div class="regulation-card">
                        <div class="d-flex align-items-center mb-3">
                            <span class="license-badge badge-eu">EU</span>
                            <h4 class="mb-0">Electronic Money Institution License</h4>
                        </div>
                        <p>Authorized by the Central Bank of Lithuania to issue electronic money and provide payment services (License No. 1122334455).</p>
                        <div class="d-flex align-items-center mt-3">
                                <span class="status-badge status-active">
                                    <i class="fas fa-check-circle me-1"></i> Active
                                </span>
                            <span class="ms-3">Valid in 31 EEA countries</span>
                        </div>
                    </div>
                </div>

                <div id="asia">
                    <h3 class="section-title">Asia-Pacific Licenses</h3>
                    <p>Our Asia-Pacific operations are licensed by the following regulatory authorities:</p>

                    <div class="licenses-grid">
                        <div class="license-item">
                            <div class="license-icon">
                                <i class="fas fa-yen-sign"></i>
                            </div>
                            <h4>Japan</h4>
                            <p>Registered as a Funds Transfer Service Provider with the Financial Services Agency (License No. 12345)</p>
                            <div class="mt-3">
                                <span class="status-badge status-active">Active</span>
                            </div>
                        </div>

                        <div class="license-item">
                            <div class="license-icon">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <h4>Singapore</h4>
                            <p>Licensed under the Payment Services Act by the Monetary Authority of Singapore (License No. PS20200123EGP)</p>
                            <div class="mt-3">
                                <span class="status-badge status-active">Active</span>
                            </div>
                        </div>

                        <div class="license-item">
                            <div class="license-icon">
                                <i class="fas fa-won-sign"></i>
                            </div>
                            <h4>South Korea</h4>
                            <p>Registered as a Remittance Business with the Financial Services Commission (Registration No. 2023-001)</p>
                            <div class="mt-3">
                                <span class="status-badge status-active">Active</span>
                            </div>
                        </div>

                        <div class="license-item">
                            <div class="license-icon">
                                <i class="fas fa-rupee-sign"></i>
                            </div>
                            <h4>India</h4>
                            <p>Authorized by the Reserve Bank of India as a Payment Aggregator (License No. PA-2023-EGP-456)</p>
                            <div class="mt-3">
                                <span class="status-badge status-pending">Renewal in Progress</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="certifications">
                    <h3 class="section-title">Industry Certifications</h3>
                    <p>In addition to regulatory licenses, E-Gatepay maintains the following industry certifications:</p>

                    <div class="cert-badge">
                        <div class="cert-icon">
                            <i class="fas fa-shield-check"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">PCI DSS Level 1</h5>
                            <p class="mb-0">Certified compliant with the highest level of payment security standards</p>
                            <div class="mt-2">
                                <span class="status-badge status-active">Valid until Dec 2025</span>
                            </div>
                        </div>
                    </div>

                    <div class="cert-badge">
                        <div class="cert-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">ISO 27001:2022</h5>
                            <p class="mb-0">Information Security Management System certification</p>
                            <div class="mt-2">
                                <span class="status-badge status-active">Valid until Aug 2026</span>
                            </div>
                        </div>
                    </div>

                    <div class="cert-badge">
                        <div class="cert-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">SOC 2 Type II</h5>
                            <p class="mb-0">Audited security controls for service organizations</p>
                            <div class="mt-2">
                                <span class="status-badge status-active">Current</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="verification">
                    <h3 class="section-title">License Verification</h3>
                    <p>All E-Gatepay licenses can be verified directly with the issuing regulatory authorities:</p>

                    <div class="highlight">
                        <h5>Verification Instructions:</h5>
                        <ol>
                            <li>Visit the regulator's official verification portal</li>
                            <li>Enter the license number provided on this page</li>
                            <li>Search for "E-Gatepay" or "E-Gatepay Ltd"</li>
                            <li>Verify the license status and expiration date</li>
                        </ol>
                    </div>

                    <div class="alert alert-warning">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        Always verify licenses through official government websites to ensure authenticity.
                    </div>
                </div>

                <div id="contact">
                    <h3 class="section-title">Regulatory Contact</h3>
                    <p>For regulatory inquiries or verification requests, please contact our compliance team:</p>

                    <div class="bg-light p-4 rounded mt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white text-primary p-3 rounded-circle me-3">
                                        <i class="fas fa-envelope fa-lg"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Email</h5>
                                        <p class="mb-0">licenses@e-gatepay.net</p>
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
