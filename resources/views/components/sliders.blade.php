<section id="featured">
    <!-- slideshow start here -->
    <div class="camera_wrap" id="camera-slide">
        <!-- slide 1 here -->
        @foreach ($slider as $item)
        <div data-src="{{ asset('frontend_assets/img/slides/camera/slide1/img1.jpg') }}">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <h2 class="animated fadeInDown"><strong>{{$item->title}} <span class="colored">GES
                                    </span></strong></h2>
                            <p class="animated fadeInUp">{!! $item->description !!}</p>
                            <a href="/about" class="btn btn-success btn-large animated fadeInUp">
                                <i class="icon-link"></i> Read more
                            </a>
                        </div>
                        <div class="span6">
                            <img src="/sliders/{{$item->image}}" alt="" class="animated bounceInDown delay1" />
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- slideshow end here -->
</section>
