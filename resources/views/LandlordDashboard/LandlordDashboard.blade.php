@extends('layouts.master')

@section('title')
Landlord Dashboard
@endsection

@section('content')

<div class="main-content">

    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium mb-0">Dashboard</h5>
            <p class="text-muted">Manage your boarding houses and reservations</p>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-12 gap-6 mb-6">

        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-12 col-span-12">
            <div class="box p-4 text-white bg-primary rounded-md">
                <p class="mb-1">Total Boarding Houses</p>
                <h3 class="text-2xl font-bold">3</h3>
            </div>
        </div>

        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-12 col-span-12">
            <div class="box p-4 text-white bg-success rounded-md">
                <p class="mb-1">Active Reservations</p>
                <h3 class="text-2xl font-bold">2</h3>
            </div>
        </div>

        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-12 col-span-12">
            <div class="box p-4 text-white bg-warning rounded-md">
                <p class="mb-1">New Messages</p>
                <h3 class="text-2xl font-bold">1</h3>
            </div>
        </div>

    </div>

    <!-- Recent Reservations -->
    <div class="box">
        <div class="box-header">
            <h5 class="box-title">Recent Reservations</h5>
        </div>

        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped align-middle">
                    <thead>
                        <tr>
                            <th>Tenant</th>
                            <th>Boarding House</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Adrian Cruz</td>
                            <td>Casa Verde Boarding House</td>
                            <td>2026-06-12</td>
                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                        </tr>

                        <tr>
                            <td>Adrian Cruz</td>
                            <td>Sunrise Residences</td>
                            <td>2026-07-01</td>
                            <td><span class="badge bg-success">Approved</span></td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>

@endsection