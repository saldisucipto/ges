<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us </title>
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
                            <h2 class="pt-2">Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="content">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452"
                width="100%" height="380" frameborder="0" style="border:0" allowfullscreen=""></iframe>

            <div class="container pt-5">
                <div class="row">
                    <div class="span8">
                        <h4>Get in touch with us by filling contact form below</h4>

                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="row">
                                <div class="span4 form-group field">
                                    <input type="text" name="name" id="name" placeholder="Your Name"
                                        data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                    <div class="validation"></div>
                                </div>

                                <div class="span4 form-group">
                                    <input type="email" name="email" id="email" placeholder="Your Email"
                                        data-rule="email" data-msg="Please enter a valid email">
                                    <div class="validation"></div>
                                </div>
                                <div class="span8 form-group">
                                    <input type="text" name="subject" id="subject" placeholder="Subject"
                                        data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                    <div class="validation"></div>
                                </div>
                                <div class="span8 form-group">
                                    <textarea name="message" rows="5" data-rule="required"
                                        data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                    <div class="text-center">
                                        <button class="btn btn-theme btn-medium margintop10" type="submit">Send a
                                            message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="span4">
                        <div class="clearfix"></div>
                        <aside class="right-sidebar">

                            <div class="widget">
                                <h5 class="widgetheading">Contact information<span></span></h5>

                                <ul class="contact-info">
                                    <li><label>Address :</label> Tinggi sekali tower Jl.Kemacetan timur<br> Jakarta
                                        selatan - Indonesia</li>
                                    <li><label>Phone :</label>+62 123 456 78 / +62 123 456 79</li>
                                    <li><label>Fax : </label>+62 123 456 10 / +62 123 456 11</li>
                                    <li><label>Email : </label> info@yourdomain.com</li>
                                </ul>

                            </div>
                        </aside>
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
