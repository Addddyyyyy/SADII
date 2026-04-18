@extends('layouts.master')

@section('title')
My Boarding Houses
@endsection

@section('content')

<style>
    /* EDIT BUTTON */
    .btn-edit {
        background: #3b82f6; /* light blue */
        transition: 0.2s ease;
    }
    .btn-edit:hover {
        background: #1d4ed8; /* darker on hover */
    }

    /* DELETE BUTTON */
    .btn-delete {
        background: #ef4444; /* light red */
        transition: 0.2s ease;
    }
    .btn-delete:hover {
        background: #b91c1c; /* darker on hover */
    }
</style>

<div class="main-content">

    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]">
        <div>
            <h5 class="page-title text-[1.3rem] font-medium">My Boarding Houses</h5>
            <p class="text-muted">Manage your boarding houses</p>
        </div>

        <button class="ti-btn ti-btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#addBhModal">
            + Add Boarding House
        </button>
    </div>

    <div class="box">
        <div class="box-body table-responsive">

            <table class="table table-striped align-middle">

                <thead class="table-dark">
                    <tr>
                        <th class="text-white">Name</th>
                        <th class="text-white">Location</th>
                        <th class="text-white">Price</th>
                        <th class="text-white">Status</th>
                        <th class="text-white">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Casa Verde Boarding House</td>
                        <td>Cagayan de Oro City</td>
                        <td>₱2,500</td>

                        <td>
                            <select class="form-select form-select-sm">
                                <option selected>Available</option>
                                <option>Occupied</option>
                                <option>Maintenance</option>
                                <option>Unavailable</option>
                            </select>
                        </td>

                        <td>
                            <div class="d-flex gap-2 flex-wrap">

                                <!-- EDIT -->
                                <button class="ti-btn text-white fw-semibold px-2 py-1 btn-edit">
                                    Edit
                                </button>

                                <!-- DELETE -->
                                <button class="ti-btn text-white fw-semibold px-2 py-1 btn-delete">
                                    Delete
                                </button>

                            </div>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>
    </div>

</div>

@include('Landlord_MyboardingHouses.add')
@include('Landlord_MyboardingHouses.edit')

<script>
function editBH(name, location, price, desc) {
    document.getElementById('edit_name').value = name;
    document.getElementById('edit_location').value = location;
    document.getElementById('edit_price').value = price;
    document.getElementById('edit_description').value = desc;
}
</script>

@endsection