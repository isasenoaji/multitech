@extends('template.index')
@section('main')
@include('template.headerLanding')
  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/slider/background-1.jpeg" alt="" title="#slider-direction-1" />
        <img src="img/slider/background-2.jpeg" alt="" title="#slider-direction-2" />
        {{--<img src="img/slider/slider3.jpg" alt="" title="#slider-direction-3" />--}}
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Ship and Marine Spare Part</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">We Provide What Your Company Needs to Grow Up</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">We're In The Business Of Get Quality Business Service</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{--<!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Helping Business Security  & Peace of Mind for Your Family</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      --}}
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>About Multitechnic</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
            	<a href="#">
					<img src="img/about/1.jpg" alt="">
				</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">Multi Technic and Engineering (MTE)</h4>
              </a>
              <p>
              	We Multitechnic and Engineering (MTE) has grown into a leading in the field of trading for ship spare parts, marine diesel engine, marine equipment, ship stores and ships repairing service since We have established in 2009 at Jakarta, Indonesia.  
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Original Product
                </li>
                <li>
                  <i class="fa fa-check"></i> Guaranted Product
                </li>
                <li>
                  <i class="fa fa-check"></i> Maintenance Service
                </li>
                <li>
                  <i class="fa fa-check"></i> World-Wide Wholesales Trader
                </li>
                <li>
                  <i class="fa fa-check"></i> Customer Satisfaction
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Our Product and Services</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                	<a class="services-icon" href="#">
						<i class="fa fa-ship"></i>
					</a>
                  	<h4>Ship Spare Parts</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                	<a class="services-icon" href="#">
						<i class="fa fa-gears"></i>
					</a>
                  <h4>Marine Diesel Engine</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                	<a class="services-icon" href="#">
						<i class="fa fa-gear"></i>
					</a>
                  <h4>Marine Equipment</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                	<a class="services-icon" href="#">
						<i class="fa fa-university"></i>
					</a>
                  <h4>Ship Stores</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                	<a class="services-icon" href="#">
						<i class="fa fa-wrench"></i>
					</a>
                  <h4>Ships Repairing Service</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                 	<a class="services-icon" href="#">
						<i class="fa fa-headphones"></i>
					</a>
                  <h4>24/7 Support</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->
  <!-- Start team Area -->
  <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Owner</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="team-top">
        <div class="col-md-4 col-sm-4 col-xs-12">
        </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
        					<img src="{{ asset('img/team/CEO.jpeg') }}" alt="">
        				</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                    	<a href="#">
          							<i class="fa fa-facebook"></i>
          						</a>
                    </li>
                    <li>
                    	<a href="#">
          							<i class="fa fa-instagram"></i>
          						</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Hardiansyah S.E</h4>
                <p>CEO MTE</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          {{--<div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
        					<img src="img/team/4.jpg" alt="">
        				</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                    	<a href="#">
          							<i class="fa fa-facebook"></i>
          						</a>
                    </li>
                    <li>
                    	<a href="#">
          							<i class="fa fa-instagram"></i>
          						</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Istri Pak Bos</h4>
                <p>Co-CEO MTE</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          --}}
        </div>
      </div>
    </div>
  </div>
  <!-- End Team Area -->

  <!-- Start reviews Area -->
  <div class="reviews-area hidden-xs">
    <div class="work-us">
      <div class="work-left-text">
        <a href="#">
			<img src="img/about/2.jpg" alt="">
		</a>
      </div>
      <div class="work-right-text text-center">
        <h2>Trust Your Company with Us</h2>
        <h5>Specialist in Trading Ships Sparepart, Marine Equipment, Marine Diesel Engine and Trusted Service Maintenance.</h5>
        <a href="#contact" class="ready-btn">Contact us</a>
      </div>
    </div>
  </div>
  <!-- End reviews Area -->

  <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our Gallery</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Gallery -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          	@if(is_null($kategori) or count($kategori)==0)
          	@else
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
                @foreach($kategori as $k)
                <li>
                  <a href="#" data-filter=".{{$k->key}}">{{$k->kategori}}</a>
                </li>
                @endforeach
              </ul>
            </div>
            @endif
          </div>
        </div>
        @if(is_null($galeri) or count($galeri)==0)
        	<div style="text-align:center">Nothing there gallery!</div>
        @else
        <div class="awesome-project-content">
          @foreach($galeri as $item)
          <!-- single-awesome-project start -->
          <div class="col-md-3 col-sm-4 col-xs-12 {{$item->Kategori->key}}">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="{{ asset($item->direktori) }}" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="{{ asset($item->direktori) }}">
                      <h4>{{ $item->judul }}</h4>
                      <span>{{ $item->Kategori->kategori }}</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- single-awesome-project end -->
        </div>
        @endif
        <div class="awesome-menu">
          <center>
            <a class="sus-btn" style="margin: 20px 0px;" href="{{ route('galeri') }}">See More</a>
          </center>
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->
  
  <!-- Start Testimonials -->
  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start testimonials Start -->
            <div class="testimonial-content text-center">
              <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
              <!-- start testimonial carousel -->
              <div class="testimonial-carousel">
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Boby</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br>consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                    </p>
                    <h6>Jhon</h6>
                  </div>
                </div>
                <!-- End single item -->
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->
  <!-- Start Blog Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Latest News</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->
          @if(is_null($blog) or count($blog) == 0)
          <div style="text-align:center">Nothing there latest post!</div>
          @else
          @foreach($blog as $item)
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="">
        					<img src="{{ asset($item->foto) }}" alt="">
        				</a>
              </div>
              <div class="blog-meta">
              	<span class="comments-type">
        					<i class="fa fa-hashtag"></i>
        					<a href="#">{{ $item->Kategori->kategori}}</a>
        				</span>
                <span class="date-type">
        					<i class="fa fa-calendar"></i>{{ $item->tanggal }} / {{ $item->jam }}
        				</span>
              </div>
              <div class="blog-text">
                <h4>
                	<a href="blog.html">{{ $item->judul }}</a>
				        </h4>
                <p>
                  {{ $item->deskripsi }}
                </p>
              </div>
            </div>
            <!-- Start single blog -->
          </div>
          @endforeach
          @endif

          <div class="awesome-menu">
            <center>
              <a class="sus-btn" style="margin: 20px 0px;" href="{{ route('blog') }}">See More</a>
            </center>
          </div>
          <!-- End Left Blog-->
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->
  <!-- Start Suscrive Area -->
  <div class="suscribe-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
          <div class="suscribe-text text-center">
            <h3>Let's be Our Partner Now</h3>
            <a class="sus-btn" href="#">Go</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->
  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Call: +62 817 0882 459<br>
                  <span>Monday-Friday (7am-5pm)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: hardi.mte@gmail.com<br>
                  <span>Web: www.multitechnic.id</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Location: Pramuka Raya Street<br> Kav.150, Room 504<br>
                  <span>Matraman, East Jakarta, Indonesia</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe width="100%" height="380" id="gmap_canvas" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=-6.1927134,106.8665691+(mu)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
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
  <!-- End Contact Area -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.0.min.js"></script>
  <script>
        $(document).ready(function(){
            $("#nav-home").addClass("active");
        });
  </script>

@endsection