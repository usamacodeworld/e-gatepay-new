<!-- Premium footer -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="footer-brand">
                    <!-- Updated footer logo to use proper path -->
                    <img src="{{asset('new_frontend/asset/images/E-gatepay-logo-White.png')}}"
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
                    <!-- Updated footer links to proper HTML files -->
                    <li><a href="/our-company">About Us</a></li>
                    <li><a href="/contact-us">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="footer-heading">Services</h6>
                <ul class="footer-links">
                    <li><a href="/payments">Payment Processing</a></li>
                    <li><a href="/payments">Mobile Payments</a></li>
                    <li><a href="/payments">Global Payments</a></li>
                    <li><a href="{{route('api-docs.index')}}">API Integration</a></li>
{{--                    <li><a href="#">Analytics</a></li>--}}
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="footer-heading">Resources</h6>
                <ul class="footer-links">
                    <li><a href="/resources">Documentation</a></li>
                    <li><a href="{{route('api-docs.index')}}#integration-examples">API Reference</a></li>
                    <li><a href="/contact-us">Help Center</a></li>
                    <li><a href="{{route('api-docs.index')}}#error-codes">Status Page</a></li>
                    <li><a href="{{route('api-docs.index')}}#testing">Testing</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="footer-heading">Legal</h6>
                <ul class="footer-links">
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <li><a href="/terms-of-services">Terms of Service</a></li>
                    <li><a href="/cookie-policy">Cookie Policy</a></li>
                    <li><a href="/compliance">Compliance</a></li>
                    <li><a href="/licenses">Licenses</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-newsletter">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h5 class="newsletter-title">Subscribe To Our Newsletter</h5>
                    <p class="newsletter-description">Stay updated with the latest payment trends and E-Gatepay news
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email address">
                            <button class="btn btn-primary" type="button">
                                Subscribe
                                <i class="fas fa-paper-plane ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="footer-divider">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="footer-copyright">
                    &copy; 2025 E-Gatepay. All rights reserved.
                    <span class="footer-tagline">Powering the future of payments.</span>
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <div class="footer-legal">
                    <a href="/privacy-policy">Privacy</a>
                    <a href="/terms-of-services">Terms</a>
                    <a href="/cookie-policy">Cookies</a>
                    <a href="/licenses">Licenses</a>
                </div>
            </div>
        </div>
    </div>
</footer>
