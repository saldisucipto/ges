@extends('layouts.frontendmaster')
@section('konten')
<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="row">
                    <div class="span12 aligncenter">
                        <h3 class="title text-uppercase">Introduction <strong>{{$data->title}}</strong>
                        </h3>
                        <div class="blankline30"></div>
                        {!! $data->description !!}
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

@endsection
