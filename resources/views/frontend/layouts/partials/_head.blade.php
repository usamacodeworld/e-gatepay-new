<head> {{-- Basic Meta Tags --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="{{ setting('site_title') }}"> {{-- Dynamic Page Title --}} <title>
        {{ $meta['meta']['title'] ?? setting('site_title') }}</title> {{-- SEO Meta Tags --}}
    <meta name="description" content="{{ $meta['meta']['description'] ?? '' }}">
    <meta name="keywords" content="{{ $meta['meta']['keywords'] ?? '' }}">
    <meta name="author" content="{{ setting('site_title') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}"> {{-- Canonical URL --}}
    <link rel="canonical" href="{{ $meta['meta']['canonical_url'] ?? url()->current() }}"> {{-- Robots Meta --}}
    <meta name="robots" content="{{ $meta['meta']['robots'] ?? 'index,follow' }}"> {{-- Open Graph Tags --}}
    <meta property="og:site_name" content="{{ $meta['meta']['og']['site_name'] ?? setting('site_title') }}">
    <meta property="og:title" content="{{ $meta['meta']['og']['title'] ?? setting('site_title') }}">
    <meta property="og:description" content="{{ $meta['meta']['og']['description'] ?? '' }}">
    <meta property="og:url" content="{{ $meta['meta']['og']['url'] ?? url()->current() }}">
    <meta property="og:type" content="{{ $meta['meta']['og']['type'] ?? 'website' }}">
    <meta property="og:image" content="{{ $meta['meta']['og']['image'] ?? '' }}">
    <meta property="og:locale" content="{{ $meta['meta']['og']['locale'] ?? 'en_US' }}"> {{-- Twitter Card Meta --}}
    <meta name="twitter:card" content="{{ $meta['meta']['twitter']['card'] ?? 'summary_large_image' }}">
    @if (!empty($meta['meta']['twitter']['site']))
        <meta name="twitter:site" content="{{ $meta['meta']['twitter']['site'] }}">
    @endif
    <meta name="twitter:title" content="{{ $meta['meta']['twitter']['title'] ?? setting('site_title') }}">
    <meta name="twitter:description" content="{{ $meta['meta']['twitter']['description'] ?? '' }}">
    <meta name="twitter:image" content="{{ $meta['meta']['twitter']['image'] ?? '' }}">
    <link rel="icon" href="{{ asset(setting('site_favicon')) }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('new_frontend/asset/css/style.css') }}" /> {{-- Custom CSS --}}
    @include('frontend.layouts.partials.custom.code-css') {{-- Extra Styles --}} @yield('styles') @stack('styles')
</head>
