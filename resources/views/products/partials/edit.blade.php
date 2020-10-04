<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="">
        <div class="col-md-4 col-xs-12">
            <label for="code">Product Code</label>
            <input name="code" type="text" id="code" class="form-control">
        </div>
        <div class="col-md-4 col-xs-12">
            <label for="name">Product Name</label>
            <input name="name" type="text" id="name" class="form-control">
        </div>
        <div class="col-md-4 col-xs-12">
            <label for="price">Product Price</label>
            <input name="price" type="text" id="price" class="form-control">
        </div>
      </form>
    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div>
  </div>
</div>
