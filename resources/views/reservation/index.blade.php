@extends('layouts.master')
@section('title')
    Boarding Hub - Reservation
@endsection
@section('content')
    <div class="main-content">
            <!-- Page Header -->
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
            </div>
            <!-- Page Header Close -->
            <!-- Page Header Close -->

            <div class="xl:col-span-6 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    
                                </div>                                
                            </div>
                            <div class="box-body !p-0">
                                <div class="table-responsive">
                                    <table class="table whitespace-nowrap min-w-full">
                                        <thead>
                                            <tr class="border-b border-defaultborder">
                                                <th scope="col" class="text-start">Tenant</th>
                                                <th scope="col" class="text-start">Boarding House</th>
                                                <th scope="col" class="text-start">Date</th>
                                                <th scope="col" class="text-start">Status</th>
                                                <th scope="col" class="text-start">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b border-defaultborder">
                                                <th scope="row" class="text-start">John Doe</th>
                                                <td>Casa Verde Boarding House</td>
                                                <td>21,Dec 2021</td>
                                                <td><span class="badge bg-outline-warning">Pending</span></td>
                                                <td>
                                                    <button type="button" class="ti-btn ti-btn-ghost-success !rounded-full ti-btn-wave  h-6">Approve</button>
                                                    <button type="button" class="ti-btn ti-btn-ghost-danger !rounded-full ti-btn-wave  h-6">Reject</button>
                                                </td>
                                            </tr>
            
                                            <tr class="border-b border-defaultborder">
                                                <th scope="row" class="text-start">John Doe</th>
                                                <td>Sunrise Residences</td>
                                                <td>30,Nov 2022</td>
                                                <td><span class="badge bg-outline-success">Approved</span></td>
                                            </tr>
                                            <tr class="border-b border-defaultborder">
                                                <th scope="row" class="text-start">John Doe</th>
                                                <td>Green Meadows BH</td>
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