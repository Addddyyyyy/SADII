@php
    $currentRoute = Route::currentRouteName();
@endphp

<!-- Start::main-sidebar-header -->
<div class="main-sidebar-header">
    <a href="{{ route('dashboard') }}" class="header-logo">
        <img src="{{ asset('storage/images/navbarlogo.png') }}" class="desktop-logo">
        <img src="{{ asset('storage/images/navbarlogo.png') }}" class="toggle-logo">
        <img src="{{ asset('storage/images/navbarlogo.png') }}" class="desktop-dark">
        <img src="{{ asset('storage/images/navbarlogo.png') }}" class="toggle-dark">
        <img src="{{ asset('storage/images/navbarlogo.png') }}" class="desktop-white">
    </a>
</div>
<!-- End::main-sidebar-header -->

<!-- Start::main-sidebar -->
<div class="main-sidebar" id="sidebar-scroll">

<nav class="main-menu-container nav nav-pills flex-column sub-open">

<ul class="main-menu">

    <!-- MAIN -->
    <li class="slide__category"><span class="category-name">Main</span></li>

    <!-- DASHBOARD DROPDOWN -->
    <li class="slide has-sub">
        <a href="javascript:void(0);" class="side-menu__item">
            <svg class="side-menu__icon" viewBox="0 0 24 24">
                <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z"/>
            </svg>
            <span class="side-menu__label">Dashboard</span>
            <i class="fe fe-chevron-right side-menu__angle"></i>
        </a>

        <ul class="slide-menu child1">
            <li>
                <a href="{{ route('dashboard') }}" class="side-menu__item">
                    Tenant Dashboard
                </a>
            </li>

            <li>
                <a href="{{ route('landlord.dashboard') }}" class="side-menu__item">
                    Landlord Dashboard
                </a>
            </li>
        </ul>
    </li>

    <!-- MY BOARDING HOUSES (NOW SIMPLE LINK) -->
    <li class="slide">
        <a href="{{ route('landlord.myboardinghouses.index') }}"
           class="side-menu__item">
            <svg class="side-menu__icon" viewBox="0 0 24 24">
                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
            </svg>
            <span class="side-menu__label">My Boarding Houses</span>
        </a>
    </li>

    <!-- RESERVATIONS DROPDOWN -->
    <li class="slide has-sub">
        <a href="javascript:void(0);" class="side-menu__item">
            <svg class="side-menu__icon" viewBox="0 0 24 24">
                <path d="M3 5h18v14H3z"/>
            </svg>
            <span class="side-menu__label">Reservations</span>
            <i class="fe fe-chevron-right side-menu__angle"></i>
        </a>

        <ul class="slide-menu child1">

            <li>
                <a href="{{ route('myreservation.index') }}" class="side-menu__item">
                    My Reservations (Tenant)
                </a>
            </li>

            <li>
                <a href="{{ route('landlord.reservations.index') }}" class="side-menu__item">
                    Reservations (Landlord)
                </a>
            </li>

        </ul>
    </li>

    <!-- BROWSE -->
    <li class="slide">
        <a href="{{ route('browse_boarding_house.index') }}" class="side-menu__item">
            <svg class="side-menu__icon" viewBox="0 0 24 24">
                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
            </svg>
            <span class="side-menu__label">Browse Boarding Houses</span>
        </a>
    </li>

    <!-- MESSAGES -->
    <li class="slide">
        <a href="{{ route('chat.index') }}" class="side-menu__item">
            <svg class="side-menu__icon" viewBox="0 0 24 24">
                <path d="M4 2h16a2 2 0 0 1 2 2v14l-4-4H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"/>
            </svg>
            <span class="side-menu__label">Messages</span>
        </a>
    </li>

</ul>

</nav>
</div>
<!-- End::main-sidebar -->