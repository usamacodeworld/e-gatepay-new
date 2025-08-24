<header class="mobile-navbar-area d-lg-none d-block">
    <div class="container mb-30">
        <div class="navbar-wrap"></div>

        <!-- Mobile user menu -->
        <ul class="user d-flex align-items-center justify-content-between mt-2" style="gap: 10px;"> <!-- ✅ Added gap -->
            <!-- Hamburger Button -->
            <li class="d-flex align-items-center">
                <button id="hamburgerBtn" class="hamburger-btn text-dark d-flex align-items-center justify-content-center"
                    style="height: 40px; width: 40px; border-radius: 50%; background: #f8f9fa; border: 1px solid #ddd;">
                    <i class="fa-solid fa-bars fa-lg"></i>
                </button>
            </li>

            <!-- Payable Amount -->
            <li class="flex-grow-1" style="max-width: 220px;">
                <div class="payable_amount_alert alert alert-info fw-semibold d-flex align-items-center justify-content-center py-1 px-2"
                    style="font-size: 13px; border-radius: 8px; margin: 0;"> <!-- ✅ Vertically centered -->
                    <div class="text-truncate" style="max-width: 200px;">
                        <i class="fa fa-money-bill-wave me-2"></i>
                        {{ auth()->user()->payable_amount && auth()->user()->payable_amount > 0
                            ? 'Payable: $' . number_format(auth()->user()->payable_amount, 2)
                            : 'No payable amount.' }}
                    </div>
                </div>
            </li>

            <!-- Avatar -->
            <li class="position-relative d-flex align-items-center">
                <a href="javascript:void(0);" id="avatarDropdownBtn"
                    class="d-flex align-items-center justify-content-center">
                    <img class="user-1"
                        src="{{ asset(auth()->user()->avatar_alt ?? 'general/static/default/user.png') }}"
                        alt="User" style="width: 38px; height: 38px; border-radius: 50%; border: 2px solid #ddd;">
                </a>
                <!-- Dropdown Menu -->
                <ul id="avatarDropdown" class="avatar-dropdown list-unstyled p-2 bg-dark text-white">
                    <li class="mb-2">
                        <a href="{{ route('user.settings.profile') }}" class="d-block text-white text-decoration-none">
                            Edit Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="d-block text-white text-decoration-none"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</header>


<!-- Mobile Sidebar -->
<div id="mobileSidebar" class="mobile-sidebar">
    <!-- Logo -->
    <div class="sidebar-logo text-center mb-4">
        <img src="{{ asset('new_frontend/asset/images/E-gatepay-logo-White.png') }}" alt="E-Gatepay" height="45"
            class="brand-logo">
    </div>

    <!-- Sidebar links -->
    <ul class="list-unstyled mt-3">
        <li class="mb-3">
            <a href="{{ route('user.dashboard') }}"
                class="{{ request()->routeIs('user.dashboard') ? 'active-link' : '' }}">
                <x-icon name="dashboard-2" class="icon x-icon" /> Dashboard
                {{-- <span class="sidebar-text">Dashboard</span> --}}
            </a>
        </li>

        <!-- Monitoring Parent -->
        <li class="mb-3">
            <span class="sidebar-parent {{ request()->is('user/transaction/index*') ? 'active-parent' : '' }}"
                onclick="toggleChildMenu(this)">
                <i class="fa-solid fa-chart-line me-2"></i>
                <span class="sidebar-text">Monitoring</span>
                <i class="fa-solid fa-chevron-right arrow float-end"></i>
            </span>
            <ul class="list-unstyled ms-3 mt-2 sidebar-child">
                <li class="mb-2">
                    <a href="{{ route('user.transaction.index') }}"
                        class="{{ request()->routeIs('user.transaction.index') ? 'active-link' : '' }}">
                        <i class="fa-solid fa-circle-dot me-2"></i>
                        <span class="sidebar-text">Monitoring</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('user.transaction.archived') }}"
                        class="{{ request()->routeIs('user.transaction.archived') ? 'active-link' : '' }}">
                        <i class="fa-solid fa-archive me-2"></i>
                        <span class="sidebar-text">Archived Transactions</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="mb-3">
            <a href="{{ route('user.transaction.successful') }}"
                class="{{ request()->routeIs('user.transaction.successful') ? 'active-link' : '' }}">
                <i class="fa-solid fa-gauge me-2"></i>
                <span class="sidebar-text">Successful Transactions</span>
            </a>
        </li>


        <li class="mb-3">
            <span class="sidebar-parent {{ request()->is('user/settlements*') ? 'active-parent' : '' }}"
                onclick="toggleChildMenu(this)">
                <i class="fa-solid fa-chart-line fa-lg me-2"></i>
                <span class="sidebar-text">Settlements</span>
                <i class="fa-solid fa-chevron-right arrow float-end"></i>
            </span>
            <ul class="list-unstyled ms-3 mt-2 sidebar-child">
                <li class="mb-2">
                    <a href="{{ route('user.settlements.index') }}"
                        class="{{ request()->routeIs('user.settlements.index') ? 'active-link' : '' }}">
                        <i class="fa-solid fa-circle-dot me-2"></i>
                        <span class="sidebar-text">Settlements</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('user.settlements.running-balance') }}" class="{{ request()->routeIs('user.settlements.running-balance') ? 'active-link' : '' }}">
                        <i class="fa-solid fa-archive me-2"></i>
                        <span class="sidebar-text">Running Balance</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('user.settlements.dispursal') }}" class="{{ request()->routeIs('user.settlements.dispursal') ? 'active-link' : '' }}">
                        <i class="fa-solid fa-archive me-2"></i>
                        <span class="sidebar-text">Dispursal</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="mb-3">
            <span class="sidebar-parent {{ request()->is('user/transaction/index*') ? 'active-parent' : '' }}"
                onclick="toggleChildMenu(this)">
                <i class="fa-solid fa-bars fa-lg me-2"></i>
                <span class="sidebar-text">My API</span>
                <i class="fa-solid fa-chevron-right arrow float-end"></i>
            </span>
            <ul class="list-unstyled ms-3 mt-2 sidebar-child">
                <li class="mb-2">
                    <a href="{{ route('user.merchant.index') }}"
                        class="{{ request()->routeIs('user.merchant.index') ? 'active-link' : '' }}">
                        <i class="fa-solid fa-bars fa-lg me-2"></i>
                        <span class="sidebar-text">API Credentials</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('api-docs.index') }}" target="_blank">
                        <i class="fa-solid fa-download me-2"></i>
                        <span class="sidebar-text">User Guide</span>
                    </a>
                </li>
            </ul>
        </li>


    </ul>

    <style>
        /* Active background for single links */
        .active-link {
            background-color: #fec273;
            /* Bootstrap primary color */
            color: black !important;
        }

        .active-link:hover {
            background-color: #fec273;
        }

        /* Active background for parent menu */
        .active-parent {
            background-color: #fec273;
            color: black;
            border-radius: 5px;
        }

        /* Active child visible if parent is active */
        .active-parent+.sidebar-child {
            display: block;
        }

        .sidebar-child li a.active-link {
            background-color: #fec273;
            color: black;
        }

        .x-icon {
            margin-right: 5px;
            width: 16px;
            height: 16px;
        }
    </style>

