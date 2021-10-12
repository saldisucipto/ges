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
                        <div class="logo">
                            <a href="/"><img src="{{ asset('frontend_assets/img/ges.png') }}" alt="" /></a>
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

        <!-- section Sliders -->
        <x-sliders></x-sliders>
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
                                            Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea
                                            facilisis.
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
                                            Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea
                                            facilisis.
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
                                        <h4>Modern <strong>Services</strong></h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea
                                            facilisis.
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
        <x-footer></x-footer>
        {{-- End Footer --}}
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
