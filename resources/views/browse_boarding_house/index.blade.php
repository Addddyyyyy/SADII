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
                                    <div class="ti-dropdown m-1">
                                        <button type="button"
                                            class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-light !rounded-tr-none !rounded-br-none rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm  -me-[4px] ">
                                         ALL
                                        </button>
                                        <div class="hs-dropdown ti-dropdown [--placement:bottom-left]">
                                            <button id="hs-split-dropdown" type="button"
                                                class="ti-btn !py-1 !px-2 hover:!bg-light  ti-btn-light opacity-[0.85] !rounded-tl-none !rounded-bl-none rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm ti-dropdown-toggle -ms-[4px]  pb-[0.4rem]">
                                                <span class="sr-only">Toggle Dropdown</span>
                                                <i class="ri-arrow-down-s-line align-middle inline-block"
                                                ></i>
                                            </button>
    
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                    else here</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="p-4 border-b dark:border-defaultborder/10">
                                    <p class="font-semibold mb-0  dark:text-white/50">PRICE</p>
                                    <div class="px-2 py-3 pb-0">
                                        <div class="form-check !mb-2">
                                            <input class="form-check-input !align-middle" type="checkbox" value="" id="low">
                                            <label class="form-check-label" for="low">
                                                $0 - $599
                                            </label>
                                            <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">22,873</span>
                                        </div>
                                        <div class="form-check !mb-2">
                                            <input class="form-check-input !align-middle" type="checkbox" value="" id="low1" checked>
                                            <label class="form-check-label" for="low1">
                                                $599 - $1299
                                            </label>
                                            <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">11,345</span>
                                        </div>
                                        <div class="form-check !mb-2">
                                            <input class="form-check-input !align-middle" type="checkbox" value="" id="medium">
                                            <label class="form-check-label" for="medium">
                                                $1,299 - $2,199
                                            </label>
                                            <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">6,987</span>
                                        </div>
                                        <div class="form-check !mb-2">
                                            <input class="form-check-input !align-middle" type="checkbox" value="" id="high">
                                            <label class="form-check-label" for="high">
                                                $2,199 - $3,499
                                            </label>
                                            <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">5,236</span>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input !align-middle" type="checkbox" value="" id="high1">
                                            <label class="form-check-label" for="high1">
                                                $3,499 &amp;Above
                                            </label>
                                            <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">3,735</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 border-b dark:border-defaultborder/10">
                                    <p class="font-semibold mb-0  dark:text-white/50">DISCOUNT</p>
                                    <div class="px-2 py-3 pb-0">
                                        <div class="form-check !mb-2">
                                            <input class="form-check-input !align-middle" type="checkbox" value=""
                                                id="Jimmy-Lolfiger1">
                                            <label class="form-check-label" for="Jimmy-Lolfiger1">
                                                0% - 20%
                                            </label>
                                            <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">16,563</span>
                                        </div>
                                        <div class="form-check !mb-2">
                                            <input class="form-check-input !align-middle" type="checkbox" value="" id="dapzem2">
                                            <label class="form-check-label" for="dapzem2">
                                                20% - 40%
                                            </label>
                                            <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">15,234</span>
                                        </div>
                                        <div class="form-check !mb-2">
                                            <input class="form-check-input !align-middle" type="checkbox" value="" id="denim-winjo">
                                            <label class="form-check-label" for="denim-winjo">
                                                40% - 60%
                                            </label>
                                            <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">6,278</span>
                                        </div>
                                        <div class="form-check !mb-2">
                                            <input class="form-check-input !align-middle" type="checkbox" value=""
                                                id="Louie-Phillippe1" checked>
                                            <label class="form-check-label" for="Louie-Phillippe1">
                                                60% - 80%
                                            </label>
                                            <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">4,531</span>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input !align-middle" type="checkbox" value=""
                                                id="garage-clothing1">
                                            <label class="form-check-label" for="garage-clothing1">
                                                80% - 90%
                                            </label>
                                            <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">2,405</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-9 xl:col-span-8 lg:col-span-8 md:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                  <div class="">
                                    <div class="hs-dropdown ti-dropdown">
                                      <button id="product-feature" type="button" class="ti-btn ti-btn-light hs-dropdown-toggle">
                                          Features
                                          <svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                          </svg>
                                      </button>
                                      <div class="hs-dropdown-menu w-72 hidden z-10  ti-dropdown-menu">
                                          <a class="ti-dropdown-item" href="javascript:void(0);">
                                              Featured
                                          </a>
                                          <a class="ti-dropdown-item" href="javascript:void(0);">
                                              Newest Items
                                          </a>
                                          <a class="ti-dropdown-item" href="javascript:void(0);">
                                              Low To High
                                          </a>
                                          <a class="ti-dropdown-item" href="javascript:void(0);">
                                              High To Low
                                          </a>
                                          <a class="ti-dropdown-item" href="javascript:void(0);">
                                              Relevant
                                          </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box product-card">
                                        <div class="box-body">
                                            <a href="product-details.html" class="product-image">
                                                <img src="storage/images/ponyo.jpg" class="card-img mb-3 rounded-md"
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
                                                1 Whole House<span class="ltr:float-right rtl:float-left text-warning text-xs">4.2<i
                                                        class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                            </p>
                                            <p class="product-description text-[.6875rem] text-textmuted mb-2">Malvar street
                                                </p>
                                            <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                <span>Php 5000<span
                                                        class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">Php 7500</span></span><span
                                                    class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">25%
                                                    off</span>
                                            </p>
                                            <p
                                                class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price Php 5000
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box product-card">
                                        <div class="box-body">
                                            <a href="product-details.html" class="product-image">
                                                <img src="storage/images/ponyo.jpg" class="card-img mb-3 rounded-md"
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
                                                Bed Spacer<span class="ltr:float-right rtl:float-left text-warning text-xs">4.0<i
                                                        class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                            </p>
                                            <p class="product-description text-[.6875rem] text-textmuted mb-2">Miracle Blk 1
                                                </p>
                                            <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                <span>Php 1000<span
                                                        class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">Php 2300</span></span><span
                                                    class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">55%
                                                    off</span>
                                            </p>
                                            <p
                                                class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price Php 1000
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                    <div class="box product-card">
                                        <div class="box-body">
                                            <a href="product-details.html" class="product-image">
                                                <img src="storage/images/ponyo.jpg" class="card-img mb-3 rounded-md"
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
                                                Girls Only<span class="ltr:float-right rtl:float-left text-warning text-xs">4.5<i
                                                        class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                            </p>
                                            <p class="product-description text-[.6875rem] text-textmuted mb-2">Bukang Liwayway St.
                                                </p>
                                            <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                <span>Php 1,000<span
                                                        class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">Php 2,300</span></span><span
                                                    class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">55%
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
                                                <img src="storage/images/ponyo.jpg" class="card-img mb-3 rounded-md"
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
                                               2 Rooms<span class="ltr:float-right rtl:float-left text-warning text-xs">4.2<i
                                                        class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                            </p>
                                            <p class="product-description text-[.6875rem] text-textmuted mb-2">USM Avenue
                                                </p>
                                            <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                <span>Php 1500<span
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
                                                <img src="storage/images/ponyo.jpg" class="card-img mb-3 rounded-md"
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
                                                <img src="storage/images/ponyo.jpg" class="card-img mb-3 rounded-md"
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
                                                <img src="storage/images/ponyo.jpg" class="card-img mb-3 rounded-md"
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
                                                <img src="storage/images/ponyo.jpg" class="card-img mb-3 rounded-md"
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
                                                <img src="storage/images/ponyo.jpg" class="card-img mb-3 rounded-md"
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
                                                <img src="storage/images/ponyo.jpg" class="card-img mb-3 rounded-md"
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
                                                <img src="storage/images/ponyo.jpg" class="card-img mb-3 rounded-md"
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
                                                <img src="storage/images/ponyo.jpg" class="card-img mb-3 rounded-md"
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
