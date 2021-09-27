<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Our Product </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Your page description here" />
    <meta name="author" content="" />

    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{ asset('frontend_assets/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/bootstrap-responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/flexslider.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/prettyPhoto.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/camera.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/jquery.bxslider.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/style.css') }}" rel="stylesheet" />
    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    {{-- Livewire --}}
    @livewireStyles

    <!-- Theme skin -->
    <link href="{{ asset('frontend_assets/color/default.css') }}" rel="stylesheet" />

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('frontend_assets/ico/apple-touch-icon-144-precomposed.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('frontend_assets/ico/apple-touch-icon-114-precomposed.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('frontend_assets/ico/apple-touch-icon-72-precomposed.png') }}" />
    <link rel="apple-touch-icon-precomposed"
        href="{{ asset('frontend_assets/ico/apple-touch-icon-57-precomposed.png') }}" />
    <link rel="shortcut icon" href="{{ asset('frontend_assets/ico/favicon.png') }}" />
</head>


<body>

    <div id="wrapper">

        <!-- start header -->
        <header>
            {{-- Navigasi Utama --}}
            <div class="container pt-4">
                <div class="row nomargin">
                    {{-- Logo --}}
                    <div class="span4">
                        <div class="span4">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('frontend_assets/img/ges.png') }}" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    {{-- End Logo --}}
                    {{-- Nav Konten --}}
                    <livewire:navigasi />
                    <!-- end navigation -->
                </div>
            </div>
            {{-- End Nav konten --}}
            {{-- End Navigasi Utama --}}
        </header>
        <!-- end header -->

        <section id="inner-headline">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="inner-heading">
                            <h2 class="pt-2">Our Product</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <ul class="team-categ filter">
                            <li class="all active"><a href="#">Category 1</a></li>
                            <li class="design"><a href="#" title="">Category 2</a></li>
                            <li class="marketing"><a href="#" title="">Category 3</a></li>
                            <li class="dev"><a href="#" title="">Category 4</a></li>
                        </ul>

                        <div class="clearfix"></div>
                        <div class="row">
                            <section id="team">
                                <ul id="thumbs" class="team">

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 design" data-id="id-0" data-type="design">
                                        <div class="team-box thumbnail">
                                            <img src="{{asset('frontend_assets/img/product.jpg')}}" alt="" />
                                            <div class="caption">
                                                <h5>Product 1</h5>
                                                <p>
                                                    product info
                                                </p>
                                                <ul class="social-network">
                                                    <li><a href="#" title="Twitter"><i
                                                                class="icon-circled icon-bgdark icon-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Google +"><i
                                                                class="icon-circled icon-bgdark icon-google-plus"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Dribbble"><i
                                                                class="icon-circled icon-bgdark icon-dribbble"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 dev" data-id="id-1" data-type="dev">
                                        <div class="team-box thumbnail">
                                            <img src="{{asset('frontend_assets/img/product.jpg')}}" alt="" />
                                            <div class="caption">
                                                <h5>Product 2</h5>
                                                <p>
                                                    product info
                                                </p>
                                                <ul class="social-network">
                                                    <li><a href="#" title="Twitter"><i
                                                                class="icon-circled icon-bgdark icon-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Google +"><i
                                                                class="icon-circled icon-bgdark icon-google-plus"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Dribbble"><i
                                                                class="icon-circled icon-bgdark icon-dribbble"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 marketing" data-id="id-2" data-type="marketing">
                                        <div class="team-box thumbnail">
                                            <img src="{{asset('frontend_assets/img/product.jpg')}}" alt="" />
                                            <div class="caption">
                                                <h5>Product 3</h5>
                                                <p>
                                                    product info
                                                </p>
                                                <ul class="social-network">
                                                    <li><a href="#" title="Twitter"><i
                                                                class="icon-circled icon-bgdark icon-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Google +"><i
                                                                class="icon-circled icon-bgdark icon-google-plus"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Dribbble"><i
                                                                class="icon-circled icon-bgdark icon-dribbble"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 design" data-id="id-0" data-type="design">
                                        <div class="team-box thumbnail">
                                            <img src="{{asset('frontend_assets/img/product.jpg')}}" alt="" />
                                            <div class="caption">
                                                <h5>Product 4</h5>
                                                <p>
                                                    product info
                                                </p>
                                                <ul class="social-network">
                                                    <li><a href="#" title="Twitter"><i
                                                                class="icon-circled icon-bgdark icon-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Google +"><i
                                                                class="icon-circled icon-bgdark icon-google-plus"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Dribbble"><i
                                                                class="icon-circled icon-bgdark icon-dribbble"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 dev" data-id="id-4" data-type="dev">
                                        <div class="team-box thumbnail">
                                            <img src="{{asset('frontend_assets/img/product.jpg')}}" alt="" />
                                            <div class="caption">
                                                <h5>Product 5</h5>
                                                <p>
                                                    product info
                                                </p>
                                                <ul class="social-network">
                                                    <li><a href="#" title="Twitter"><i
                                                                class="icon-circled icon-bgdark icon-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Google +"><i
                                                                class="icon-circled icon-bgdark icon-google-plus"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Dribbble"><i
                                                                class="icon-circled icon-bgdark icon-dribbble"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 design" data-id="id-5" data-type="design">
                                        <div class="team-box thumbnail">
                                            <img src="{{asset('frontend_assets/img/product.jpg')}}" alt="" />
                                            <div class="caption">
                                                <h5>Product 6</h5>
                                                <p>
                                                    product info
                                                </p>
                                                <ul class="social-network">
                                                    <li><a href="#" title="Twitter"><i
                                                                class="icon-circled icon-bgdark icon-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Google +"><i
                                                                class="icon-circled icon-bgdark icon-google-plus"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Dribbble"><i
                                                                class="icon-circled icon-bgdark icon-dribbble"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Item Project -->

                                    <li class="item-thumbs span3 marketing" data-id="id-0" data-type="marketing">
                                        <div class="team-box thumbnail">
                                            <img src="{{asset('frontend_assets/img/product.jpg')}}" alt="" />
                                            <div class="caption">
                                                <h5>Product 7</h5>
                                                <p>
                                                    product info
                                                </p>
                                                <ul class="social-network">
                                                    <li><a href="#" title="Twitter"><i
                                                                class="icon-circled icon-bgdark icon-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Google +"><i
                                                                class="icon-circled icon-bgdark icon-google-plus"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Dribbble"><i
                                                                class="icon-circled icon-bgdark icon-dribbble"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 design" data-id="id-0" data-type="design">
                                        <div class="team-box thumbnail">
                                            <img src="{{asset('frontend_assets/img/product.jpg')}}" alt="" />
                                            <div class="caption">
                                                <h5>Product 8</h5>
                                                <p>
                                                    product info
                                                </p>
                                                <ul class="social-network">
                                                    <li><a href="#" title="Twitter"><i
                                                                class="icon-circled icon-bgdark icon-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Google +"><i
                                                                class="icon-circled icon-bgdark icon-google-plus"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Dribbble"><i
                                                                class="icon-circled icon-bgdark icon-dribbble"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Item Project -->

                                </ul>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-footer></x-footer>

    </div>
    <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

    <!-- javascript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('frontend_assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/bootstrap.js') }}"></script>

    <script src="{{ asset('frontend_assets/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/toucheffects.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/google-code-prettify/prettify.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/camera/camera.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/camera/setting.js') }}"></script>

    <script src="{{ asset('frontend_assets/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/portfolio/jquery.quicksand.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/portfolio/setting.js') }}"></script>

    <script src="{{ asset('frontend_assets/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/animate.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/inview.js') }}"></script>

    <!-- Template Custom JavaScript File -->
    <script src="{{ asset('frontend_assets/js/custom.js') }}"></script>

    {{-- Livewire --}}
    @livewireScripts

</body>

</html>
