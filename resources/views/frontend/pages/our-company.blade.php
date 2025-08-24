<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Company - E-Gatepay | Leading Payment Solutions Provider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('new_frontend/asset/css/style.css')}}">

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        @keyframes scroll {
            0% { opacity: 1; transform: translateX(-50%) translateY(0); }
            100% { opacity: 0; transform: translateX(-50%) translateY(10px); }
        }

        .stats-card {
            transition: all 0.3s ease;
        }

        .stats-card:hover {
            transform: translateY(-5px);
            background: rgba(255,255,255,0.15) !important;
        }
    </style>
</head>

<body class="company-page">
    <!-- Navigation -->
    @include('frontend.layouts.partials._header_sticky')


    <!-- Enhanced Company Banner with professional background image -->
    <section class="hero-section" style="
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)),
                    url('https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=1926&q=80') center/cover no-repeat;
        min-height: 70vh;
        position: relative;
        overflow: hidden;
    ">
        <!-- Floating elements for visual enhancement -->
        <div class="floating-elements">
            <div class="floating-card" style="position: absolute; top: 20%; left: 10%; width: 60px; height: 60px; background: rgba(255,255,255,0.1); border-radius: 12px; animation: float 6s ease-in-out infinite;"></div>
            <div class="floating-card" style="position: absolute; top: 60%; right: 15%; width: 80px; height: 80px; background: rgba(255,107,53,0.2); border-radius: 16px; animation: float 8s ease-in-out infinite reverse;"></div>
            <div class="floating-card" style="position: absolute; bottom: 30%; left: 20%; width: 40px; height: 40px; background: rgba(255,255,255,0.15); border-radius: 8px; animation: float 7s ease-in-out infinite;"></div>
        </div>

        <div class="container position-relative">
            <div class="row align-items-center justify-content-center text-center" style="min-height: 70vh;">
                <div class="col-lg-10">
                    <div class="hero-content">
                        <!-- Enhanced breadcrumb -->
                        <nav aria-label="breadcrumb" class="mb-4">
                            <ol class="breadcrumb justify-content-center bg-transparent p-0">
                                <li class="breadcrumb-item"><a href="index.html" class="text-white-50 text-decoration-none">Home</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Our Company</li>
                            </ol>
                        </nav>

                        <h1 class="hero-title text-white mb-4" style="font-size: 3.5rem; font-weight: 700; ">
                            About <span class="gradient-text" style="background: linear-gradient(45deg, #FF6B35, #F7931E); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">E-Gatepay</span>
                        </h1>
                        <p class="hero-subtitle text-white mb-5" style="font-size: 1.3rem; font-weight: 400;  max-width: 600px; margin: 0 auto;">
                            Pioneering the future of digital payments since 2018, connecting businesses worldwide with innovative financial solutions
                        </p>

                        <!-- Enhanced stats with better styling -->
                        <div class="row justify-content-center g-4">
                            <div class="col-lg-3 col-md-6">
                                <div class="stats-card p-4" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 16px; border: 1px solid rgba(255,255,255,0.2);">
                                    <h3 class="text-white mb-2" style="font-size: 2.5rem; font-weight: 700;">50K+</h3>
                                    <p class="text-white-50 mb-0" style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Businesses</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="stats-card p-4" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 16px; border: 1px solid rgba(255,255,255,0.2);">
                                    <h3 class="text-white mb-2" style="font-size: 2.5rem; font-weight: 700;">50+</h3>
                                    <p class="text-white-50 mb-0" style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Countries</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="stats-card p-4" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 16px; border: 1px solid rgba(255,255,255,0.2);">
                                    <h3 class="text-white mb-2" style="font-size: 2.5rem; font-weight: 700;">$50B+</h3>
                                    <p class="text-white-50 mb-0" style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Processed</p>
                                </div>
                            </div>
                        </div>

                        <!-- Call to action button -->
                        <div class="mt-5">
                            <a href="#story" class="btn btn-outline-light btn-lg px-5 py-3" style="border-radius: 50px; font-weight: 600; border: 2px solid rgba(255,255,255,0.3); backdrop-filter: blur(10px);">
                                Learn Our Story <i class="fas fa-arrow-down ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="scroll-indicator" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); color: white; opacity: 0.7;">
            <div class="scroll-mouse" style="width: 24px; height: 40px; border: 2px solid white; border-radius: 12px; position: relative;">
                <div style="width: 4px; height: 8px; background: white; border-radius: 2px; position: absolute; top: 8px; left: 50%; transform: translateX(-50%); animation: scroll 2s infinite;"></div>
            </div>
        </div>
    </section>

    <!-- Simple About Section -->
    <section class="py-5" id="story">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <!-- Updated to professional team meeting image -->
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80"
                        alt="E-Gatepay Team" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title mb-4">
                        Our <span class="text-primary">Story</span>
                    </h2>
                    <p class="text-muted mb-4">
                        Founded in 2018 with a vision to revolutionize digital payments, E-Gatepay has grown from a small fintech startup to a global payment solutions provider trusted by over 50,000 businesses worldwide.
                    </p>
                    <p class="text-muted mb-4">
                        Our journey has been marked by continuous innovation, strategic partnerships, and an unwavering commitment to our clients' success. We've processed over $50 billion in transactions across 50+ countries.
                    </p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>Global Leader</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>Secure Platform</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple Mission & Vision -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="h-100 p-4 bg-white rounded shadow-sm">
                        <div class="text-primary mb-3">
                            <i class="fas fa-bullseye fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Our Mission</h4>
                        <p class="text-muted">
                            To empower businesses of all sizes with innovative payment solutions that drive growth, enhance customer experiences, and create lasting value in the digital economy.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="h-100 p-4 bg-white rounded shadow-sm">
                        <div class="text-primary mb-3">
                            <i class="fas fa-eye fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Our Vision</h4>
                        <p class="text-muted">
                            To be the world's most trusted payment platform, connecting businesses and consumers through secure, intelligent, and frictionless financial experiences.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple Values Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">
                    Our Core <span class="text-primary">Values</span>
                </h2>
                <p class="text-muted">The principles that guide everything we do</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="text-primary mb-3">
                            <i class="fas fa-shield-alt fa-3x"></i>
                        </div>
                        <h5 class="mb-3">Trust & Security</h5>
                        <p class="text-muted">
                            We prioritize the highest levels of security and transparency in every transaction.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="text-primary mb-3">
                            <i class="fas fa-rocket fa-3x"></i>
                        </div>
                        <h5 class="mb-3">Innovation</h5>
                        <p class="text-muted">
                            We continuously push the boundaries of what's possible in payments technology.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="text-primary mb-3">
                            <i class="fas fa-users fa-3x"></i>
                        </div>
                        <h5 class="mb-3">Customer Success</h5>
                        <p class="text-muted">
                            Our clients' success is our success. We're committed to exceptional support.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple Leadership Team -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">
                    Leadership <span class="text-primary">Team</span>
                </h2>
                <p class="text-muted">Experienced leaders driving innovation</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4 bg-white rounded shadow-sm">
                        <div class="text-primary mb-3">
                            <i class="fas fa-user-tie fa-3x"></i>
                        </div>
                        <h5 class="mb-2">Sarah Johnson</h5>
                        <p class="text-primary mb-2">Chief Executive Officer</p>
                        <p class="text-muted small">
                            Former VP at PayPal with 15+ years in fintech. Stanford MBA and global payments expert.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4 bg-white rounded shadow-sm">
                        <div class="text-primary mb-3">
                            <i class="fas fa-code fa-3x"></i>
                        </div>
                        <h5 class="mb-2">Michael Chen</h5>
                        <p class="text-primary mb-2">Chief Technology Officer</p>
                        <p class="text-muted small">
                            Former Principal Engineer at Stripe. MIT graduate specializing in scalable payment infrastructure.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4 bg-white rounded shadow-sm">
                        <div class="text-primary mb-3">
                            <i class="fas fa-chart-line fa-3x"></i>
                        </div>
                        <h5 class="mb-2">David Rodriguez</h5>
                        <p class="text-primary mb-2">Chief Financial Officer</p>
                        <p class="text-muted small">
                            Former CFO at Square. CPA certified with expertise in financial strategy and risk management.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple Stats Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">
                    Our Impact <span class="text-primary">By Numbers</span>
                </h2>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="p-4">
                        <h2 class="text-primary mb-2">$50B+</h2>
                        <p class="text-muted">Total Processed</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-4">
                        <h2 class="text-primary mb-2">50K+</h2>
                        <p class="text-muted">Active Merchants</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-4">
                        <h2 class="text-primary mb-2">500+</h2>
                        <p class="text-muted">Team Members</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="p-4">
                        <h2 class="text-primary mb-2">50+</h2>
                        <p class="text-muted">Countries</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Added Global Payment Provider Section -->
    <section class="py-5 bg-light" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); position: relative; overflow: hidden;">
        <!-- Background texture -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400&q=80'); opacity: 0.05;"></div>

        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="position-relative">
                        <!-- Updated to global network connectivity image -->
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=500&q=80"
                             alt="Global Payment Network" class="img-fluid rounded shadow-lg">
                        <!-- Floating elements -->
                        <div class="position-absolute" style="top: 20%; right: -10%; width: 80px; height: 80px; background: linear-gradient(45deg, #FF6B35, #F7931E); border-radius: 50%; opacity: 0.8; animation: float 6s ease-in-out infinite;"></div>
                        <div class="position-absolute" style="bottom: 10%; left: -5%; width: 60px; height: 60px; background: rgba(255,107,53,0.3); border-radius: 12px; animation: float 8s ease-in-out infinite reverse;"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-4">
                        <h2 class="section-title mb-4">
                            Global Payment <span class="text-primary">Provider</span>
                        </h2>
                        <p class="text-muted mb-4 lead">
                            E-Gatepay operates as a comprehensive global payment provider, connecting businesses across continents with secure, fast, and reliable payment processing solutions.
                        </p>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <i class="fas fa-globe text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Worldwide Coverage</h6>
                                        <p class="text-muted small mb-0">Processing payments in 50+ countries with local expertise</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <i class="fas fa-clock text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-2">24/7 Operations</h6>
                                        <p class="text-muted small mb-0">Round-the-clock payment processing and support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <button class="btn btn-primary px-4">Learn More</button>
                            <button class="btn btn-outline-primary px-4">View Coverage</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Added Why E-Gate Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative; overflow: hidden;">
        <!-- Background graphics -->
        <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: rgba(255,255,255,0.1); border-radius: 50%; animation: float 10s ease-in-out infinite;"></div>
        <div style="position: absolute; bottom: -30px; left: -30px; width: 150px; height: 150px; background: rgba(255,107,53,0.2); border-radius: 30px; animation: float 8s ease-in-out infinite reverse;"></div>

        <div class="container position-relative">
            <div class="text-center mb-5">
                <h2 class="text-white mb-4" style="font-size: 2.5rem; font-weight: 700;">
                    Why Choose <span style="color: #FF6B35;">E-Gate</span>?
                </h2>
                <p class="text-white-50 lead">Discover what makes us the preferred payment partner for businesses worldwide</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4 h-100" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255,255,255,0.2);">
                        <div class="mb-4">
                            <!-- Updated image dimensions to 400x400 and made width 100% for full card coverage -->
                            <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400&q=80" alt="Security" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover;">
                        </div>
                        <h5 class="text-white mb-3">Bank-Level Security</h5>
                        <p class="text-white-50">Advanced encryption and fraud protection keep your transactions secure 24/7</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4 h-100" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255,255,255,0.2);">
                        <div class="mb-4">
                            <!-- Updated image dimensions to 400x400 and made width 100% for full card coverage -->
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400&q=80" alt="Speed" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover;">
                        </div>
                        <h5 class="text-white mb-3">Lightning Fast</h5>
                        <p class="text-white-50">Process payments in milliseconds with our optimized global infrastructure</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4 h-100" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255,255,255,0.2);">
                        <div class="mb-4">
                            <!-- Updated image dimensions to 400x400 and made width 100% for full card coverage -->
                            <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400&q=80" alt="Integration" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover;">
                        </div>
                        <h5 class="text-white mb-3">Easy Integration</h5>
                        <p class="text-white-50">Simple APIs and comprehensive documentation get you started in minutes</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4 h-100" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255,255,255,0.2);">
                        <div class="mb-4">
                            <!-- Updated image dimensions to 400x400 and made width 100% for full card coverage -->
                            <img src="https://images.unsplash.com/photo-1553484771-371a605b060b?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400&q=80" alt="Support" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover;">
                        </div>
                        <h5 class="text-white mb-3">24/7 Support</h5>
                        <p class="text-white-50">Expert support team available around the clock to help you succeed</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4 h-100" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255,255,255,0.2);">
                        <div class="mb-4">
                            <!-- Updated image dimensions to 400x400 and made width 100% for full card coverage -->
                            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400&q=80" alt="Pricing" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover;">
                        </div>
                        <h5 class="text-white mb-3">Competitive Rates</h5>
                        <p class="text-white-50">Transparent pricing with no hidden fees and volume-based discounts</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4 h-100" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255,255,255,0.2);">
                        <div class="mb-4">
                            <!-- Updated image dimensions to 400x400 and made width 100% for full card coverage -->
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=400&q=80" alt="Scalability" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover;">
                        </div>
                        <h5 class="text-white mb-3">Scalable Solutions</h5>
                        <p class="text-white-50">Grow from startup to enterprise with solutions that scale with your business</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Added Relationships Section -->
    <section class="py-5 bg-light" style="position: relative; overflow: hidden;">
        <!-- Background texture -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&h=200&q=80'); opacity: 0.03;"></div>

        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                    <div class="position-relative">
                        <!-- Updated to business handshake/partnership image -->
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=500&q=80"
                             alt="Business Relationships" class="img-fluid rounded shadow-lg">
                        <!-- Decorative elements -->
                        <div class="position-absolute" style="top: -20px; left: -20px; width: 100px; height: 100px; background: linear-gradient(45deg, #FF6B35, #F7931E); border-radius: 50%; opacity: 0.1;"></div>
                        <div class="position-absolute" style="bottom: -15px; right: -15px; width: 80px; height: 80px; background: rgba(102,126,234,0.2); border-radius: 20px;"></div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="pe-lg-4">
                        <h2 class="section-title mb-4" style="font-size: 2.5rem;">
                            Relationships Make<br>
                            <span class="text-primary">The World Go Round!</span>
                        </h2>
                        <p class="text-muted mb-4 lead">
                            At E-Gatepay, we believe that strong relationships are the foundation of successful business. We're not just a payment processor – we're your trusted partner in growth.
                        </p>

                        <div class="row g-4 mb-4">
                            <div class="col-12">
                                <div class="d-flex align-items-start p-3 rounded" style="background: rgba(255,107,53,0.1);">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="fas fa-handshake text-primary fa-2x"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Partnership Approach</h6>
                                        <p class="text-muted mb-0">We work closely with each client to understand their unique needs and challenges</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start p-3 rounded" style="background: rgba(102,126,234,0.1);">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="fas fa-users text-primary fa-2x"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Dedicated Support</h6>
                                        <p class="text-muted mb-0">Every client gets a dedicated account manager and technical support team</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start p-3 rounded" style="background: rgba(255,107,53,0.1);">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="fas fa-chart-line text-primary fa-2x"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Growth Together</h6>
                                        <p class="text-muted mb-0">Your success is our success – we grow together through mutual trust and collaboration</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <button class="btn btn-primary px-4">Start Partnership</button>
                            <button class="btn btn-outline-primary px-4">Meet Our Team</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Added Licenses and Regulations Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title mb-4">
                    E-Gate Group <span class="text-primary">Licenses & Regulations</span>
                </h2>
                <p class="text-muted lead">Fully compliant and regulated across all jurisdictions where we operate</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-lg-3 col-md-6">
                    <div class="text-center p-4 h-100 bg-white rounded shadow-sm border">
                        <div class="mb-3">
                            <!-- Updated image dimensions to 300x300 and made width 100% for full card coverage -->
                            <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&h=300&q=80" alt="PCI DSS" class="img-fluid rounded" style="width: 100%; height: 120px; object-fit: cover;">
                        </div>
                        <h6 class="mb-2">PCI DSS Level 1</h6>
                        <p class="text-muted small">Highest level of payment card industry security compliance</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="text-center p-4 h-100 bg-white rounded shadow-sm border">
                        <div class="mb-3">
                            <!-- Updated image dimensions to 300x300 and made width 100% for full card coverage -->
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&h=300&q=80" alt="ISO 27001" class="img-fluid rounded" style="width: 100%; height: 120px; object-fit: cover;">
                        </div>
                        <h6 class="mb-2">ISO 27001</h6>
                        <p class="text-muted small">International standard for information security management</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="text-center p-4 h-100 bg-white rounded shadow-sm border">
                        <div class="mb-3">
                            <!-- Updated image dimensions to 300x300 and made width 100% for full card coverage -->
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&h=300&q=80" alt="SOC 2" class="img-fluid rounded" style="width: 100%; height: 120px; object-fit: cover;">
                        </div>
                        <h6 class="mb-2">SOC 2 Type II</h6>
                        <p class="text-muted small">Audited controls for security, availability, and confidentiality</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="text-center p-4 h-100 bg-white rounded shadow-sm border">
                        <div class="mb-3">
                            <!-- Updated image dimensions to 300x300 and made width 100% for full card coverage -->
                            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&h=300&q=80" alt="GDPR" class="img-fluid rounded" style="width: 100%; height: 120px; object-fit: cover;">
                        </div>
                        <h6 class="mb-2">GDPR Compliant</h6>
                        <p class="text-muted small">Full compliance with European data protection regulations</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h4 class="mb-3">Regulatory Oversight</h4>
                    <p class="text-muted mb-4">
                        E-Gatepay operates under strict regulatory oversight in all markets. We maintain licenses and registrations with financial authorities worldwide, ensuring full compliance with local and international regulations.
                    </p>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span class="small">FCA Authorized (UK)</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span class="small">FinCEN Registered (US)</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span class="small">BaFin Licensed (Germany)</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span class="small">ASIC Registered (Australia)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Updated main regulatory image dimensions to 1000x800 for better quality -->
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&h=800&q=80"
                         alt="Regulatory Compliance" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Added Educational Technology Solutions Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative; overflow: hidden;">
        <!-- Background elements -->
        <div style="position: absolute; top: 10%; right: 5%; width: 120px; height: 120px; background: rgba(255,255,255,0.1); border-radius: 50%; animation: float 12s ease-in-out infinite;"></div>
        <div style="position: absolute; bottom: 20%; left: 10%; width: 80px; height: 80px; background: rgba(255,107,53,0.2); border-radius: 20px; animation: float 10s ease-in-out infinite reverse;"></div>

        <div class="container position-relative">
            <div class="text-center mb-5">
                <h2 class="text-white mb-4" style="font-size: 2.5rem; font-weight: 700;">
                    Educational Technology <span style="color: #FF6B35;">Solutions</span>
                </h2>
                <p class="text-white-50 lead">Empowering educational institutions with secure and efficient payment solutions</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="position-relative">
                        <!-- Updated to educational technology/students learning image -->
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=500&q=80"
                             alt="Educational Technology" class="img-fluid rounded shadow-lg">
                        <!-- Floating tech elements -->
                        <div class="position-absolute" style="top: 15%; right: -5%; width: 60px; height: 60px; background: rgba(255,255,255,0.2); border-radius: 12px; animation: float 7s ease-in-out infinite;"></div>
                        <div class="position-absolute" style="bottom: 25%; left: -3%; width: 40px; height: 40px; background: rgba(255,107,53,0.3); border-radius: 50%; animation: float 9s ease-in-out infinite reverse;"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-4">
                        <h4 class="text-white mb-4">Transforming Education Payments</h4>
                        <p class="text-white-50 mb-4">
                            E-Gatepay provides comprehensive payment solutions tailored specifically for educational institutions, from K-12 schools to universities and online learning platforms.
                        </p>

                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <div class="p-3 rounded" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-graduation-cap text-white me-2"></i>
                                        <h6 class="text-white mb-0">Tuition Payments</h6>
                                    </div>
                                    <p class="text-white-50 small mb-0">Flexible payment plans and automated billing</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 rounded" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-laptop text-white me-2"></i>
                                        <h6 class="text-white mb-0">Online Learning</h6>
                                    </div>
                                    <p class="text-white-50 small mb-0">Seamless course and subscription payments</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 rounded" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-utensils text-white me-2"></i>
                                        <h6 class="text-white mb-0">Campus Services</h6>
                                    </div>
                                    <p class="text-white-50 small mb-0">Cafeteria, bookstore, and facility payments</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 rounded" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-shield-alt text-white me-2"></i>
                                        <h6 class="text-white mb-0">Secure & Compliant</h6>
                                    </div>
                                    <p class="text-white-50 small mb-0">FERPA compliant with student data protection</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <button class="btn btn-light px-4">Education Solutions</button>
                            <button class="btn btn-outline-light px-4">Case Studies</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('frontend.layouts.partials._footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('new_frontend/asset/js/script.js')}}"></script>

</body>

</html>
