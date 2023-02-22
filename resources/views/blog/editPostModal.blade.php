<div class="modal inmodal fade" id="modal-editPost" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h3 class="modal-title">Edit Post</h3>
          </div>
          <form id="tambah-post" method="POST" action="{{ route('blog-edit-post') }}" class="form-horizontal" enctype="multipart/form-data">
            <div class="modal-body">
              @if(count($kategori) == 0)
                <div class="alert alert-danger" id="alertformP">
                  Nothing there's Category Available!!
                </div>
              @endif
              @csrf
              <div class="form-group row">
                  <label for="judul" class="col-sm-3 control-label required">Title</label>
                  <div class="col-sm-8">
                    <input type="hidden" name="id" id="edt_idP">
                    <input type="text" class="form-control" required name="judul" placeholder="Title" id="edt_judul">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="kategori" class="col-sm-3 control-label required">Category</label>
                  <div class="col-sm-8">
                    <select name="kategori" id="edt_kategori" class="form-control chosen" required {{ ( is_null($kategori) or count($kategori) ==0 ) ? 'disabled' : '' }}>
                      @foreach($kategori as $item)
                      <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                      @endforeach
                    </select>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="detail" class="col-sm-3 control-label required">Detail</label>
                  <div class="col-sm-8">
                    <textarea type="text" class="form-control" required name="detail" placeholder="Detail post" id="edt_detail" rows="20"></textarea>
                  </div> 
              </div>
              <div class="form-group row">
                  <label for="foto" class="col-sm-3 control-label required">Photo</label>
                  <div class="col-sm-8">
                    <input type="file" name="foto" class="form-control" required>
                  </div> 
              </div>
              
            </div>
            <div class="modal-footer">
              <button type="submit" id="button_editP"  style="margin-bottom:0px" class="btn btn-warning" {{ ( is_null($kategori) or count($kategori) ==0 ) ? 'disabled' : '' }}>Edit</button>
              <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
            </div>
          </form>

      </div>
  </div>
</div>