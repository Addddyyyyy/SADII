@extends('layouts.master')

@section('title')
Boarding Hub - Tenant Dashboard
@endsection

@section('content')
<div class="main-content">

    {{-- ================= HEADER ================= --}}
    <div class="md:flex block items-center justify-between my-6 page-header-breadcrumb">
        <div>
            <h4 class="mb-0 text-defaulttextcolor font-medium">
                Welcome back, {{ Auth::user()->name ?? 'User' }}! 👋
            </h4>
            <p class="-mt-[0.2rem] mb-0 text-textmuted">
                Here's what's happening in your system.
            </p>
        </div>
    </div>

    {{-- ================= STATS (COMPRESSED) ================= --}}
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

    {{-- ================= TABLE ================= --}}
    <h5 class="mb-4 text-defaulttextcolor font-semibold">Recent Reservations</h5>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b border-defaultborder">
                                                <th scope="row" class="text-start">John Doe</th>
                                                <td>Casa Verde Boarding House</td>
                                                <td>21,Dec 2021</td>
                                                <td><span class="badge bg-outline-warning">Pending</span></td>
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

{{-- SWEETALERT --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection