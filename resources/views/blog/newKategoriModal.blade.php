<div class="modal inmodal fade" id="modal-kategori" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h3 class="modal-title">Add New Category</h3>
          </div>
          <form id="tambah-kategori" method="POST" action="{{ route('blog-create-category') }}" class="form-horizontal" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="alert alert-danger hidden" id="alertformk">
                </div>
              @csrf
              <div class="form-group row">
                  <label for="kategori" class="col-sm-3 control-label required">Category Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" required name="kategori" placeholder="Name of Category.." id="kategori">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="kategori" class="col-sm-3 control-label required">Category Key </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" required name="key" placeholder="Tag Key of Category..(only one word without space character)" id="key">
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
              <button type="submit" id="button_addC"  style="margin-bottom:0px" class="btn btn-primary" >Create</button>
            </div>
          </form>

      </div>
  </div>
</div>