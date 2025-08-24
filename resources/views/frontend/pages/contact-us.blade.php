<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - E-Gatepay | Get In Touch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('new_frontend/asset/css/style.css')}}">
    <style>
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

        .contact-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
        }

        .form-control:focus {
            border-color: #FF6B35;
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.25);
        }

        .contact-form {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .office-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 20px;
            padding: 2rem;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .office-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .map-container {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .contact-page .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)),
                        url('https://images.unsplash.com/photo-1423666639041-f56000c27a9a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1926&q=80') center/cover no-repeat;
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
    </style>
</head>

<body class="contact-page">
    <!-- Navigation -->
    @include('frontend.layouts.partials._header_sticky')


    <!-- Contact Hero Banner -->
    <section class="hero-section">
        <div class="container position-relative">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb" class="mb-4">
                            <ol class="breadcrumb justify-content-center bg-transparent p-0">
                                <li class="breadcrumb-item"><a href="index.html"
                                        class="text-white-50 text-decoration-none">Home</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>

                        <h1 class="hero-title text-white mb-4">
                            <span class="gradient-text"
                                style="background: linear-gradient(45deg, #FF6B35, #F7931E); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Contact
                                Us</span>
                        </h1>
                        <p class="hero-subtitle text-white mb-5"
                            style="font-size: 1.3rem; font-weight: 400;  max-width: 600px; margin: 0 auto;">
                            Get in touch with our team of payment experts. We're here to help you succeed.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Cards -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4 mb-5">
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="contact-card text-center h-100">--}}
{{--                        <div class="contact-icon mx-auto">--}}
{{--                            <i class="fas fa-phone"></i>--}}
{{--                        </div>--}}
{{--                        <h5 class="mb-3">Call Us</h5>--}}
{{--                        <p class="text-muted mb-3">Speak directly with our support team</p>--}}
{{--                        <div class="contact-details">--}}
{{--                            <p class="mb-1"><strong>Sales:</strong> +1 (555) 123-4567</p>--}}
{{--                            <p class="mb-1"><strong>Support:</strong> +1 (555) 987-6543</p>--}}
{{--                            <p class="mb-0"><strong>Hours:</strong> Mon-Fri 9AM-6PM EST</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-lg-6 col-md-6">
                    <div class="contact-card text-center h-100">
                        <div class="contact-icon mx-auto">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5 class="mb-3">Email Us</h5>
                        <p class="text-muted mb-3">Send us a message anytime</p>
                        <div class="contact-details">
                            <p class="mb-1"><strong>General:</strong> E.Gatepaysolutions@gmail.com</p>
{{--                            <p class="mb-1"><strong>Support:</strong> support@egatepay.com</p>--}}
{{--                            <p class="mb-0"><strong>Sales:</strong> sales@egatepay.com</p>--}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="contact-card text-center h-100">
                        <div class="contact-icon mx-auto">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h5 class="mb-3">Live Chat</h5>
                        <p class="text-muted mb-3">Get instant help from our team</p>
                        <div class="contact-details">
                            <p class="mb-1"><strong>Available:</strong> 24/7</p>
                            <p class="mb-1"><strong>Response:</strong> Under 2 minutes</p>
                            <button class="btn btn-primary btn-sm mt-2">Start Chat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Office Info -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-5">
                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="contact-form">
                        <h3 class="mb-4">Send Us a Message</h3>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name *</label>
                                    <input type="text" class="form-control" id="firstName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name *</label>
                                    <input type="text" class="form-control" id="lastName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>
                                <div class="col-12">
                                    <label for="company" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="company">
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label">Subject *</label>
                                    <select class="form-select" id="subject" required>
                                        <option value="">Select a subject</option>
                                        <option value="sales">Sales Inquiry</option>
                                        <option value="support">Technical Support</option>
                                        <option value="partnership">Partnership</option>
                                        <option value="billing">Billing Question</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea class="form-control" id="message" rows="5" required
                                        placeholder="Tell us how we can help you..."></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="newsletter">
                                        <label class="form-check-label" for="newsletter">
                                            Subscribe to our newsletter for updates and insights
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Office Information -->
                <div class="col-lg-4">
                    <div class="office-card">
                        <h4 class="mb-4">Our Headquarters</h4>
                        <div class="office-info">
                            <div class="mb-4">
                                <h6 class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>Address</h6>
                                <p class="mb-0">Central kampala kamwokya 2 central zone</p>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-2"><i class="fas fa-clock me-2"></i>Business Hours</h6>
                                <p class="mb-0">Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00
                                    PM<br>Sunday: Closed</p>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-2"><i class="fas fa-globe me-2"></i>Global Presence</h6>
                                <p class="mb-0">Offices in 15+ countries<br>Supporting 50+ markets worldwide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="mb-3">Find Us</h3>
                <p class="text-muted">Visit our headquarters in the heart of New York's Financial District</p>
            </div>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.952147934653!2d-74.01263368459394!3d40.70544797933073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a316db8c2c7%3A0x4b8b8b8b8b8b8b8b!2sFinancial%20District%2C%20New%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1635789012345!5m2!1sen!2sus"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="mb-3">Frequently Asked Questions</h3>
                <p class="text-muted">Quick answers to common questions</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    How quickly can I get started with E-Gatepay?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can get started within 24 hours. Our streamlined onboarding process includes
                                    account setup, integration support, and testing - all designed to get you processing
                                    payments quickly.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    What payment methods do you support?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We support all major payment methods including credit/debit cards, digital wallets
                                    (Apple Pay, Google Pay), bank transfers, and cryptocurrency payments across 50+
                                    countries.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    Is there a setup fee or monthly minimum?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    No setup fees or monthly minimums. You only pay per transaction with our transparent
                                    pricing structure. Contact our sales team for volume discounts.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                    Do you provide technical support?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes! We provide 24/7 technical support, comprehensive documentation, SDKs, and
                                    dedicated account managers for enterprise clients.
                                </div>
                            </div>
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
