@extends('layouts.master')

@section('title')
Landlord Dashboard
@endsection

@section('content')
<div class="main-content">

    <!-- Page Header -->
    <div class="md:flex block items-center justify-between my-6 page-header-breadcrumb">
        <div>
            <h4 class="mb-0 text-defaulttextcolor font-medium">Welcome, Landlord!</h4>
            <p class="-mt-[0.2rem] mb-0 text-textmuted">
                Manage your boarding house listings, rooms, and availability.
            </p>
        </div>

        <div class="main-dashboard-header-right">
            <div>
                <label class="text-[.8125rem] text-textmuted">Total Listings</label>
                <h5 class="mb-0 text-defaulttextcolor font-semibold">12</h5>
            </div>

            <div>
                <label class="text-[.8125rem] text-textmuted">Available Rooms</label>
                <h5 class="mb-0 text-defaulttextcolor font-semibold">34</h5>
            </div>

            <div>
                <label class="text-[.8125rem] text-textmuted">Occupied Rooms</label>
                <h5 class="mb-0 text-defaulttextcolor font-semibold">18</h5>
            </div>
        </div>
    </div>

    <!-- STATS CARDS -->
    <div class="grid grid-cols-12 gap-x-6">

        <!-- Total Listings -->
        <div class="xl:col-span-3 lg:col-span-6 col-span-12">
            <div class="box overflow-hidden bg-primary-gradient !rounded-sm">
                <div class="px-4 pt-4 pb-2">
                    <h6 class="text-fixed-white mb-3 text-[.75rem]">TOTAL ACCOMMODATIONS</h6>
                    <h4 class="text-fixed-white font-bold">12</h4>
                    <p class="text-fixed-white opacity-[0.7] text-[.75rem]">All registered listings</p>
                </div>
            </div>
        </div>

        <!-- Available Rooms -->
        <div class="xl:col-span-3 lg:col-span-6 col-span-12">
            <div class="box overflow-hidden bg-success-gradient !rounded-sm">
                <div class="px-4 pt-4 pb-2">
                    <h6 class="text-fixed-white mb-3 text-[.75rem]">AVAILABLE ROOMS</h6>
                    <h4 class="text-fixed-white font-bold">34</h4>
                    <p class="text-fixed-white opacity-[0.7] text-[.75rem]">Ready for tenants</p>
                </div>
            </div>
        </div>

        <!-- Occupied Rooms -->
        <div class="xl:col-span-3 lg:col-span-6 col-span-12">
            <div class="box overflow-hidden bg-danger-gradient !rounded-sm">
                <div class="px-4 pt-4 pb-2">
                    <h6 class="text-fixed-white mb-3 text-[.75rem]">OCCUPIED ROOMS</h6>
                    <h4 class="text-fixed-white font-bold">18</h4>
                    <p class="text-fixed-white opacity-[0.7] text-[.75rem]">Currently rented</p>
                </div>
            </div>
        </div>

        <!-- Unavailable -->
        <div class="xl:col-span-3 lg:col-span-6 col-span-12">
            <div class="box overflow-hidden bg-warning-gradient !rounded-sm">
                <div class="px-4 pt-4 pb-2">
                    <h6 class="text-fixed-white mb-3 text-[.75rem]">UNAVAILABLE ROOMS</h6>
                    <h4 class="text-fixed-white font-bold">5</h4>
                    <p class="text-fixed-white opacity-[0.7] text-[.75rem]">Under maintenance</p>
                </div>
            </div>
        </div>

    </div>

    <!-- ACTION SECTION -->
    <div class="grid grid-cols-12 gap-x-6 mt-6">

        <!-- Listings Table -->
        <div class="xl:col-span-8 col-span-12">
            <div class="box">
                <div class="box-header flex justify-between">
                    <h4 class="box-title">My Listings</h4>

                    <a href="{{ url('/landlord/accommodation/create') }}"
                       class="ti-btn ti-btn-primary">
                        + Add Accommodation
                    </a>
                </div>

                <div class="box-body overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Rooms</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Sunrise Boarding House</td>
                                <td>Cagayan de Oro</td>
                                <td>12</td>
                                <td><span class="text-success">Active</span></td>
                                <td>
                                    <a href="#" class="text-primary">Edit</a> |
                                    <a href="#" class="text-warning">Rooms</a> |
                                    <a href="#" class="text-danger">Disable</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="xl:col-span-4 col-span-12">
            <div class="box p-4">
                <h4 class="box-title mb-3">Quick Actions</h4>

                <a href="{{ url('/landlord/accommodation/create') }}"
                   class="ti-btn ti-btn-primary w-full mb-2">
                    Add Accommodation
                </a>

                <a href="{{ url('/landlord/rooms') }}"
                   class="ti-btn ti-btn-secondary w-full mb-2">
                    Manage Rooms
                </a>

                <a href="{{ url('/landlord/accommodation') }}"
                   class="ti-btn ti-btn-success w-full">
                    View Listings
                </a>
            </div>
        </div>

    </div>

</div>
@endsection