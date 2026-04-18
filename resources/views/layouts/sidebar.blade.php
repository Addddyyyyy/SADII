<!-- Start::main-sidebar-header -->
<div class="main-sidebar-header">
    <a href="index.html" class="header-logo">
        <img src="{{ asset('storage/images/navbarlogo.png') }}" alt="logo" class="desktop-logo">
        <img src="{{ asset('storage/images/navbarlogo.png') }}" alt="logo" class="toggle-logo">
        <img src="{{ asset('storage/images/navbarlogo.png') }}" alt="logo" class="desktop-dark">
        <img src="{{ asset('storage/images/navbarlogo.png') }}" alt="logo" class="toggle-dark">
        <img src="{{ asset('storage/images/navbarlogo.png') }}" alt="logo" class="desktop-white">
    </a>
</div>
<!-- End::main-sidebar-header -->

<!-- Start::main-sidebar -->
<div class="main-sidebar" id="sidebar-scroll">

    <nav class="main-menu-container nav nav-pills flex-column sub-open">

        <ul class="main-menu">

            <!-- MAIN -->
            <li class="slide__category">
                <span class="category-name">Main</span>
            </li>

            <!-- DASHBOARD -->
            <li class="slide has-sub">
                <a href="javascript:void(0);" class="side-menu__item">
                    <svg class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z"/>
                    </svg>
                    <span class="side-menu__label">Dashboard</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>

                <ul class="slide-menu child1">

                    <li class="slide">
                        <a href="{{ route('dashboard') }}" class="side-menu__item">
                            Tenant Dashboard
                        </a>
                    </li>

                    <!-- LANDLORD DASHBOARD (ALWAYS SHOWN) -->
                    <li class="slide">
                        <a href="{{ route('landlord.dashboard') }}" class="side-menu__item">
                            Landlord Dashboard
                        </a>
                    </li>

                </ul>
            </li>

            <!-- GENERAL -->
            <li class="slide__category">
                <span class="category-name">General</span>
            </li>

            <!-- USER MANAGEMENT -->
            <li class="slide">
                <a href="{{ route('users.index') }}" class="side-menu__item">
                    <span class="side-menu__label">User Management</span>
                </a>
            </li>

            <!-- PRODUCT DETAILS -->
            <li class="slide">
                <a href="{{ route('product.details') }}" class="side-menu__item">
                    <span class="side-menu__label">Product Details</span>
                </a>
            </li>

            <!-- BROWSE BOARDING HOUSE -->
            <li class="slide">
                <a href="{{ route('browse_boarding_house.index') }}" class="side-menu__item">
                    <span class="side-menu__label">Browse Boarding Houses</span>
                </a>
            </li>

            <!-- MESSAGES -->
            <li class="slide">
                <a href="{{ route('chat.index') }}" class="side-menu__item">
                    <span class="side-menu__label">Messages</span>
                </a>
            </li>

            <!-- RESERVATION -->
            <li class="slide">
                <a href="{{ route('reservation.index') }}" class="side-menu__item">
                    <span class="side-menu__label">Reservation</span>
                </a>
            </li>

            <!-- MY RESERVATION -->
            <li class="slide">
                <a href="{{ route('myreservation.index') }}" class="side-menu__item">
                    <span class="side-menu__label">My Reservation</span>
                </a>
            </li>

        </ul>

    </nav>

</div>
<!-- End::main-sidebar -->