<div class="modal fade" id="editBhModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content p-3">

      <div class="modal-header">
        <h5 class="modal-title">Edit Boarding House</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form method="POST" action="#">
        @csrf
        @method('PUT')

        <div class="modal-body">

            <input type="text" id="edit_name" class="form-control mb-2" placeholder="Name">
            <textarea id="edit_description" class="form-control mb-2" placeholder="Description"></textarea>
            <input type="text" id="edit_location" class="form-control mb-2" placeholder="Location">
            <input type="number" id="edit_price" class="form-control mb-2" placeholder="Price">

        </div>

        <div class="modal-footer">
            <button type="button" class="ti-btn ti-btn-light" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="ti-btn ti-btn-warning">Update</button>
        </div>

      </form>

    </div>
  </div>
</div>