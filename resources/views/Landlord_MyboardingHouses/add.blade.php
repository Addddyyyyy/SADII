<div class="modal fade" id="addBhModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content p-3">

      <div class="modal-header">
        <h5 class="modal-title">Add Boarding House</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form method="POST" action="#">
        @csrf

        <div class="modal-body">

            <input type="text" class="form-control mb-2" placeholder="Name">
            <textarea class="form-control mb-2" placeholder="Description"></textarea>
            <input type="text" class="form-control mb-2" placeholder="Location">
            <input type="number" class="form-control mb-2" placeholder="Price">

        </div>

        <div class="modal-footer">
            <button type="button" class="ti-btn ti-btn-light" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="ti-btn ti-btn-primary">Save</button>
        </div>

      </form>

    </div>
  </div>
</div>