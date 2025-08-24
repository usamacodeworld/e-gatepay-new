<!-- Ultra-modern navigation -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/E-gatepay-logo-NaOCHgGrTsVTCS5De4gqN65gJH5tJL.png"
                 alt="E-Gatepay" height="45" class="brand-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <!-- Updated navigation links to proper HTML files -->
                <li class="nav-item"><a class="nav-link" href="/our-company">Our Company</a></li>
                <li class="nav-item"><a class="nav-link" href="/payments">Payments</a></li>
                <li class="nav-item"><a class="nav-link" href="/merchants">Merchants</a></li>
                <li class="nav-item"><a class="nav-link" href="/resources">Resources</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact-us">Contact Us</a></li>
            </ul>
            <div class="d-flex gap-3 align-items-center">
                @if(auth()->user())
                    <a href="{{route('user.dashboard')}}" class="btn btn-primary">Dashboard</a>
                    @else
                    <a href="{{route('merchant.register')}}" class="btn btn-primary">Apply Now</a>
                    @endif
            </div>
        </div>
    </div>
</nav>
