@extends('layouts.master')
@section('content')
         <!-- Page Header -->
        <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">My Reservation</h5>
                <nav>
                    <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> My Reservation <i
                                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
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
                        <button class="ti-btn ti-btn-primary-full text-white dropdown-toggle !mb-0" type="button"
                            id="dropdownMenuDate" data-bs-toggle="dropdown" aria-expanded="false">
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
       <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                     <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header sm:flex justify-between">
                                    <div class="box-title mb-2 sm:mb-0 ">
                                        Reservation List
                                    </div>
                                    
                                </div>
                                <div class="box-body  !p-0">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap min-w-full">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-left">Boarding House</th>
                                                    <th scope="col"class="text-left">Room Type</th>
                                                    <th scope="col"class="text-left">Room Number</th>
                                                    <th scope="col"class="text-left">Monthly Rate</th>
                                                    <th scope="col" class="text-left">Check-in Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border !border-s-0 !border-e-0 border-inherit border-solid dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-4 flex items-center">
                                                                <span class="avatar !mb-0 avatar-xxl">
                                                                    <img src="../assets/images/ecommerce/01.jpg" class="!rounded-sm" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1 text-[0.875rem] font-medium">
                                                                    <a href="javascript:void(0);">Pagarigan BH</a>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <span class="me-1">Owner:</span><span class="text-[#8c9097]">John Doe</span>
                                                                </div>  
                                                                <div class="mb-1">
                                                                    <span class="me-1">Location:</span><span class="text-[#8c9097]">Roxas St.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript:void(0);" class="text-primary">Bedspace</a></td>
                                                    <td>
                                                        <span class="fs-15 font-medium">201</span>
                                                    </td>
                                                    <td>₱1,300.00</td>
                                                    <td>14 Apr 2026</td>
                                                </tr>
                                                 <tr class="border !border-s-0 !border-e-0 border-inherit border-solid dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-4 flex items-center">
                                                                <span class="avatar !mb-0 avatar-xxl">
                                                                    <img src="../assets/images/ecommerce/01.jpg" class="!rounded-sm" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1 text-[0.875rem] font-medium">
                                                                    <a href="javascript:void(0);">Crocodile BH</a>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <span class="me-1">Owner:</span><span class="text-[#8c9097]">Saldy Co</span>
                                                                </div>  
                                                                <div class="mb-1">
                                                                    <span class="me-1">Location:</span><span class="text-[#8c9097]">USM Ave.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript:void(0);" class="text-primary">Single</a></td>
                                                    <td>
                                                        <span class="fs-15 font-medium">6</span>
                                                    </td>
                                                    <td>₱3,000.00</td>
                                                    <td>26 May 2026</td>
                                                </tr>
                                                <tr class="border !border-s-0 !border-e-0 border-inherit border-solid dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-4 flex items-center">
                                                                <span class="avatar !mb-0 avatar-xxl">
                                                                    <img src="../assets/images/ecommerce/01.jpg" class="!rounded-sm" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1 text-[0.875rem] font-medium">
                                                                    <a href="javascript:void(0);">Yellow BH</a>
                                                                </div>
                                                                <div class="mb-1">
                                                                    <span class="me-1">Owner:</span><span class="text-[#8c9097]">Justin Bieber</span>
                                                                </div>  
                                                                <div class="mb-1">
                                                                    <span class="me-1">Location:</span><span class="text-[#8c9097]">Miracle St.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript:void(0);" class="text-primary">Double</a></td>
                                                    <td>
                                                        <span class="fs-15 font-medium">03</span>
                                                    </td>
                                                    <td>₱2,000.00</td>
                                                    <td>31 Jan 2026</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer border-t-0">
                                    <div class="btn-list float-right">
                                        <button class="ti-btn bg-primary text-white !py-1 !px-2 !font-[500]" onclick="javascript:window.print();"><i class="ri-printer-line me-1 align-middle d-inline-block"></i>Print</button>
                                        <button class="ti-btn bg-secondary text-white !py-1 !px-2 !font-[500]"><i class="ri-share-forward-line me-1 align-middle d-inline-block"></i>Share Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
@endsection