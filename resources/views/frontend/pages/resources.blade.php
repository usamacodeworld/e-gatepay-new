<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources - E-Gatepay | Payments Talk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('new_frontend/asset/css/style.css')}}">

    <style>
        .blog-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        }

        .blog-image {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .blog-date {
            color: #FF6B35;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .blog-title {
            font-size: 1.1rem;
            font-weight: 600;
            line-height: 1.4;
            color: #2c3e50;
        }

        .blog-title:hover {
            color: #FF6B35;
        }

        .interview-card {
            background: linear-gradient(135deg, #8B5CF6 0%, #A855F7 100%);
            color: white;
            border-radius: 16px;
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }

        .interview-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }

        .play-button {
            width: 60px;
            height: 60px;
            background: rgba(255,255,255,0.2);
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .play-button:hover {
            background: rgba(255,255,255,0.3);
            transform: scale(1.1);
        }
    </style>
</head>

<body class="resources-page">
    <!-- Navigation -->
    @include('frontend.layouts.partials._header_sticky')


    <!-- Resources Hero Banner -->
    <section class="hero-section" style="
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)),
                    url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1926&q=80') center/cover no-repeat;
        min-height: 60vh;
        position: relative;
        overflow: hidden;
    ">
        <div class="container position-relative">
            <div class="row align-items-center justify-content-center text-center" style="min-height: 60vh;">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb" class="mb-4">
                            <ol class="breadcrumb justify-content-center bg-transparent p-0">
                                <li class="breadcrumb-item"><a href="index.html" class="text-white-50 text-decoration-none">Home</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Resources</li>
                            </ol>
                        </nav>

                        <h1 class="hero-title text-white mb-4" style="font-size: 3.5rem; font-weight: 700; ">
                            <span class="gradient-text" style="background: linear-gradient(45deg, #FF6B35, #F7931E); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Resources</span>
                        </h1>
                        <p class="hero-subtitle text-white mb-5" style="font-size: 1.3rem; font-weight: 400; max-width: 600px; margin: 0 auto;">
                            Stay informed with the latest insights, guides, and industry knowledge from E-Gatepay experts
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Payments Talk Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title mb-4">Payments <span class="text-primary">Talk</span></h2>
                <p class="text-muted lead">Expert insights and industry knowledge to help you succeed</p>
            </div>

            <div class="row g-4">
                <!-- Blog Post 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card bg-white h-100">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=200&q=80" alt="Chargebacks" class="blog-image">
                        <div class="p-4">
                            <div class="blog-date mb-2">October 15, 2024</div>
                            <h5 class="blog-title mb-3">
                                <a href="#" class="text-decoration-none blog-title">What Are Chargebacks And How To Prevent Or Dispute Them</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card bg-white h-100">
                        <img src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=200&q=80" alt="Recurring Billing" class="blog-image">
                        <div class="p-4">
                            <div class="blog-date mb-2">October 12, 2024</div>
                            <h5 class="blog-title mb-3">
                                <a href="#" class="text-decoration-none blog-title">Ways To Make Recurring Billing Effective For Your Business</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card bg-white h-100">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=200&q=80" alt="WooCommerce" class="blog-image">
                        <div class="p-4">
                            <div class="blog-date mb-2">October 10, 2024</div>
                            <h5 class="blog-title mb-3">
                                <a href="#" class="text-decoration-none blog-title">Choosing The Right WooCommerce Payment Gateway: A Comprehensive Guide</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card bg-white h-100">
                        <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=200&q=80" alt="Digital Payments" class="blog-image">
                        <div class="p-4">
                            <div class="blog-date mb-2">October 08, 2024</div>
                            <h5 class="blog-title mb-3">
                                <a href="#" class="text-decoration-none blog-title">The Evolution Of Digital Payments: Exploring Card And Mobile Payout Solutions</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card bg-white h-100">
                        <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=200&q=80" alt="Card Issuing" class="blog-image">
                        <div class="p-4">
                            <div class="blog-date mb-2">October 05, 2024</div>
                            <h5 class="blog-title mb-3">
                                <a href="#" class="text-decoration-none blog-title">The Future Of Card Issuing: Trends And Innovations In The Industry</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card bg-white h-100">
                        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=200&q=80" alt="Subscription Security" class="blog-image">
                        <div class="p-4">
                            <div class="blog-date mb-2">October 03, 2024</div>
                            <h5 class="blog-title mb-3">
                                <a href="#" class="text-decoration-none blog-title">Why Securing Billing Is Crucial For Subscription-Based Businesses</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card bg-white h-100">
                        <img src="https://images.unsplash.com/photo-1556742111-a301076d9d18?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=200&q=80" alt="POS Terminal" class="blog-image">
                        <div class="p-4">
                            <div class="blog-date mb-2">September 30, 2024</div>
                            <h5 class="blog-title mb-3">
                                <a href="#" class="text-decoration-none blog-title">Life Benefits Of Upgrading To A Smart Point Of Sale Terminal</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card bg-white h-100">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&h=200&q=80" alt="Payment Processors" class="blog-image">
                        <div class="p-4">
                            <div class="blog-date mb-2">September 28, 2024</div>
                            <h5 class="blog-title mb-3">
                                <a href="#" class="text-decoration-none blog-title">Payment Processors: Choosing The Right Fit For Your Business</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Interview Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="interview-card h-100 d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="text-white mb-3" style="font-weight: 600;">Marcopolis Interview With David Morenas | CEO, E-Gatepay</h5>
                            <p class="text-white-75 mb-4" style="font-size: 0.9rem;">Exclusive insights from our CEO on the future of digital payments and E-Gatepay's vision.</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="blog-date text-white-75">September 15, 2024</div>
                            <div class="play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    <nav aria-label="Blog pagination">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
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
