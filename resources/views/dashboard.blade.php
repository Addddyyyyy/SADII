@extends('layouts.master')

@section('title')
    BHFinder - Tenant Dashboard
@endsection

@section('content')
   <div class="main-content">

        <div class="md:flex block items-center justify-between my-6 page-header-breadcrumb">
            <div>
                <h4 class="mb-0 text-defaulttextcolor font-medium">Welcome back, {{ Auth::user()->name ?? 'Tenant' }}! 👋</h4>
                <p class="-mt-[0.2rem] mb-0 text-textmuted">Here's what's happening with your bookings.</p>
            </div>
        </div>

        {{-- Stats Section --}}
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xxl:col-span-4 md:col-span-6 col-span-12">
                <div class="box">
                    <div class="box-body">
                        <div class="flex">
                            <div>
                                <p class="font-medium mb-1 text-textmuted">Total Boarding Houses</p>
                                <h4 class="mb-0 font-medium">2</h4>
                            </div>
                            <div class="avatar avatar-lg rounded-md ms-auto">
                                <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-primary-gradient"> <i class="ri-home-2-line text-[1.2rem] !text-white"></i> </div>
                            </div>
                        </div>
                        <div class="flex mt-2"> <span class="badge !text-primary !text-xs bg-primary/10 !rounded-full">Boarding Houses </span> <a href="javascript:void(0);" class="text-textmuted ms-auto underline mt-auto">view more</a> </div>
                    </div>
                </div>
            </div>
            <div class="xxl:col-span-4 md:col-span-6 col-span-12">
                <div class="box">
                    <div class="box-body">
                        <div class="flex">
                            <div>
                                <p class="font-medium mb-1 text-textmuted">Active Reservation</p>
                                <h4 class="mb-0 font-medium">3</h4>
                            </div>
                            <div class="avatar avatar-lg rounded-md ms-auto">
                                <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-danger-gradient"> <i class="ri-survey-line text-[1.2rem] !text-white"></i> </div>
                            </div>
                        </div>
                        <div class="flex mt-2"> <span class="badge bg-danger/10 !text-danger !text-xs !rounded-full">Reservation</span> <a href="javascript:void(0);" class="text-textmuted ms-auto underline mt-auto">view more</a> </div>
                    </div>
                </div>
            </div>
            <div class="xxl:col-span-4 md:col-span-6 col-span-12">
                <div class="box">
                    <div class="box-body">
                        <div class="flex">
                            <div>
                                <p class="font-medium mb-1 text-textmuted">New Messages</p>
                                <h4 class="mb-0 font-medium">5</h4>
                            </div>
                            <div class="avatar avatar-lg rounded-md ms-auto">
                                <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-success-gradient"> 
                                    <i class="ri-chat-1-line text-[1.2rem] !text-white"></i> 
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-2"> <span class="badge !text-success !text-xs bg-success/10 !rounded-full">Messages </span> <a href="javascript:void(0);" class="text-textmuted ms-auto underline mt-auto">view more</a> </div>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="mb-4 text-defaulttextcolor font-semibold">Recommended Boarding Houses</h5>

        <div class="grid grid-cols-12 gap-x-6">
            
            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                <div class="box product-card">
                    <div class="box-body">
                        <a href="product-details.html" class="product-image">
                            <img src="{{ asset('backend/assets/images/ecommerce/bh5.jpg') }}" class="card-img mb-3 rounded-md" alt="Cozy Haven">
                        </a>
                        <div class="product-icons">
                            <a aria-label="anchor" href="wish-list.html" class="wishlist"><i class="ri-heart-line"></i></a>
                            <a aria-label="anchor" href="product-cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                            <a aria-label="anchor" href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                        </div>
                        <p class="product-name font-semibold mb-0 flex items-center justify-between">
                            🏠 Cozy Haven Residences <span class="ltr:float-right rtl:float-left text-warning text-xs">4.2<i class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                        </p>
                        <p class="product-description text-[.6875rem] text-textmuted mb-2">Miracle Blk 1</p>
                        <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                            <span>$8,500 <span class="text-textmuted line-through ms-1 inline-block opacity-[0.6] text-xs">$10,000</span></span>
                            <span class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">Available</span>
                        </p>
                        <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                            <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $8,500
                        </p>
                    </div>
                </div>
            </div>

            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                <div class="box product-card">
                    <div class="box-body">
                        <a href="product-details.html" class="product-image">
                            <img src="{{ asset('backend/assets/images/ecommerce/bh3.jpg') }}" class="card-img mb-3 rounded-md" alt="Modern Living">
                        </a>
                        <div class="product-icons">
                            <a aria-label="anchor" href="wish-list.html" class="wishlist"><i class="ri-heart-line"></i></a>
                            <a aria-label="anchor" href="product-cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                            <a aria-label="anchor" href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                        </div>
                        <p class="product-name font-semibold mb-0 flex items-center justify-between">
                            🏘️ Modern Living Space <span class="ltr:float-right rtl:float-left text-warning text-xs">4.5<i class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                        </p>
                        <p class="product-description text-[.6875rem] text-textmuted mb-2">Kayaga</p>
                        <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                            <span>$7,200 <span class="text-textmuted line-through ms-1 inline-block opacity-[0.6] text-xs">$8,500</span></span>
                            <span class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">Available</span>
                        </p>
                        <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                            <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $7,200
                        </p>
                    </div>
                </div>
            </div>

            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                <div class="box product-card">
                    <div class="box-body">
                        <a href="product-details.html" class="product-image">
                            <img src="{{ asset('backend/assets/images/ecommerce/bh1.jpg') }}" class="card-img mb-3 rounded-md" alt="Student House">
                        </a>
                        <div class="product-icons">
                            <a aria-label="anchor" href="wish-list.html" class="wishlist"><i class="ri-heart-line"></i></a>
                            <a aria-label="anchor" href="product-cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                            <a aria-label="anchor" href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                        </div>
                        <p class="product-name font-semibold mb-0 flex items-center justify-between">
                            🏢 Student House <span class="ltr:float-right rtl:float-left text-warning text-xs">4.0<i class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                        </p>
                        <p class="product-description text-[.6875rem] text-textmuted mb-2">USM Avenue</p>
                        <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                            <span>$6,500 <span class="text-textmuted line-through ms-1 inline-block opacity-[0.6] text-xs">$7,000</span></span>
                            <span class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">Available</span>
                        </p>
                        <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                            <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $6,500
                        </p>
                    </div>
                </div>
            </div>

            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                <div class="box product-card">
                    <div class="box-body">
                        <a href="product-details.html" class="product-image">
                            <img src="{{ asset('backend/assets/images/ecommerce/bh2.jpg') }}" class="card-img mb-3 rounded-md" alt="Studio">
                        </a>
                        <div class="product-icons">
                            <a aria-label="anchor" href="wish-list.html" class="wishlist"><i class="ri-heart-line"></i></a>
                            <a aria-label="anchor" href="product-cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                            <a aria-label="anchor" href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                        </div>
                        <p class="product-name font-semibold mb-0 flex items-center justify-between">
                            🏙️ Executive Studio <span class="ltr:float-right rtl:float-left text-warning text-xs">4.8<i class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                        </p>
                        <p class="product-description text-[.6875rem] text-textmuted mb-2">Malvar Street</p>
                        <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                            <span>$12,000 <span class="text-textmuted line-through ms-1 inline-block opacity-[0.6] text-xs">$15,000</span></span>
                            <span class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">Available</span>
                        </p>
                        <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                            <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $12,000
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="grid grid-cols-12 gap-x-6">
            <div class="xl:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Recent Activity</h4>
                    </div>
                    <div class="box-body">
                        <ul class="ti-list-group">
                            <li class="ti-list-group-item flex items-center gap-3">
                                <div class="w-2 h-2 bg-primary rounded-full"></div>
                                <div>
                                    <p class="mb-0 font-semibold">Reservation Confirmed</p>
                                    <p class="mb-0 text-textmuted text-[0.75rem]">Your booking at Modern Living Space is confirmed for March 15, 2026</p>
                                </div>
                            </li>
                            <li class="ti-list-group-item flex items-center gap-3">
                                <div class="w-2 h-2 bg-danger rounded-full"></div>
                                <div>
                                    <p class="mb-0 font-semibold">New Message</p>
                                    <p class="mb-0 text-textmuted text-[0.75rem]">Landlord sent you a message about your inquiry</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
