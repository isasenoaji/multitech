  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>Multitechnic</span>-Eng</h2>
                </div>

                <p>World-Wide Wholesales Trader and Specialist Marine Equipment and Service Maintenance from Indonesia.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    {{--<li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>--}}
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  If you want to know about us, please feel free to ask us at  
                </p>
                <div class="footer-contacts">
                  <p><span>Telp/WA:</span> +62 817 0882 459</p>
                  <p><span>Email:</span> hardi.mte@gmail.com</p>
                  <p><span>Working Hours:</span> 7am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Recent Updates</h4>
                <div class="flicker-img">
                  @if(is_null($miniGaleri) or count($miniGaleri)==0)
                    <div style="text-align:center">Nothing there categories!</div>
                  @else
                  @foreach($miniGaleri as $item)
                    <a ><img src="{{ asset($item->direktori) }}" alt=""></a>
                  @endforeach
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Multitechnic-Eng</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              Designed by <a href="https://akfisa.com/">Akfisa Nusantara</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>