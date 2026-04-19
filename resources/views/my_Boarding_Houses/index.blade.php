@extends('layouts.master')
@section('title')
    My Boarding House
@endsection
@section('content')
<div class="main-content">
<!-- Page Header -->
            <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
              <div class="my-auto">
                <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Reservation</h5>
                <nav>
                  <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                        href="javascript:void(0);"> Reservation <i
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
            <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    
                                </div>
                                <div class="prism-toggle">
                                    <a href="{{ route('my_boarding_houses.create') }}" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Add Boarding House
                                        <i class="ri-home-2-line ms-2 inline-block align-middle"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="box-body !p-0">
                                <div class="table-responsive">
                                    <table class="table whitespace-nowrap min-w-full">
                                        <thead>
                                            <tr class="border-b border-defaultborder">
                                                <th scope="col" class="text-start">Name</th>
                                                <th scope="col" class="text-start">Location</th>
                                                <th scope="col" class="text-start">Monthly Rate</th>
                                                <th scope="col" class="text-start">Status</th>
                                                <th scope="col" class="text-start">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b border-defaultborder">
                                                <th scope="row" class="text-start">Casa Verde Boarding House</th>
                                                <td>Miracle St.,Kabacan</td>
                                                <td>₱2,000.00</td>
                                                <td><span class="badge bg-outline-success">Available</span></td>
                                                <td>
                                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-sm ti-btn-info !rounded-full"><i
                                                                class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-sm ti-btn-secondary !rounded-full"><i
                                                                class="ri-eye-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-sm ti-btn-danger !rounded-full"><i
                                                                class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
            
                                            <tr class="border-b border-defaultborder">
                                                <th scope="row" class="text-start">Sunrise Residences</th>
                                                <td>Avenue St.,Kabacan</td>
                                                <td>₱3,000.00</td>
                                                <td><span class="badge bg-outline-success">Available</span></td>
                                                <td>
                                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-sm ti-btn-info !rounded-full"><i
                                                                class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-sm ti-btn-secondary !rounded-full"><i
                                                                class="ri-eye-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-sm ti-btn-danger !rounded-full"><i
                                                                class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-b border-defaultborder">
                                                <th scope="row" class="text-start">Green Meadows BH</th>
                                                <td>Senamar St.,Kabacan</td>
                                                <td>₱2,500.00</td>
                                                <td><span class="badge bg-outline-secondary">Unavailable</span></td>
                                                <td>
                                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-sm ti-btn-info !rounded-full"><i
                                                                class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-sm ti-btn-secondary !rounded-full"><i
                                                                class="ri-eye-off-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-sm ti-btn-danger !rounded-full"><i
                                                                class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
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
