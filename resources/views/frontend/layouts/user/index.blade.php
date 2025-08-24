<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Gatepay - Merchant Admin Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('new_frontend/styles/admin-styles.css') }}">
    <!-- Added Chart.js CDN for chart functionality -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .active_li_class {
            background: linear-gradient(135deg, #f04f36, #f89043);
            color: white;
            transform: translateX(8px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-radius: 0 25px 25px 0;
                margin-right: 1rem;
        }
    </style>
</head>

<body>
    <!-- Enhanced responsive header with improved mobile toggle and layout -->
    @include('frontend.layouts.user.partials._navbar')

    <div class="admin-layout">
        <!-- Enhanced professional sidebar with smooth animations and better mobile support -->
        <div class="sidebar-overlay d-lg-none" id="sidebarOverlay"></div>
        @include('frontend.user.dashboard.partials._left_bar_menu')
        <!-- Main Content -->
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Updated script path to match file structure -->
    <script src="{{ asset('new_frontend/scripts/admin-script.js') }}"></script>
    <script>
        document.getElementById('payableAmount').addEventListener('click', function() {
            const amountText = document.querySelector('.amount-text');
            amountText.style.display = amountText.style.display === 'none' ? 'block' : 'none';
        });

        document.getElementById('merchantAccount').addEventListener('click', function() {
            const accountText = document.querySelector('.account-text');
            accountText.style.display = accountText.style.display === 'none' ? 'block' : 'none';
        });
    </script>
</body>

</html>
