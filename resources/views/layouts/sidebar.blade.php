<!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="index.html" class="header-logo">
                <img src="{{ asset('backend/assets/images/bg_logo/navbarlogo.png') }}" alt="logo" class="desktop-logo">
                <img src="{{ asset('backend/assets/images/bg_logo/navbarlogo.png') }}" alt="logo" class="toggle-logo">
                <img src="{{ asset('backend/assets/images/bg_logo/navbarlogo.png') }}" alt="logo" class="desktop-dark">
                <img src="{{ asset('backend/assets/images/bg_logo/navbarlogo.png') }}" alt="logo" class="toggle-dark">
                <img src="{{ asset('backend/assets/images/bg_logo/navbarlogo.png') }}" alt="logo" class="desktop-white">
            </a>
        </div>
        <!-- End::main-sidebar-header -->

        <!-- Start::main-sidebar -->
        <div class="main-sidebar" id="sidebar-scroll">

            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
                <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg></div>
                <ul class="main-menu">
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Menu</span></li>
                    <!-- End::slide__category -->

                    {{-- <li class="slide has-sub"> --}}
                        {{-- <a href="javascript:void(0);" class="side-menu__item"> --}}
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg> --}}
                            {{-- <span class="side-menu__label">Dashboard</span> --}}
                            {{-- <i class="fe fe-chevron-right side-menu__angle"></i> --}}
                        {{-- </a> --}}
                        {{-- <ul class="slide-menu child1"> --}}
                            {{-- <li class="slide side-menu__label1"> --}}
                                {{-- <a href="javascript:void(0);">Dashboard</a> --}}
                            {{-- </li> --}}
                            {{-- <li class="slide"> --}}
                                {{-- <a href="{{ route('dashboard') }}" class="side-menu__item">Tenant</a> --}}
                            {{-- </li> --}}
                        {{-- </ul> --}}
                    {{-- </li> --}}

                    <!-- <li class="slide">
                        <a href="index.html" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>
                            <span class="side-menu__label">Index</span><span class="badge bg-success ms-auto text-left menu-badge !text-white">1</span>
                        </a>
                    </li> -->
                    <!-- Start::slide__category -->
                    {{-- <li class="slide__category"><span class="category-name">General</span></li> --}}
                    <!-- End::slide__category -->

                    <!-- Start::slide -->

                    {{-- <li class="slide"> 
                        <a href="{{ route('users.index') }}" class="side-menu__item">
                            <svg class="side-menu__icon"  viewBox="0 0 24 24"><path d="M2 22C2 17.5817 5.58172 14 10 14C14.4183 14 18 17.5817 18 22H16C16 18.6863 13.3137 16 10 16C6.68629 16 4 18.6863 4 22H2ZM10 13C6.685 13 4 10.315 4 7C4 3.685 6.685 1 10 1C13.315 1 16 3.685 16 7C16 10.315 13.315 13 10 13ZM10 11C12.21 11 14 9.21 14 7C14 4.79 12.21 3 10 3C7.79 3 6 4.79 6 7C6 9.21 7.79 11 10 11ZM18.2837 14.7028C21.0644 15.9561 23 18.752 23 22H21C21 19.564 19.5483 17.4671 17.4628 16.5271L18.2837 14.7028ZM17.5962 3.41321C19.5944 4.23703 21 6.20361 21 8.5C21 11.3702 18.8042 13.7252 16 13.9776V11.9646C17.6967 11.7222 19 10.264 19 8.5C19 7.11935 18.2016 5.92603 17.041 5.35635L17.5962 3.41321Z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M2 22C2 17.5817 5.58172 14 10 14C14.4183 14 18 17.5817 18 22H16C16 18.6863 13.3137 16 10 16C6.68629 16 4 18.6863 4 22H2ZM10 13C6.685 13 4 10.315 4 7C4 3.685 6.685 1 10 1C13.315 1 16 3.685 16 7C16 10.315 13.315 13 10 13ZM10 11C12.21 11 14 9.21 14 7C14 4.79 12.21 3 10 3C7.79 3 6 4.79 6 7C6 9.21 7.79 11 10 11ZM18.2837 14.7028C21.0644 15.9561 23 18.752 23 22H21C21 19.564 19.5483 17.4671 17.4628 16.5271L18.2837 14.7028ZM17.5962 3.41321C19.5944 4.23703 21 6.20361 21 8.5C21 11.3702 18.8042 13.7252 16 13.9776V11.9646C17.6967 11.7222 19 10.264 19 8.5C19 7.11935 18.2016 5.92603 17.041 5.35635L17.5962 3.41321Z"/></svg>
                            <span class="side-menu__label">User Management</span>
                        </a>
                    </li>--}}
                    <!-- Start::slide -->                                                                                             
                    @if(Auth::user()->role === 'landlord')
                    <li class="slide">
                        <a href="{{ route('landlord_dashboard.index') }}" class="side-menu__item">
                            <svg class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
                            </svg>
                            <span class="side-menu__label">Dashboard</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('my_boarding_houses.index') }}" class="side-menu__item">
                            <svg class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M19 21H5C4.44772 21 4 20.5523 4 20V11L1 11L11.3273 1.6115C11.7087 1.26475 12.2913 1.26475 12.6727 1.6115L23 11L20 11V20C20 20.5523 19.5523 21 19 21ZM6 19H18V9.15745L12 3.7029L6 9.15745V19Z"></path>
                            </svg>
                            <span class="side-menu__label">My Boarding House</span>
                        </a>
                    </li>                     
                    <li class="slide">
                            <a href="{{ route('reservation.index') }}" class="side-menu__item">
                                
                                <svg class="side-menu__icon" viewBox="0 0 24 24">
                                    <path d="M17 2V4H20.0066C20.5552 4 21 4.44495 21 4.9934V21.0066C21 21.5552 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5551 3 21.0066V4.9934C3 4.44476 3.44495 4 3.9934 4H7V2H17ZM7 6H5V20H19V6H17V8H7V6ZM9 16V18H7V16H9ZM9 13V15H7V13H9ZM9 10V12H7V10H9ZM15 4H9V6H15V4Z"></path>
                                </svg>
                                <span class="side-menu__label">Reservation</span>
                            </a>
                        </li>
                    @endif
                    @if(Auth::user()->role === 'tenant')
                    <li class="slide">
                        <a href="{{ route('tenant_dashboard.index') }}" class="side-menu__item">
                            <svg class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
                            </svg>
                            <span class="side-menu__label">Dashboard</span>
                        </a>                    
                    </li>   
                    <li class="slide">
                        <a href="{{ route('browse_boarding_house.index') }}" class="side-menu__item">
                            <svg class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M15.5 5C13.567 5 12 6.567 12 8.5C12 10.433 13.567 12 15.5 12C17.433 12 19 10.433 19 8.5C19 6.567 17.433 5 15.5 5ZM10 8.5C10 5.46243 12.4624 3 15.5 3C18.5376 3 21 5.46243 21 8.5C21 9.6575 20.6424 10.7315 20.0317 11.6175L22.7071 14.2929L21.2929 15.7071L18.6175 13.0317C17.7315 13.6424 16.6575 14 15.5 14C12.4624 14 10 11.5376 10 8.5ZM3 4H8V6H3V4ZM3 11H8V13H3V11ZM21 18V20H3V18H21Z"></path>
                            </svg>
                            <span class="side-menu__label">Browse Boarding Houses</span>
                        </a>
                    </li>
                        <li class="slide">
                            <a href="{{ route('myreservation.index') }}" class="side-menu__item">
                                
                                <svg class="side-menu__icon" viewBox="0 0 24 24">
                                    <path d="M17 2V4H20.0066C20.5552 4 21 4.44495 21 4.9934V21.0066C21 21.5552 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5551 3 21.0066V4.9934C3 4.44476 3.44495 4 3.9934 4H7V2H17ZM7 6H5V20H19V6H17V8H7V6ZM9 16V18H7V16H9ZM9 13V15H7V13H9ZM9 10V12H7V10H9ZM15 4H9V6H15V4Z"></path>
                                </svg>
                                <span class="side-menu__label">My Reservation</span>
                            </a>
                        </li>
                    @endif
                        <li class="slide">
                        <a href="{{ route('chat.index') }}" class="side-menu__item">
                            <svg class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M10 3H14C18.4183 3 22 6.58172 22 11C22 15.4183 18.4183 19 14 19V22.5C9 20.5 2 17.5 2 11C2 6.58172 5.58172 3 10 3ZM12 17H14C17.3137 17 20 14.3137 20 11C20 7.68629 17.3137 5 14 5H10C6.68629 5 4 7.68629 4 11C4 14.61 6.46208 16.9656 12 19.4798V17Z"></path>
                            </svg>
                            <span class="side-menu__label">Messages</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="{{ route('myprofile.index') }}" class="side-menu__item">
                            <svg class="side-menu__icon" viewBox="0 0 24 24">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </svg>
                            <span class="side-menu__label">My Profile</span>
                        </a>
                        </li>
                    <!-- End::slide --> 

                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
            </nav>
            <!-- End::nav -->

        </div>
        <!-- End::main-sidebar -->
