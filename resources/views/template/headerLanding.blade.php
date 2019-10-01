  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="{{ route('landing') }}">
                  <h1><span>Multitechnic</span></h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li id="nav-home">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li id="nav-about">
                    <a class="page-scroll" href="#about">About</a>
                  </li>
                  <li id="nav-product">
                    <a class="page-scroll" href="#services">Product</a>
                  </li>
                  <li id="nav-galeri">
                    <a class="page-scroll" href="#portfolio">Gallery</a>
                  </li>
                  <li id="nav-blog">
                    <a class="page-scroll" href="#blog">Blog</a>
                  </li>
                  <li id="nav-contact">
                    <a class="page-scroll" href="#contact">Contact</a>
                  </li>
                  @if(\Auth::check())
                  <li id="nav-user">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}"  style="display: none;">
                      @csrf
                    </form>
                  </li>
                  @endif
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->