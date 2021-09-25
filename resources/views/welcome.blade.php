@extends('layouts.frontendmaster')


@section('konten')
    {{-- product Section --}}
    <section id="works">
        <div class="container">
          <div class="row">
            <div class="span12">
              <h4 class="title">Recent <strong>Works</strong></h4>
              <div class="row">

                <div class="grid cs-style-4">
                  <div class="span3">
                    <div class="item">
                      <figure>
                        <div><img src="{{asset('frontend_assets/img/dummies/works/1.jpg')}}" alt="" /></div>
                        <figcaption>
                          <div>
                            <span>
                                  <a href="{{asset('frontend_assets/img/dummies/works/big.png')}}" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                                  </span>
                            <span>
                                  <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                                  </span>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="span3">
                    <div class="item">
                      <figure>
                        <div><img src="{{asset('frontend_assets/img/dummies/works/2.jpg')}}" alt="" /></div>
                        <figcaption>
                          <div>
                            <span>
                                  <a href="{{asset('frontend_assets/img/dummies/works/big.png')}}" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                                  </span>
                            <span>
                                  <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                                  </span>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="span3">
                    <div class="item">
                      <figure>
                        <div><img src="{{asset('frontend_assets/img/dummies/works/3.jpg')}}" alt="" /></div>
                        <figcaption>
                          <div>
                            <span>
                                  <a href="{{asset('frontend_assets/img/dummies/works/big.png')}}" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                                  </span>
                            <span>
                                  <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                                  </span>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="span3">
                    <div class="item">
                      <figure>
                        <div><img src="{{asset('frontend_assets/img/dummies/works/4.jpg')}}" alt="" /></div>
                        <figcaption>
                          <div>
                            <span>
                                  <a href="{{asset('frontend_assets/img/dummies/works/big.png')}}" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                                  </span>
                            <span>
                                  <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                                  </span>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      {{-- end product Section --}}
@endsection
