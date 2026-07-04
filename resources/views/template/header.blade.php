<header>
    <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <nav class="navbar navbar-default">

                        <div class="navbar-header">
                            <button type="button"
                                    class="navbar-toggle collapsed"
                                    data-toggle="collapse"
                                    data-target=".bs-example-navbar-collapse-1"
                                    aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <a class="navbar-brand page-scroll sticky-logo"
                               href="{{ route('landing') }}">
                                <h1><span>Multitechnic</span></h1>
                            </a>
                        </div>

                        @php
                            $isLanding = Route::currentRouteName() == 'landing';

                            $homeLink    = $isLanding ? '#home'      : route('landing').'#home';
                            $aboutLink   = $isLanding ? '#about'     : route('landing').'#about';
                            $productLink = $isLanding ? '#services'  : route('landing').'#services';
                            $contactLink = $isLanding ? '#contact'   : route('landing').'#contact';
                        @endphp

                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1"
                             id="navbar-example">

                            <ul class="nav navbar-nav navbar-right">

                                <li id="nav-home">
                                    <a class="page-scroll" href="{{ $homeLink }}">
                                        Home
                                    </a>
                                </li>

                                <li id="nav-about">
                                    <a class="page-scroll" href="{{ $aboutLink }}">
                                        About
                                    </a>
                                </li>

                                <li id="nav-product">
                                    <a class="page-scroll" href="{{ $productLink }}">
                                        Product
                                    </a>
                                </li>

                                <li id="nav-galeri">
                                    <a href="{{ route('galeri') }}">
                                        Gallery
                                    </a>
                                </li>

                                <li id="nav-blog">
                                    <a href="{{ route('blog') }}">
                                        Blog
                                    </a>
                                </li>

                                <li id="nav-contact">
                                    <a class="page-scroll" href="{{ $contactLink }}">
                                        Contact
                                    </a>
                                </li>

                                @auth
                                    <li id="nav-user">
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Log Out
                                        </a>

                                        <form id="logout-form"
                                              method="POST"
                                              action="{{ route('logout') }}"
                                              style="display:none;">
                                            @csrf
                                        </form>
                                    </li>
                                @endauth

                            </ul>

                        </div>

                    </nav>

                </div>
            </div>
        </div>
    </div>
</header>
