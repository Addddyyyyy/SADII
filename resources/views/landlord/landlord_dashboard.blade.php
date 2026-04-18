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
    <div class="grid grid-cols-12 gap-x-4 mb-6">

        <div class="col-span-4">
            <div class="box text-center">
                <div class="box-body py-4">
                    <p class="text-textmuted text-sm">Total Rooms</p>
                    <h4 class="font-semibold mb-0">
                        <i class="bx bx-home text-primary"></i> 12
                    </h4>
                </div>
            </div>
        </div>

        <div class="col-span-4">
            <div class="box text-center">
                <div class="box-body py-4">
                    <p class="text-textmuted text-sm">Active Reservations</p>
                    <h4 class="font-semibold mb-0">
                        <i class="bx bx-calendar-check text-success"></i> 2
                    </h4>
                </div>
            </div>
        </div>

        <div class="col-span-4">
            <div class="box text-center">
                <div class="box-body py-4">
                    <p class="text-textmuted text-sm">New Messages</p>
                    <h4 class="font-semibold mb-0">
                        <i class="bx bx-message-square-dots text-danger"></i> 3
                    </h4>
                </div>
            </div>
        </div>

    </div>

    {{-- ================= TABLE ================= --}}
    <div class="box custom-box">

        <div class="box-header">
            <div class="box-title">
                Tenant Reservations Table
            </div>
        </div>

        <div class="box-body">
            <div class="table-responsive">

                <table class="table min-w-full border border-gray-400">

                    <thead>
                        <tr class="border-b border-gray-400">
                            <th class="border border-gray-400 px-4 py-2">Tenant</th>
                            <th class="border border-gray-400 px-4 py-2">Boarding House</th>
                            <th class="border border-gray-400 px-4 py-2">Status</th>
                            <th class="border border-gray-400 px-4 py-2">Date Registered</th>
                            <th class="border border-gray-400 px-4 py-2">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        {{-- SAMPLE DATA 1 --}}
                        <tr>
                            <td class="border border-gray-400 px-4 py-2 flex items-center gap-2">
                                <img src="{{ asset('backend/assets/images/faces/1.jpg') }}" class="w-8 h-8 rounded-full">
                                Juan Dela Cruz
                            </td>
                            <td class="border border-gray-400 px-4 py-2">Cozy Haven</td>
                            <td class="border border-gray-400 px-4 py-2">
                                <span class="text-success font-semibold">Active</span>
                            </td>
                            <td class="border border-gray-400 px-4 py-2">10 Apr 2026 10:30 AM</td>
                            <td class="border border-gray-400 px-4 py-2">
                                <div class="flex gap-3">

                                    <a href="#" class="text-blue-500 hover:text-blue-800 transition">
                                        <i class="bx bx-edit text-xl"></i>
                                    </a>

                                    <form method="POST">
                                        <button type="button"
                                            class="text-red-500 hover:text-red-800 transition">
                                            <i class="bx bx-trash text-xl"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>

                        {{-- SAMPLE DATA 2 --}}
                        <tr>
                            <td class="border border-gray-400 px-4 py-2 flex items-center gap-2">
                                <img src="{{ asset('backend/assets/images/faces/2.jpg') }}" class="w-8 h-8 rounded-full">
                                Maria Santos
                            </td>
                            <td class="border border-gray-400 px-4 py-2">Modern Living</td>
                            <td class="border border-gray-400 px-4 py-2">
                                <span class="text-danger font-semibold">Inactive</span>
                            </td>
                            <td class="border border-gray-400 px-4 py-2">08 Apr 2026 02:15 PM</td>
                            <td class="border border-gray-400 px-4 py-2">
                                <div class="flex gap-3">

                                    <a href="#" class="text-blue-500 hover:text-blue-800 transition">
                                        <i class="bx bx-edit text-xl"></i>
                                    </a>

                                    <button class="text-red-500 hover:text-red-800 transition">
                                        <i class="bx bx-trash text-xl"></i>
                                    </button>

                                </div>
                            </td>
                        </tr>

                        {{-- SAMPLE DATA 3 --}}
                        <tr>
                            <td class="border border-gray-400 px-4 py-2 flex items-center gap-2">
                                <img src="{{ asset('backend/assets/images/faces/3.jpg') }}" class="w-8 h-8 rounded-full">
                                John Reyes
                            </td>
                            <td class="border border-gray-400 px-4 py-2">Student House</td>
                            <td class="border border-gray-400 px-4 py-2">
                                <span class="text-success font-semibold">Active</span>
                            </td>
                            <td class="border border-gray-400 px-4 py-2">01 Apr 2026 09:00 AM</td>
                            <td class="border border-gray-400 px-4 py-2">
                                <div class="flex gap-3">

                                    <a href="#" class="text-blue-500 hover:text-blue-800 transition">
                                        <i class="bx bx-edit text-xl"></i>
                                    </a>

                                    <button class="text-red-500 hover:text-red-800 transition">
                                        <i class="bx bx-trash text-xl"></i>
                                    </button>

                                </div>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>
        </div>

    </div>

</div>

{{-- SWEETALERT --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection