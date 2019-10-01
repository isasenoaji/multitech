<div class="modal inmodal fade" id="modal-form" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h3 class="modal-title">Add New Gallery</h3>
          </div>
          <form id="tambah-post" method="POST" action="{{ route('galeri-create-post') }}" class="form-horizontal" enctype="multipart/form-data">
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
                    <input type="text" class="form-control" required name="judul" placeholder="Title" id="judul">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="kategori" class="col-sm-3 control-label required">Category</label>
                  <div class="col-sm-8">
                    <select name="kategori" id="kategori" class="form-control chosen" required {{ ( is_null($kategori) or count($kategori) ==0 ) ? 'disabled' : '' }}>
                      @foreach($kategori as $item)
                      <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                      @endforeach
                    </select>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="detail" class="col-sm-3 control-label required">Detail</label>
                  <div class="col-sm-8">
                    <textarea type="text" class="form-control" required name="deskripsi" placeholder="Detail Photo" id="detail"></textarea>
                  </div> 
              </div>
              <div class="form-group row">
                  <label for="foto" class="col-sm-3 control-label required">Photo</label>
                  <div class="col-sm-8">
                    <input type="file" name="foto"/ required>
                  </div> 
              </div>
              
            </div>
            <div class="modal-footer">
              <button type="submit" id="button_addP"  style="margin-bottom:0px" class="btn btn-primary" {{ ( is_null($kategori) or count($kategori) ==0 ) ? 'disabled' : '' }}>Create</button>
              <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
            </div>
          </form>

      </div>
  </div>
</div>