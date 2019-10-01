@extends('template.index')
@section('main')
@include('template.header')
  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Blog</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Get the Latest Updates About Us</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <script src="{{ asset('js/sweetalert.min.js') }}"></script>
                    @if(session()->has('alert-warning'))
                        <div class="alert alert-warning">
                            {{ session()->get('alert-warning') }}
                        </div>
                    @elseif(session()->has('alert-success'))
                        <script>
                            swal({
                                title: "Berhasil",
                                text: "{{ session()->get('alert-success') }}",
                                icon: "success"
                            })
                        </script>
                    @elseif(session()->has('alert-fail'))
                        <script>
                            swal({
                                title: "Gagal",
                                text: "{{ session()->get('alert-fail') }}",
                                icon: "error"
                            })
                        </script>
                    @elseif(session()->has("alert-info"))
                        <div class="alert alert-info">
                            {{ session()->get('alert-info') }}
                        </div>
                    @endif
            </div>
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
                <h4>recent post</h4>
                <div class="recent-post">
                @if(is_null($recent) or count($recent)==0)
                  <div style="text-align:center">Nothing there recent post!</div>
                @else
                @foreach($recent as $item)
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
												<img src="{{ asset($item->foto) }}" alt="">
											</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#"> {{ $item->judul }}</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                @endforeach
                @endif
                </div>
              </div>
              <!-- recent end -->
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>categories 
                  @if(\Auth::check())
                  <span><button style="float: right;" data-toggle="modal" data-target="#modal-kategori" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add Category</button></span>
                  @endif
                </h4>
                <ul>
                  @if(is_null($kategori) or count($kategori)==0)
                    <div style="text-align:center">Nothing there categories!</div>
                  @else
                  @foreach($kategori as $item)
                  <li>
                    <a>- {{ $item->kategori }}
                    @if(\Auth::check())
                      <div style="float: right;" onclick="return false">
                        <button type="button" 
                          data-toggle="modal"
                          data-target="#modal-editKategori"
                          data-id="{{$item->id}}"
                          data-name="{{$item->kategori}}"
                          data-key="{{$item->key}}"
                          class="btn btn-warning btn-xs"><i class="fa fa-edit"> Edit</i></button>
                        <button type="button" data-id ='{{$item->id }}' class="btn btn-danger btn-xs button_deleteKategori"><i class="fa fa-trash"> Delete</i></button>
                      </div>
                    </a>
                      @endif
                  </li>
                  @endforeach
                  @endif
                </ul>
              </div>
            </div>
        
          </div>
        </div>
        <!-- End left sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-blog start -->
              <article class="blog-post-wrapper">
                <div class="post-thumbnail">
                  <img src="{{ asset($data->foto)}}" alt="" />
                </div>
                <div class="post-information">
                  <h2>{{ $data->judul }}
                    @if(\Auth::check())
                      <div style="float: right;" onclick="return false">
                        <button type="button" 
                          data-toggle="modal"
                          data-target="#modal-editPost"
                          data-id="{{$data->id}}"
                          data-judul="{{$data->judul}}"
                          data-detail="{{$data->detail}}"
                          data-kategori="{{$data->kategori}}"
                          class="btn btn-warning btn-xs"><i class="fa fa-edit"> Edit</i></button>
                        <button type="button" data-id ='{{$data->id }}' class="btn btn-danger btn-xs button_deletePost"><i class="fa fa-trash"> Delete</i></button>
                      </div>
                      @endif
                  </h2>
                  <div class="entry-meta">
                    <span class="author-meta"><i class="fa fa-user"></i> <a>Admin</a></span>
                    <span><i class="fa fa-clock-o"></i>{{ date("d M Y", strtotime($data->tanggal)) }}</span>
                    <span>
                        <i class="fa fa-hashtag"></i><a href="{{route('blog')}}?category={{$data->kategori}}">{{$data->Kategori->kategori}}</a>
                      </span>
                  </div>
                  <div class="entry-content">
                    <p>{{ $data->detail}}</p>
                  </div>
                </div>
              </article>
              <div class="clear"></div>
           <!-- End single blog -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <form id="delete-form" method="post" action="" style="display: none;">
    @csrf
    @method('delete')
  </form>
  @include('blog/editKategoriModal')
  @include('blog/newKategoriModal')
  @include('blog/editPostModal')
  <!-- End Blog Area -->

  <div class="clearfix"></div>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
  <script>
    
    function deletekategori(id){

    }; 

    $('.button_deleteKategori').click(function(e){
        var button = $(this);

        var id = button.data('id');
        var url = "{{route('blog-delete-category',':id')}}";
        e.preventDefault() 
        swal({              
            title: "Are you sure to delete this Category?",
            text: "This action cannot be undone !!",
            icon: "warning",
            buttons: {
                confirm : 'Delete',
                cancel : 'Cancel'
            },
            dangerMode: true,}).then((willDelete)=>{
                if(willDelete){
                  url = url.replace(':id',id);
                  $('#delete-form').attr('action',url).submit();
                  // alert(url);
                    // $(e.target).closest('form').attr('action',url).submit();   
                }
                // else alert('uh');
                }
            );
    });

    $('.button_deletePost').click(function(e){
        var button = $(this);
        var id = button.data('id');
        var url = "{{route('blog-delete-post',':id')}}";

        e.preventDefault() 
        swal({              
            title: "Are you sure to delete this post??",
            text: "This action cannot be undone !!",
            icon: "warning",
            buttons: {
                confirm : 'Delete',
                cancel : 'Cancel'
            },
            dangerMode: true,}).then((willDelete)=>{
                if(willDelete){
                  url = url.replace(':id',id);
                  $('#delete-form').attr('action',url).submit();
                    // $(e.target).closest('form').attr('action',url).submit();   
                };
                }
            );
    });
       
    $(document).ready(function(){
        $("#nav-blog").addClass("active");
        $('#modal-editKategori').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            
            var id = button.data('id');
            var namaKategori = button.data('name');
            var keyKategori = button.data('key');
            
            var modal = $(this);

            modal.find('.modal-body #edt_idC').val(id);
            modal.find('.modal-body #edt_kategori').val(namaKategori);
            modal.find('.modal-body #edt_key').val(keyKategori);
        });

        $('#modal-editPost').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            
            var id = button.data('id');
            var judul = button.data('judul');
            var detail = button.data('detail');
            var kategori = button.data('kategori');
            
            var modal = $(this);

            modal.find('.modal-body #edt_idP').val(id);
            modal.find('.modal-body #edt_kategori').val(kategori);
            modal.find('.modal-body #edt_judul').val(judul);
            modal.find('.modal-body #edt_detail').val(detail);
        });
    });
  </script>

@endsection

