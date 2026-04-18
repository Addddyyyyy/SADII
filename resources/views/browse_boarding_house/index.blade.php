@extends('layouts.master')
@section('title')
    User Management | Index
@endsection
@section('content')
     <div class="main-content">
                <!-- Page Header -->
                <!-- Page Header -->
                <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                  <div class="my-auto">
                    <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Product</h5>
                    <nav>
                      <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Ecommerce <i
                              class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                          </a> </li>
                        <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                            href="javascript:void(0);">Product 
                          </a> </li>
                      </ol>
                    </nav>
                  </div>

                  <div class="flex xl:my-auto right-content align-items-center">
                    <div class="pe-1 xl:mb-0">
                      <button type="button" class="ti-btn ti-btn-info-full text-white ti-btn-icon me-2 btn-b !mb-0">
                        <i class="mdi mdi-filter-variant"></i>
                      </button>
                    </div>
                    <div class="pe-1 xl:mb-0">
                      <button type="button" class="ti-btn ti-btn-danger-full text-white ti-btn-icon me-2 !mb-0">
                        <i class="mdi mdi-star"></i>
                      </button>
                    </div>
                    <div class="pe-1 xl:mb-0">
                      <button type="button" class="ti-btn ti-btn-warning-full text-white  ti-btn-icon me-2 !mb-0">
                        <i class="mdi mdi-refresh"></i>
                      </button>
                    </div>
                    <div class="xl:mb-0">
                      <div class="hs-dropdown ti-dropdown">
                        <button class="ti-btn ti-btn-primary-full text-white dropdown-toggle !mb-0" type="button" id="dropdownMenuDate"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          14 Aug 2019 <i class="bi bi-chevron-down text-[.6rem] font-semibold"></i>
                        </button>
                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden !z-[100]" aria-labelledby="dropdownMenuDate">
                          <li><a class="ti-dropdown-item" href="javascript:void(0);">2015</a></li>
                          <li><a class="ti-dropdown-item" href="javascript:void(0);">2016</a></li>
                          <li><a class="ti-dropdown-item" href="javascript:void(0);">2017</a></li>
                          <li><a class="ti-dropdown-item" href="javascript:void(0);">2018</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Page Header Close -->
                <!-- Page Header Close -->
                <div>
                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 xl:col-span-4 lg:col-span-4 md:col-span-12 col-span-12">
                            <div class="box products-navigation-card">
                                
                                <div class="p-4 border-b dark:border-defaultborder/10">
                                    <p class="font-semibold mb-0  dark:text-white/50">Location</p>
                                   <div class="ti-btn-group !me-2 my-1 ">
                                    <div class="ti-btn-group !me-2">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-outline-secondary !border-secondary ti-dropdown-toggle"
                                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Select location<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Miracle</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Avenue</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Senamar</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Roxas</a></li>
                                            </ul>
                                        </div>
                                </div>
                                </div>
                                </div>
                                
                                <div class="p-4 border-b dark:border-defaultborder/10">
                                    <p class="font-semibold mb-0  dark:text-white/50">Amenities</p>
                                    <div class="px-2 py-3 pb-0">
                                        <div class="form-check !mb-2">
                                            <input class="form-check-input !align-middle" type="checkbox" value="" id="low">
                                            <label class="form-check-label" for="low">
                                                WiFi
                                            </label>
                                        </div>
                                        <div class="form-check !mb-2">
                                            <input class="form-check-input !align-middle" type="checkbox" value="" id="low1" checked>
                                            <label class="form-check-label" for="low1">
                                                Kitchen
                                            </label>
                                        </div>
                                        <div class="form-check !mb-2">
                                            <input class="form-check-input !align-middle" type="checkbox" value="" id="medium">
                                            <label class="form-check-label" for="medium">
                                                Laundry
                                            </label>
                                        </div>
                                        <div class="form-check !mb-2">
                                            <input class="form-check-input !align-middle" type="checkbox" value="" id="high">
                                            <label class="form-check-label" for="high">
                                                Parking
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input !align-middle" type="checkbox" value="" id="high1">
                                            <label class="form-check-label" for="high1">
                                                CCTV
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="xxl:col-span-9 xl:col-span-8 lg:col-span-8 md:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                  <div class="">
                                    <div class="box-body pb-0 border-b border-defaultborder dark:border-defaultborder/10"> <div class="input-group !mb-0"> <input type="text" class="form-control" placeholder="Searching....."> <button class="ti-btn ripple ti-btn-primary-full !mb-0" type="button">Search</button> </div> 
                        </div>
                                  </div>
                                </div>
                              </div>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
             <div class="box product-card">
                    <div class="box-body">
                        <a href="{{ route('product.details') }}" class="product-image">
                            <img src="{{ asset('backend/assets/images/ecommerce/bh5.jpg') }}" class="card-img mb-3 rounded-md" alt="Cozy Haven">
                        </a>
                        <div class="product-icons">
                            <a aria-label="anchor" href="wish-list.html" class="wishlist"><i class="ri-heart-line"></i></a>
                            <a aria-label="anchor" href="product-cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                            <a aria-label="anchor" href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                        </div>
                        <p class="product-name font-semibold mb-0 flex items-center justify-between">
                        Casa Verde Boarding House<span class="ltr:float-right rtl:float-left text-warning text-xs">4.0<i class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                        </p>
                        <p class="product-description text-[.6875rem] text-textmuted mb-2">Miracle Blk. 1</p>
                        <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                            <span>Owner:<span class="text-textmuted ms-1 inline-block opacity-[0.6] text-xs">Step Cruz</span></span>
                            <span class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">Available</span>
                        </p>
                        <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                            ₱8,500 per/month
                        </p>
                    </div>
                </div>
            </div>
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                <div class="box product-card">
                    <div class="box-body">
                        <a href="{{ route('product.details') }}" class="product-image">
                            <img src="{{ asset('backend/assets/images/ecommerce/bh3.jpg') }}" class="card-img mb-3 rounded-md" alt="Cozy Haven">
                        </a>
                        <div class="product-icons">
                            <a aria-label="anchor" href="wish-list.html" class="wishlist"><i class="ri-heart-line"></i></a>
                            <a aria-label="anchor" href="product-cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                            <a aria-label="anchor" href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                        </div>
                        <p class="product-name font-semibold mb-0 flex items-center justify-between">
                        Sunrise Residences<span class="ltr:float-right rtl:float-left text-warning text-xs">4.2<i class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                        </p>
                        <p class="product-description text-[.6875rem] text-textmuted mb-2">USM Ave.</p>
                        <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                            <span>Owner:<span class="text-textmuted ms-1 inline-block opacity-[0.6] text-xs">Step Cruz</span></span>
                            <span class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">Available</span>
                        </p>
                        <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                            ₱3,500 per/month
                        </p>
                    </div>
                </div>
            </div>
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                <div class="box product-card">
                    <div class="box-body">
                        <a href="{{ route('product.details') }}" class="product-image">
                            <img src="{{ asset('backend/assets/images/ecommerce/bh1.jpg') }}" class="card-img mb-3 rounded-md" alt="Cozy Haven">
                        </a>
                        <div class="product-icons">
                            <a aria-label="anchor" href="wish-list.html" class="wishlist"><i class="ri-heart-line"></i></a>
                            <a aria-label="anchor" href="product-cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                            <a aria-label="anchor" href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                        </div>
                        <p class="product-name font-semibold mb-0 flex items-center justify-between">
                        Green Meadows BH<span class="ltr:float-right rtl:float-left text-warning text-xs">4.4<i class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                        </p>
                        <p class="product-description text-[.6875rem] text-textmuted mb-2">Senamar 1</p>
                        <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                            <span>Owner:<span class="text-textmuted ms-1 inline-block opacity-[0.6] text-xs">Step Cruz</span></span>
                            <span class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">Available</span>
                        </p>
                        <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                            ₱5,500 per/month
                        </p>
                    </div>
                </div>
            </div>
                              <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                <div class="box product-card">
                    <div class="box-body">
                        <a href="{{ route('product.details') }}"class="product-image">
                            <img src="{{ asset('backend/assets/images/ecommerce/bh2.jpg') }}" class="card-img mb-3 rounded-md" alt="Cozy Haven">
                        </a>
                        <div class="product-icons">
                            <a aria-label="anchor" href="wish-list.html" class="wishlist"><i class="ri-heart-line"></i></a>
                            <a aria-label="anchor" href="product-cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                            <a aria-label="anchor" href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                        </div>
                        <p class="product-name font-semibold mb-0 flex items-center justify-between">
                        Blue Haven Dormitory<span class="ltr:float-right rtl:float-left text-warning text-xs">4.5<i class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                        </p>
                        <p class="product-description text-[.6875rem] text-textmuted mb-2">Roxas St.</p>
                        <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                            <span>Owner:<span class="text-textmuted ms-1 inline-block opacity-[0.6] text-xs">Step Cruz</span></span>
                            <span class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">Available</span>
                        </p>
                        <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                            ₱8,500 per/month
                        </p>
                    </div>
                </div>
            </div>
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box product-card">
                                        <div class="box-body">
                                            <a href="product-details.html" class="product-image">
                                                <img src="{{ asset('backend/assets/images/ecommerce/01.jpg') }}" class="card-img mb-3 rounded-md"
                                                    alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a aria-label="anchor" href="wish-list.html" class="wishlist"><i
                                                        class="ri-heart-line"></i></a>
                                                <a aria-label="anchor" href="product-cart.html" class="cart"><i
                                                        class="ri-shopping-cart-line"></i></a>
                                                <a aria-label="anchor" href="product-details.html" class="view"><i
                                                        class="ri-eye-line"></i></a>
                                            </div>
                                            <p
                                                class="product-name font-semibold mb-0 flex items-center justify-between">
                                                Studio Type<span class="ltr:float-right rtl:float-left text-warning text-xs">4.5<i
                                                        class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                            </p>
                                            <p class="product-description text-[.6875rem] text-textmuted mb-2">Osias</p>
                                            <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                <span>Php 1,500<span
                                                        class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">Php 1,999</span></span><span
                                                    class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">20%
                                                    off</span>
                                            </p>
                                            <p
                                                class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price Php 1,199
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box product-card">
                                        <div class="box-body">
                                            <a href="product-details.html" class="product-image">
                                                <img src="{{ asset('backend/assets/images/ecommerce/01.jpg') }}" class="card-img mb-3 rounded-md"
                                                    alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a aria-label="anchor" href="wish-list.html" class="wishlist"><i
                                                        class="ri-heart-line"></i></a>
                                                <a aria-label="anchor" href="product-cart.html" class="cart"><i
                                                        class="ri-shopping-cart-line"></i></a>
                                                <a aria-label="anchor" href="product-details.html" class="view"><i
                                                        class="ri-eye-line"></i></a>
                                            </div>
                                            <p
                                                class="product-name font-semibold mb-0 flex items-center justify-between">
                                                3 Boys Only<span class="ltr:float-right rtl:float-left text-warning text-xs">4.1<i
                                                        class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                            </p>
                                            <p class="product-description text-[.6875rem] text-textmuted mb-2">Roxas Street</p>
                                            <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                <span>Php 1,499<span
                                                        class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">Php 2,499</span></span><span
                                                    class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">38%
                                                    off</span>
                                            </p>
                                            <p
                                                class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price Php 1,499
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box product-card">
                                        <div class="box-body">
                                            <a href="product-details.html" class="product-image">
                                                <img src="{{ asset('backend/assets/images/ecommerce/01.jpg') }}" class="card-img mb-3 rounded-md"
                                                    alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a aria-label="anchor" href="wish-list.html" class="wishlist"><i
                                                        class="ri-heart-line"></i></a>
                                                <a aria-label="anchor" href="product-cart.html" class="cart"><i
                                                        class="ri-shopping-cart-line"></i></a>
                                                <a aria-label="anchor" href="product-details.html" class="view"><i
                                                        class="ri-eye-line"></i></a>
                                            </div>
                                            <p
                                                class="product-name font-semibold mb-0 flex items-center justify-between">
                                                5 Rooms<span class="ltr:float-right rtl:float-left text-warning text-xs">4.4<i
                                                        class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                            </p>
                                            <p class="product-description text-[.6875rem] text-textmuted mb-2">Bonefacio Street</p>
                                            <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                <span>Php 299<span
                                                        class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">Php 399</span></span><span
                                                    class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">35%
                                                    off</span>
                                            </p>
                                            <p
                                                class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price Php 299
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box product-card">
                                        <div class="box-body">
                                            <a href="product-details.html" class="product-image">
                                                <img src="{{ asset('backend/assets/images/ecommerce/01.jpg') }}" class="card-img mb-3 rounded-md"
                                                    alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a aria-label="anchor" href="wish-list.html" class="wishlist"><i
                                                        class="ri-heart-line"></i></a>
                                                <a aria-label="anchor" href="product-cart.html" class="cart"><i
                                                        class="ri-shopping-cart-line"></i></a>
                                                <a aria-label="anchor" href="product-details.html" class="view"><i
                                                        class="ri-eye-line"></i></a>
                                            </div>
                                            <p
                                                class="product-name font-semibold mb-0 flex items-center justify-between">
                                                2 Rooms<span class="ltr:float-right rtl:float-left text-warning text-xs">3.8<i
                                                        class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                            </p>
                                            <p class="product-description text-[.6875rem] text-textmuted mb-2">Kayaga</p>
                                            <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                <span>Php 2,399<span
                                                        class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">Php 5,699</span></span><span
                                                    class="badge bg-primary/10 text-primary ltr:float-right rtl:float-left text-[0.625rem]">72%
                                                    off</span>
                                            </p>
                                            <p
                                                class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price Php 2,399
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box product-card">
                                        <div class="box-body">
                                            <a href="product-details.html" class="product-image">
                                                <img src="{{ asset('backend/assets/images/ecommerce/01.jpg') }}" class="card-img mb-3 rounded-md"
                                                    alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a aria-label="anchor" href="wish-list.html" class="wishlist"><i
                                                        class="ri-heart-line"></i></a>
                                                <a aria-label="anchor" href="product-cart.html" class="cart"><i
                                                        class="ri-shopping-cart-line"></i></a>
                                                <a aria-label="anchor" href="product-details.html" class="view"><i
                                                        class="ri-eye-line"></i></a>
                                            </div>
                                            <p
                                                class="product-name font-semibold mb-0 flex items-center justify-between">
                                                3 Rooms<span class="ltr:float-right rtl:float-left text-warning text-xs">4.0<i
                                                        class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                            </p>
                                            <p class="product-description text-[.6875rem] text-textmuted mb-2">Sunset</p>
                                            <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                <span>Php 1,899<span
                                                        class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">Php 3,299</span></span><span
                                                    class="badge bg-primary/10 text-primary ltr:float-right rtl:float-left text-[0.625rem]">60%
                                                    off</span>
                                            </p>
                                            <p
                                                class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price Php 1,899
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box product-card">
                                        <div class="box-body">
                                            <a href="product-details.html" class="product-image">
                                                <img src="{{ asset('backend/assets/images/ecommerce/01.jpg') }}" class="card-img mb-3 rounded-md"
                                                    alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a aria-label="anchor" href="wish-list.html" class="wishlist"><i
                                                        class="ri-heart-line"></i></a>
                                                <a aria-label="anchor" href="product-cart.html" class="cart"><i
                                                        class="ri-shopping-cart-line"></i></a>
                                                <a aria-label="anchor" href="product-details.html" class="view"><i
                                                        class="ri-eye-line"></i></a>
                                            </div>
                                            <p
                                                class="product-name font-semibold mb-0 flex items-center justify-between">
                                                Denim Corp<span class="ltr:float-right rtl:float-left text-warning text-xs">4.1<i
                                                        class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                            </p>
                                            <p class="product-description text-[.6875rem] text-textmuted mb-2">beautiful
                                                brown colored snow jacket</p>
                                            <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                <span>$2,499<span
                                                        class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">$4,999</span></span><span
                                                    class="badge bg-primary/10 text-primary ltr:float-right rtl:float-left text-[0.625rem]">50%
                                                    off</span>
                                            </p>
                                            <p
                                                class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $2,499
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box product-card">
                                        <div class="box-body">
                                            <a href="product-details.html" class="product-image">
                                                <img src="{{ asset('backend/assets/images/ecommerce/01.jpg') }}" class="card-img mb-3 rounded-md"
                                                    alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a aria-label="anchor" href="wish-list.html" class="wishlist"><i
                                                        class="ri-heart-line"></i></a>
                                                <a aria-label="anchor" href="product-cart.html" class="cart"><i
                                                        class="ri-shopping-cart-line"></i></a>
                                                <a aria-label="anchor" href="product-details.html" class="view"><i
                                                        class="ri-eye-line"></i></a>
                                            </div>
                                            <p
                                                class="product-name font-semibold mb-0 flex items-center justify-between">
                                                Garage &amp;Co<span class="ltr:float-right rtl:float-left text-warning text-xs">4.3<i
                                                        class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                            </p>
                                            <p class="product-description text-[.6875rem] text-textmuted mb-2">Full
                                                sleeve
                                                sweat shirt</p>
                                            <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                <span>$249<span
                                                        class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">$1,299</span></span><span
                                                    class="badge bg-primary/10 text-primary  ltr:float-right rtl:float-left text-[0.625rem]">70%
                                                    off</span>
                                            </p>
                                            <p
                                                class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $249
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box product-card">
                                        <div class="box-body">
                                            <a href="product-details.html" class="product-image">
                                                <img src="{{ asset('backend/assets/images/ecommerce/01.jpg') }}" class="card-img mb-3 rounded-md"
                                                    alt="...">
                                            </a>
                                            <div class="product-icons">
                                                <a aria-label="anchor" href="wish-list.html" class="wishlist"><i
                                                        class="ri-heart-line"></i></a>
                                                <a aria-label="anchor" href="product-cart.html" class="cart"><i
                                                        class="ri-shopping-cart-line"></i></a>
                                                <a aria-label="anchor" href="product-details.html" class="view"><i
                                                        class="ri-eye-line"></i></a>
                                            </div>
                                            <p
                                                class="product-name font-semibold mb-0 flex items-center justify-between">
                                                Blueberry &amp;Co<span class="ltr:float-right rtl:float-left text-warning text-xs">4.0<i
                                                        class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                            </p>
                                            <p class="product-description text-[.6875rem] text-textmuted mb-2">Light
                                                colored
                                                sweater form blueberry</p>
                                            <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                <span>$499<span
                                                        class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">$799</span></span><span
                                                    class="badge bg-primary/10  text-primary ltr:float-right rtl:float-left text-[0.625rem]">32%
                                                    off</span>
                                            </p>
                                            <p
                                                class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $499
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Pagination -->
                <ul class="ti-pagination !px-3 !py-[0.375rem] !text-[1rem] !mb-4 flex justify-end">
                    <li class="page-item disabled">
                        <a class="page-link !px-3 !py-[0.375rem]" href="javascript:void(0);">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link !px-3 !py-[0.375rem]" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link !px-3 !py-[0.375rem]" href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link !px-3 !py-[0.375rem]" href="javascript:void(0);">3</a></li>
                    <li class="page-item">
                        <a class="page-link !px-3 !py-[0.375rem]" href="javascript:void(0);">Next</a>
                    </li>
                </ul>
                <!-- Pagination -->

</div>
@endsection
