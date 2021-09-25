<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PT. BLOBAL ENVIRONMENT SOLUSINDO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="{{asset('frontend_assets/css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{asset('frontend_assets/css/bootstrap-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('frontend_assets/css/flexslider.css')}}" rel="stylesheet" />
  <link href="{{asset('frontend_assets/css/prettyPhoto.css')}}" rel="stylesheet" />
  <link href="{{asset('frontend_assets/css/camera.css')}}" rel="stylesheet" />
  <link href="{{asset('frontend_assets/css/jquery.bxslider.css')}}" rel="stylesheet" />
  <link href="{{asset('frontend_assets/css/style.css')}}" rel="stylesheet" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- Livewire --}}
        @livewireStyles

  <!-- Theme skin -->
  <link href="{{asset('frontend_assets/color/default.css')}}" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('frontend_assets/ico/apple-touch-icon-144-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('frontend_assets/ico/apple-touch-icon-114-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('frontend_assets/ico/apple-touch-icon-72-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" href="{{asset('frontend_assets/ico/apple-touch-icon-57-precomposed.png')}}" />
  <link rel="shortcut icon" href="{{asset('frontend_assets/ico/favicon.png')}}" />
</head>

<body>
  <div id="wrapper">
    <!-- start header -->
    <header>
    {{-- Navigasi Utama  --}}
      <div class="container pt-5">
        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <a href="index.html"><img src="{{asset('frontend_assets/img/ges.png')}}" alt="" /></a>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="active">
                      <a href="index.html"><i class="icon-home"></i> Home</a>
                    </li>
                    <li class="">
                      <a href="#">Product</a>
                    </li>
                    <li class="">
                        <a href="#">About</a>
                      </li>
                    <li>
                      <a href="#">Contact Us</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
     {{-- End Navigasi Utama --}}
    </header>
    <!-- end header -->

    <!-- section Sliders -->
    <section id="featured">
      <!-- slideshow start here -->
      <div class="camera_wrap" id="camera-slide">
        <!-- slide 1 here -->
        <div data-src="{{asset('frontend_assets/img/slides/camera/slide1/img1.jpg')}}">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <h2 class="animated fadeInDown"><strong>Great template for <span class="colored">multi usage</span></strong></h2>
                  <p class="animated fadeInUp"> Vim porro dicam reprehendunt te, populo quodsi dissentiet cum ad. Ne natum deseruisse vis. Iisque deseruisse sententiae mel ne, dolores appetere vim ut. Sea no tamquam reprimique.</p>
                  <a href="#" class="btn btn-success btn-large animated fadeInUp">
											<i class="icon-link"></i> Read more
										</a>
                  <a href="#" class="btn btn-theme btn-large animated fadeInUp">
											<i class="icon-download"></i> Download
										</a>
                </div>
                <div class="span6">
                  <img src="{{asset('frontend_assets/img/slides/camera/slide1/screen.png')}}" alt="" class="animated bounceInDown delay1" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- slide 2 here -->
        <div data-src="{{asset('frontend_assets/img/slides/camera/slide2/img1.jpg')}}">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <img src="{{asset('frontend_assets/img/slides/camera/slide2/iMac.png')}}" alt="" />
                </div>
                <div class="span6">
                  <h2 class="animated fadeInDown"><strong>Put your <span class="colored">Opt in form</span></strong></h2>
                  <p class="animated fadeInUp"> Vim porro dicam reprehendunt te, populo quodsi dissentiet cum ad. Ne natum deseruisse vis. Iisque deseruisse sententiae mel ne, dolores appetere vim ut. Sea no tamquam reprimique.</p>
                  <form>
                    <div class="input-append">
                      <input class="span3 input-large" type="text">
                      <button class="btn btn-theme btn-large" type="submit">Subscribe</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- slide 3 here -->
        <div data-src="{{asset('frontend_assets/img/slides/camera/slide2/img1.jpg')}}">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span12 aligncenter">
                  <h2 class="animated fadeInDown"><strong><span class="colored">Responsive</span> and <span class="colored">cross broswer</span> compatibility</strong></h2>
                  <p class="animated fadeInUp">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                  <img src="{{asset('frontend_assets/img/slides/camera/slide3/browsers.png')}}" alt="" class="animated bounceInDown delay1" />
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- slideshow end here -->

    </section>
    <!-- /section Sliders -->

    {{-- Under Slider --}}
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span4">
                <div class="box flyLeft">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-star active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4>High <strong>Quality</strong></h4>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>

              <div class="span4">
                <div class="box flyIn">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-dropbox active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4>Rich of <strong>Features</strong></h4>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="box flyRight">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-laptop active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4>Modern <strong>Design</strong></h4>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="span12">
            <div class="solidline"></div>
          </div>
        </div>
      </div>
    </section>
    {{-- End Under Slider --}}

    @yield('konten')


    {{-- Footer --}}
    <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">Our company</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Press release</a></li>
                <li><a href="#">What we have done</a></li>
                <li><a href="#">Our support forum</a></li>
              </ul>

            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Get in touch</h5>
              <address>
							<strong>Eterna company Inc.</strong><br>
							Somestreet 200 VW, Suite Village A.001<br>
							Jakarta 13426 Indonesia
						</address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Subscribe newsletter</h5>
              <p>
                Keep updated for new releases and freebies. Enter your e-mail and subscribe to our newsletter.
              </p>
              <form class="subscribe">
                <div class="input-append">
                  <input class="span2" id="appendedInputButton" type="text">
                  <button class="btn btn-theme" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; Eterna company. All right reserved</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    {{-- End Footer --}}
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{asset('frontend_assets/js/jquery.js')}}"></script>
  <script src="{{asset('frontend_assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('frontend_assets/js/bootstrap.js')}}"></script>

  <script src="{{asset('frontend_assets/js/modernizr.custom.js')}}"></script>
  <script src="{{asset('frontend_assets/js/toucheffects.js')}}"></script>
  <script src="{{asset('frontend_assets/js/google-code-prettify/prettify.js')}}"></script>
  <script src="{{asset('frontend_assets/js/jquery.bxslider.min.js')}}"></script>
  <script src="{{asset('frontend_assets/js/camera/camera.js')}}"></script>
  <script src="{{asset('frontend_assets/js/camera/setting.js')}}"></script>

  <script src="{{asset('frontend_assets/js/jquery.prettyPhoto.js')}}"></script>
  <script src="{{asset('frontend_assets/js/portfolio/jquery.quicksand.js')}}"></script>
  <script src="{{asset('frontend_assets/js/portfolio/setting.js')}}"></script>

  <script src="{{asset('frontend_assets/js/jquery.flexslider.js')}}"></script>
  <script src="{{asset('frontend_assets/js/animate.js')}}"></script>
  <script src="{{asset('frontend_assets/js/inview.js')}}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{asset('frontend_assets/js/custom.js')}}"></script>

  {{-- Livewire --}}
  @livewireScripts

</body>
</html>