</div>

<!-- Overlay -->
<div id="sidebarOverlay"></div>

<script>
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const mobileSidebar = document.getElementById('mobileSidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');

    // Open sidebar
    hamburgerBtn.addEventListener('click', () => {
        mobileSidebar.style.transform = 'translateX(0)';
        sidebarOverlay.style.display = 'block';
    });

    // Close sidebar function
    function closeSidebarFunc() {
        mobileSidebar.style.transform = 'translateX(-100%)';
        sidebarOverlay.style.display = 'none';
    }

    // Close when clicking on overlay
    sidebarOverlay.addEventListener('click', closeSidebarFunc);

    // Close when clicking outside the sidebar
    document.addEventListener('click', function(e) {
        if (!mobileSidebar.contains(e.target) && !hamburgerBtn.contains(e.target)) {
            closeSidebarFunc();
        }
    });

    // Avatar dropdown
    const avatarBtn = document.getElementById('avatarDropdownBtn');
    const avatarDropdown = document.getElementById('avatarDropdown');

    avatarBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        avatarDropdown.classList.toggle('show');
    });

    document.addEventListener('click', () => {
        avatarDropdown.classList.remove('show');
    });

    // Toggle child menu for Monitoring with arrow rotation
    function toggleChildMenu(el) {
        const childMenu = el.nextElementSibling;
        const arrow = el.querySelector('.arrow');
        if (childMenu) {
            childMenu.classList.toggle('show');
            arrow.classList.toggle('rotate');
        }
    }
</script>

<style>
    /* Hamburger button */
    .hamburger-btn {
        background: none;
        border: none;
        outline: none;
        cursor: pointer;
    }

    .hamburger-btn:focus {
        outline: none;
        box-shadow: none;
    }

    /* Sidebar */
    .mobile-sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 300px;
        height: 100%;
        background: #1d1d1d;
        box-shadow: 2px 0 10px rgba(0, 0, 0, 0.2);
        z-index: 9999;
        padding: 20px;
        overflow-y: auto;
        transition: transform 0.3s ease;
        transform: translateX(-100%);
    }

    .sidebar-logo img {
        max-width: 60%;
        height: auto;
    }

    /* Overlay */
    #sidebarOverlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 9998;
    }

    /* Sidebar links */
    .mobile-sidebar ul li a,
    .sidebar-parent {
        display: flex;
        align-items: center;
        text-decoration: none;
        font-size: 16px;
        padding: 8px 12px;
        border-radius: 5px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        color: white;
    }

    /* Child menu collapsed by default */
    .sidebar-child {
        display: none;
    }

    .sidebar-child.show {
        display: block;
    }

    .sidebar-child li a {
        font-size: 14px;
        color: #ccc;
        padding-left: 8px;
        background: #2a2a2a;
        /* Slightly lighter child background */
    }

    .sidebar-child li a:hover {
        color: white;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 4px;
    }

    /* Arrow rotation */
    .arrow {
        transition: transform 0.3s ease;
    }

    .arrow.rotate {
        transform: rotate(90deg);
    }

    /* Avatar dropdown */
    .avatar-dropdown {
        display: none;
        position: absolute;
        top: 50px;
        right: 0;
        background: #1d1d1d;
        border-radius: 5px;
        min-width: 150px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        z-index: 9999;
    }

    .avatar-dropdown.show {
        display: block;
    }

    .avatar-dropdown li a {
        padding: 8px 12px;
        display: block;
    }

    .avatar-dropdown li a:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
        .mobile-sidebar {
            width: 250px;
            padding: 15px;
        }

        .mobile-sidebar ul li a img {
            width: 30px;
            height: 30px;
        }
    }

    /* Text span inside links for ellipsis */
    .sidebar-text {
        flex: 1;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
