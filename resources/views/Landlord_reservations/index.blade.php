@extends('layouts.master')

@section('title')
Reservation Management
@endsection

@section('content')

<style>
    /* APPROVE */
    .btn-approve {
        background: #22c55e; /* light green */
        transition: 0.2s ease;
    }
    .btn-approve:hover {
        background: #15803d; /* darker on hover */
    }

    /* REJECT */
    .btn-reject {
        background: #ef4444; /* light red */
        transition: 0.2s ease;
    }
    .btn-reject:hover {
        background: #b91c1c; /* darker on hover */
    }

    /* DELETE */
    .btn-delete {
        background: #f97316; /* light orange */
        transition: 0.2s ease;
    }
    .btn-delete:hover {
        background: #c2410c; /* darker on hover */
    }
</style>

<div class="main-content">

    <!-- Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]">
        <div>
            <h5 class="page-title text-[1.3rem] font-medium">Reservation Management</h5>
            <p class="text-muted">Approve or reject tenant reservations</p>
        </div>
    </div>

    <!-- TABLE -->
    <div class="box">
        <div class="box-body table-responsive">

            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>Tenant</th>
                        <th>Boarding House</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th width="220">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- PENDING -->
                    <tr>
                        <td>Adrian Cruz</td>
                        <td>Casa Verde Boarding House</td>
                        <td>2026-06-12</td>
                        <td>
                            <span class="badge bg-warning text-dark">Pending</span>
                        </td>

                        <td>
                            <div class="d-flex gap-2 flex-wrap">

                                <button class="ti-btn text-white fw-semibold px-2 py-1 btn-approve">
                                    Approve
                                </button>

                                <button class="ti-btn text-white fw-semibold px-2 py-1 btn-reject">
                                    Reject
                                </button>

                            </div>
                        </td>
                    </tr>

                    <!-- APPROVED -->
                    <tr>
                        <td>Adrian Cruz</td>
                        <td>Sunrise Residences</td>
                        <td>2026-07-01</td>
                        <td>
                            <span class="badge bg-success">Approved</span>
                        </td>

                        <td>
                            <button class="ti-btn text-white fw-semibold px-2 py-1 btn-delete">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <!-- REJECTED -->
                    <tr>
                        <td>Maria Santos</td>
                        <td>Blue Sky Dormitory</td>
                        <td>2026-07-05</td>
                        <td>
                            <span class="badge bg-danger">Rejected</span>
                        </td>

                        <td>
                            <button class="ti-btn text-white fw-semibold px-2 py-1 btn-delete">
                                Delete
                            </button>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection