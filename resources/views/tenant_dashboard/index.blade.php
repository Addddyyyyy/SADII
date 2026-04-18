@extends('layouts.master')

@section('title')
    Boarding Hub - Tenant Dashboard
@endsection

@section('content')
   <div class="main-content">

        <div class="md:flex block items-center justify-between my-6 page-header-breadcrumb">
            <div>
                <h4 class="mb-0 text-defaulttextcolor font-medium">Welcome back, {{ Auth::user()->name ?? 'Tenant' }}! 👋</h4>
                <p class="-mt-[0.2rem] mb-0 text-textmuted">Here's what's happening with your account.</p>
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
                        <a href="{{ route('product.details') }}" class="product-image">
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

           

            

            

</div>
 <h5 class="mb-4 text-defaulttextcolor font-semibold">My Reservation Status</h5>
        <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-body !p-0">
                                <div class="table-responsive">
                                    <table class="table whitespace-nowrap min-w-full">
                                        <thead>
                                            <tr class="border-b border-defaultborder">
                                                <th scope="col" class="text-start">Boarding House</th>
                                                <th scope="col" class="text-start">Date</th>
                                                <th scope="col" class="text-start">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b border-defaultborder">
                                                <th scope="row" class="text-start">Casa Verde Boarding House</th>
                                                <td>21,Dec 2021</td>
                                                
                                                <td><span class="badge bg-outline-warning">Pending</span></td>
                                            </tr>
            
                                            <tr class="border-b border-defaultborder">
                                                <th scope="row" class="text-start">Sunrise Residences</th>
                                                <td>30,Nov 2022</td>
                                                
                                                <td><span class="badge bg-outline-success">Approved</span></td>
                                            </tr>
                                            <tr class="border-b border-defaultborder">
                                                <th scope="row" class="text-start">Green Meadows BH</th>
                                                <td>18,Mar 2022</td>
                                                
                                                <td><span class="badge bg-outline-secondary">Rejected</span></td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                            </div>
                        </div>
                    </div>

    </div>
@endsection
