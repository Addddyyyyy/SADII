<!DOCTYPE html>
<html lang="en" class="h-full" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click"
    data-menu-position="fixed">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Valex- Tailwind Admin Template </title>
    <meta name="description"
        content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
    <meta name="keywords"
        content="dashboard,admin dashboard,template dashboard,html,html dashboard,admin dashboard template,admin template,tailwind ui,admin panel,html and css,html admin template,tailwind framework,html css javascript,tailwind css dashboard,dashboard html css,admin,template admin panel,dashboard html template">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('backend/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">

    <!-- Simplebar Css -->
    <link id="style" href="{{ asset('backend/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.css') }}">

</head>


<body class="landing-body">

    <!-- ========== Switcher  ========== -->
    <div id="hs-overlay-switcher" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1">
        <div class="ti-offcanvas-header">
            <h5 class="ti-offcanvas-title">
                Switcher
            </h5>
            <button type="button"
                class="ti-btn flex-shrink-0 p-0 transition-none text-defaulttextcolor dark:text-defaulttextcolor/70 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white  dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                data-hs-overlay="#hs-overlay-switcher">
                <span class="sr-only">Close modal</span>
                <i class="ri-close-circle-line leading-none text-lg"></i>
            </button>
        </div>
        <div class="ti-offcanvas-body" id="switcher-body">
            <div>
                <div>
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="grid grid-cols-3 gap-x-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-light-theme"
                                checked>
                            <label for="switcher-light-theme"
                                class="text-xs text-defaulttextcolor dark:text-defaulttextcolor/70 font-semibold ltr:ml-2 rtl:mr-2 ">Light</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-dark-theme">
                            <label for="switcher-dark-theme"
                                class="text-xs text-defaulttextcolor dark:text-defaulttextcolor/70 font-semibold ltr:ml-2 rtl:mr-2 ">Dark</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Directions:</p>
                    <div class="grid grid-cols-3 gap-x-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-ltr" checked>
                            <label for="switcher-ltr"
                                class="text-xs font-semibold text-defaulttextcolor dark:text-defaulttextcolor/70 ltr:ml-2 rtl:mr-2 ">LTR</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-rtl">
                            <label for="switcher-rtl"
                                class="text-xs font-semibold text-defaulttextcolor dark:text-defaulttextcolor/70 ltr:ml-2 rtl:mr-2 ">RTL</label>
                        </div>
                    </div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Primary:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-1" type="radio" name="theme-primary"
                                id="switcher-primary" checked>
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-2" type="radio" name="theme-primary"
                                id="switcher-primary1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-3" type="radio" name="theme-primary"
                                id="switcher-primary2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-4" type="radio" name="theme-primary"
                                id="switcher-primary3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-5" type="radio" name="theme-primary"
                                id="switcher-primary4">
                        </div>
                        <div class="ti-form-radio switch-select ltr:pl-0 rtl:pr-0 mt-1 color-primary-light">
                            <div class="theme-container-primary"></div>
                            <div class="pickr-container-primary"></div>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Reset:</p>
                    <div class="flex justify-center">
                        <a id="reset-all" class="ti-btn ti-btn-danger-full mt-4" href="javascript:void(0);">Reset</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== END Switcher  ========== -->

    <div class="landing-page-wrapper relative">

        <!-- Start::Header -->
         <header class="app-header">

        <!-- Start::main-header-container -->
        <div class="main-header-container container-fluid">

            <!-- Start::header-content-left -->
            <div class="header-content-left">

                <!-- Start::header-element -->
                <div class="header-element">
                    <div class="horizontal-logo">
                        <a href="{{ url('/') }}" class="header-logo">
                            <img src="{{ asset('backend/assets/images/brand-logos/toggle-logo.png') }}" alt="logo" class="toggle-logo">
                            <img src="{{ asset('backend/assets/images/brand-logos/toggle-dark.png') }}" alt="logo" class="toggle-dark">
                        </a>
                    </div>
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element">
                    <!-- Start::header-link -->
                    <a aria-label="anchor" href="javascript:void(0);" class="sidemenu-toggle header-link">
                        <span class="open-toggle">
                            <i class="ri-menu-3-line text-xl"></i>
                        </span>
                    </a>
                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->

            </div>
            <!-- End::header-content-left -->

            <!-- Start::header-content-right -->
            <div class="header-content-right">

                <!-- Start::header-element -->
                <div class="header-element !items-center">
                    <!-- Start::header-link|switcher-icon -->
                    <div class="lg:hidden flex items-center space-x-2 rtl:space-x-reverse">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="ti-btn ti-btn-primary !m-0">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="ti-btn ti-btn-primary !m-0">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ti-btn ti-btn-secondary !m-0">Register</a>
                            @endif
                        @endauth
                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn m-0 p-2 px-3 ti-btn-success"
                        data-hs-overlay="#hs-overlay-switcher"><i class="ri-settings-3-line animate-spin-slow"></i></a>
                    </div>
                    <!-- End::header-link|switcher-icon -->
                </div>
                <!-- End::header-element -->

            </div>
            <!-- End::header-content-right -->

        </div>
        <!-- End::main-header-container -->

        </header>
       <!-- End::Header -->

        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky !top-0" id="sidebar">
            <div class="container-xl !p-0">
                <!-- Start::main-sidebar -->
                <div class="main-sidebar">
                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills flex-column sub-open">
                        <div class="landing-logo-container my-auto hidden lg:block">
                            <div class="responsive-logo">
                                <a class="responsive-logo-light" href="{{ url('/') }}" aria-label="Brand">
                                    <img src="{{ asset('storage/images/navbarlogo.png') }}" alt="logo"
                                        class="mx-auto h-[4rem]">
                                </a>

                                <a class="responsive-logo-dark" href="{{ url('/') }}" aria-label="Brand">
                                    <img src="{{ asset('storage/images/navbarlogo.png') }}" alt="logo"
                                        class="mx-auto h-[4rem]">
                                </a>
                            </div>
                        </div>
                        <div class="slide-left hidden" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg></div>
                        <ul class="main-menu flex justify-center items-center gap-8">
                            <!-- Start::slide -->
                            <li class="slide">
                                <a class="side-menu__item" href="#home">
                                    <span class="side-menu__label">Home</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#about" class="side-menu__item">
                                    <span class="side-menu__label">About</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#contact" class="side-menu__item">
                                    <span class="side-menu__label">Contact</span>
                                </a>
                            </li>
                            <!-- End::slide -->

                        </ul>
                        <div class="slide-right hidden" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                        <div class="lg:flex hidden space-x-2 rtl:space-x-reverse">
                          @auth
                            <a href="{{ url('/dashboard') }}" class="ti-btn w-[6.375rem] ti-btn-primary-full m-0 p-2">Dashboard</a>
                          @else
                            <a href="{{ route('login') }}" class="ti-btn w-[6.375rem] ti-btn-primary-full m-0 p-2">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ti-btn w-[6.375rem] ti-btn-secondary-full m-0 p-2">Register</a>
                            @endif
                          @endauth
                          <a aria-label="anchor" href="javascript:void(0);" class="ti-btn m-0 p-2 px-3 ti-btn-light !font-medium"
                            data-hs-overlay="#hs-overlay-switcher"><i class="ri-settings-3-line animate-spin-slow"></i></a>
                        </div>
                    </nav>
                    <!-- End::nav -->

                </div>
                <!-- End::main-sidebar -->
            </div>
        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::main-content -->
        <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">
            <!-- Start::Home Content -->
            <div class="landing-banner" id="home"
                 style="background-image: url('{{ asset('storage/images/bglandingpage.jpg') }}'); background-size: cover; background-position: center;">
                <section class="section !pt-[6rem]">
                    <div class="container main-banner-container !pt-3 sm:!pt-[6rem]">
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-2 col-span-1"></div>
                            <div class="xxl:col-span-8 xl:col-span-8 lg:col-span-8 md:col-span-8 col-span-10">
                                <div class="py-4 pb-lg-0 text-center">
                                    <div class="mb-3">
                                        <h5 class="font-semibold text-fixed-white op-9">Need a Place to Stay?</h5>
                                    </div>
                                    <p class="landing-banner-heading mb-3 cursor-default">Find Your Perfect Boarding House</p>
                                    <div class="fs-16 mb-5 text-fixed-white op-7">Discover affordable, safe, and comfortable places to stay — all in one platform.</div>
                                    <a href="{{ url('/') }}" class="m-1 ti-btn ti-btn-info-full">
                                        Get Started
                                        <i class="fe fe-arrow-right rtl:rotate-180 ms-2 rtl:ms-0 align-middle"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-2 col-span-1"></div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End::Home Content -->

            <!-- Start:: Section-2 -->
            <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 section-bg" id="features">
                <div class="container text-center position-relative py-3">

                    <!-- OUR STORY -->
                    <p class="text-[0.75rem] font-semibold text-success mb-5">
                        <span class="landing-section-heading">Our Story</span>
                    </p>

                    <div class="landing-title mb-6"></div>

                    <h3 class="font-semibold mb-16">About Us</h3>

                    <!-- WELCOME BOX -->
                    <div class="bg-white dark:bg-bodybg p-6 rounded-lg shadow-md mb-16 mt-10 mx-auto col-xl-7">
                        <p class="text-textmuted fs-15 font-normal leading-relaxed">
                            Welcome to <strong>BHFinder</strong>, your comfortable and affordable home away from home.  
                            We are dedicated to providing safe, clean, and convenient accommodation for students, working professionals, and individuals seeking a peaceful place to stay.  
                            Located in a strategic and accessible area, our boarding house is designed to meet your daily living needs while ensuring comfort and security.
                        </p>
                    </div>

                    <!-- WHAT WE OFFER -->
                    <h3 class="font-semibold mb-16 mt-10">What We Can Offer</h3>

                    <div class="grid grid-cols-12 gap-x-6 justify-center mb-16 mt-10">

                        <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 col-span-12 mb-8">
                            <div class="card bg-white dark:bg-bodybg p-6 rounded-lg shadow-sm">

                                <a href="#" class="text-primary font-semibold block mb-4">Feature Link</a>

                                <h5 class="font-bold mb-3">Easy BH Search</h5>
                                <p class="text-sm text-gray-600 leading-relaxed">
                                    Find available rooms and boarding houses based on location and preference.
                                </p>
                            </div>
                        </div>

                        <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 col-span-12 mb-8">
                            <div class="card bg-white dark:bg-bodybg p-6 rounded-lg shadow-sm">

                                <a href="#" class="text-primary font-semibold block mb-4">Feature Link</a>

                                <h5 class="font-bold mb-3">Direct Connection</h5>
                                <p class="text-sm text-gray-600 leading-relaxed">
                                    Allow tenants to connect with owners quickly and efficiently.
                                </p>
                            </div>
                        </div>

                        <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 col-span-12 mb-8">
                            <div class="card bg-white dark:bg-bodybg p-6 rounded-lg shadow-sm">

                                <a href="#" class="text-primary font-semibold block mb-4">Feature Link</a>

                                <h5 class="font-bold mb-3">Detailed Listings</h5>
                                <p class="text-sm text-gray-600 leading-relaxed">
                                    View photos, descriptions, pricing, and amenities.
                                </p>
                            </div>
                        </div>

                        <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 col-span-12 mb-8">
                            <div class="card bg-white dark:bg-bodybg p-6 rounded-lg shadow-sm">

                                <a href="#" class="text-primary font-semibold block mb-4">Feature Link</a>

                                <h5 class="font-bold mb-3">User-Friendly Interface</h5>
                                <p class="text-sm text-gray-600 leading-relaxed">
                                    Simple design for smooth navigation across all devices.
                                </p>
                            </div>
                        </div>

                    </div>

                    <!-- WHY BHFINDER -->
                    <h3 class="font-semibold mb-10">Why BHFinder?</h3>

                    <div class="mb-16 col-xl-7 mx-auto">
                        <p class="text-textmuted leading-relaxed">
                            BHFinder was created to make it easier for students and workers to find safe and affordable boarding houses without the hassle of walking around or asking around.  
                            Our platform saves time, reduces effort, and improves access to reliable housing information.
                        </p>
                    </div>
                </div>
            </section>
            <!-- End:: Section-5 -->

            <!-- Start:: Section-3 -->
            <section class="section bg-white dark:bg-bodybg text-defaulttextcolor dark:text-defaulttextcolor/70 "
                id="about">
                <div class="container text-center">
                    <p class="text-[0.75rem] font-semibold text-success mb-1"><span class="landing-section-heading">Our
                            Mission</span>
                    </p>
                    <div class="landing-title"></div>
                    <h3 class="font-semibold mb-2"> Our mission is to make work meaningful. </h3>
                    <p class="text-textmuted fs-15 mb-3 font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Ut est dui, rutrum in nulla eu,</p>
                    <div class="grid grid-cols-12 justify-center items-center mx-0">
                        <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12 text-center">
                            <img src="{{ asset('backend/assets/images/authentication/9.png') }}" alt="" class="img-fluid inline-flex">
                        </div>
                        <div
                            class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 col-span-12 pt-5 pb-0 px-lg-2 px-5 text-start">
                            <h4 class="text-lg-start font-medium mb-4">We are a creative agency with a passion for
                                design. </h4>
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 md:col-span-12">
                                    <div class="flex mb-2">
                                        <span>
                                            <i class='bx bxs-badge-check text-primary text-[1.125rem]'></i>
                                        </span>
                                        <div class="ms-2">
                                            <h6 class="font-medium mb-0">Quality & Clean Code </h6>
                                            <p class=" text-textmuted mb-3"> The Valex admin code is maintained very
                                                cleanly and well-structured with proper comments. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-12">
                                    <div class="flex mb-2">
                                        <span>
                                            <i class='bx bxs-badge-check text-primary text-[1.125rem]'></i>
                                        </span>
                                        <div class="ms-2">
                                            <h6 class="font-medium mb-0">Well Documented</h6>
                                            <p class=" text-textmuted mb-3"> The documentation provides clear-cut
                                                material for the Valex admin template. The documentation is explained or
                                                instructed in such a way that every user can understand. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-12">
                                    <div class="flex mb-2">
                                        <span>
                                            <i class='bx bxs-badge-check text-primary text-[1.125rem]'></i>
                                        </span>
                                        <div class="ms-2">
                                            <h6 class="font-medium mb-0">Switch Easily From One Color to Another Color
                                                style</h6>
                                            <p class=" text-textmuted">lorem ipsum, dolor sit var ameto condesetrat
                                                aiatel varen or damsenlel verman code Lorem ipsum, dolor sit amet
                                                consectetur </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-3 -->
             
            <div class="text-center landing-main-footer py-4 opacity-[0.87]">
                <span class="text-[#8c9097] text-[0.9375rem]"> Copyright © <span id="year"></span> <a
                        href="javascript:void(0);" class="!text-primary font-semibold"><u>valex</u></a>.
                    Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"
                        class="!text-primary font-semibold"><u>
                            Group 6</u>
                    </a> All
                    rights
                    reserved
                </span>
            </div>
        </div>
        <!-- End::main-content -->

    </div>

    <!-- Back To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill  text-[1.25rem]"></i></span>
    </div>

    <div id="responsive-overlay"></div>
    <!-- popperjs -->
    <script src="{{ asset('backend/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('backend/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- Swiper JS -->
    <script src="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- sidebar JS -->
    <script src="{{ asset('backend/assets/js/defaultmenu.js') }}"></script>

    <!-- Internal Landing JS -->
    <script src="{{ asset('backend/assets/js/landing.js') }}"></script>

    <!-- Switch JS -->
    <script src="{{ asset('backend/assets/js/switch.js') }}"></script>

    <!-- Preline JS -->
    <script src="{{ asset('backend/assets/libs/preline/preline.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/sticky.js') }}"></script>



</body>

</html>