@extends('layouts.master')

@section('title')
Boarding House Details
@endsection

@section('content')

<div class="main-content">

    <!-- Header -->
    <div class="page-header-breadcrumb my-6">
        <h4 class="text-defaulttextcolor font-medium">
            Boarding House Details
        </h4>

        <p class="text-textmuted">
            Viewing Boarding House ID: 1
        </p>
    </div>

    <!-- Table Box -->
    <div class="box p-4">

        <div class="flex justify-between items-center mb-4">
            <h4 class="text-lg font-semibold">Reservations</h4>
        </div>

        <div class="overflow-x-auto">

            <table class="w-full border border-gray-200 text-sm">

                <thead class="bg-black-100 text-left">
                    <tr>
                        <th class="border p-3">Tenant Name</th>
                        <th class="border p-3">Room No.</th>
                        <th class="border p-3">Date</th>
                        <th class="border p-3">Status</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- Sample Row 1 -->
                    <tr>
                        <td class="border p-3">Juan Dela Cruz</td>
                        <td class="border p-3">Room 101</td>
                        <td class="border p-3">2026-04-10</td>
                        <td class="border p-3 text-green-600 font-medium">
                            Approved
                        </td>
                    </tr>

                    <!-- Sample Row 2 -->
                    <tr>
                        <td class="border p-3">Maria Santos</td>
                        <td class="border p-3">Room 102</td>
                        <td class="border p-3">2026-04-12</td>
                        <td class="border p-3 text-yellow-600 font-medium">
                            Pending
                        </td>
                    </tr>

                    <!-- Sample Row 3 -->
                    <tr>
                        <td class="border p-3">Pedro Reyes</td>
                        <td class="border p-3">Room 103</td>
                        <td class="border p-3">2026-04-14</td>
                        <td class="border p-3 text-red-600 font-medium">
                            Cancelled
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection