@extends('layouts.dashboardmaster')
@section('konten')
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{ asset('frontend_assets/img/ges.png') }}" class="navbar-brand-img" alt="...">
            </a>
        </div>
        {{-- Sidebar --}}
        <x-sidebar-dashboard></x-sidebar-dashboard>
        {{-- End Sidebar --}}
    </div>
</nav>
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-12 col-7 ">
                        <h1 class="text-white"> <i class="fas fa-boxes"></i> Settings Product</h1>
                        @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                            Session::forget('success');
                            @endphp
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-12 col-7 ">
                        <button class="btn btn-icon btn-warning text-white" type="button" data-toggle="modal"
                            data-target="#createStaticPages">
                            <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                            <span class="btn-inner--text">Udate Product {{$data->tittle}} </span>
                        </button>
                    </div>
                </div>
                <!-- Card stats -->
                {{-- End Card Stats --}}
            </div>
        </div>
    </div>
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-lg-8">
                <div class="card p-4">
                    <form action="{{ url('/ges-admin/products-update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="TitleSlider">Product Name</label>
                            <input type="text" class="form-control" id="" name="title" placeholder="Product Name"
                                value="{{$data->tittle}}">
                        </div>
                        <label for="">Select Category Product</label>
                        <select class="form-control" name="id_category">
                            <option>Select Product Category </option>
                            @foreach ($cat as $item)
                            <option value="{{$item->id}}" @if ($item->id === $data->id_category)
                                selected
                                @endif>{{$item->title}}</option>
                            @endforeach
                        </select>
                        <div class="form-group">
                            <label for="images">Image Product</label>
                            <input type="file" name="images" id="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="NavigasiTitle">Description Products</label>
                            <textarea id="wysiwygDeco" class="form-control wysiwygDeco" rows="10"
                                name="description">{!! $data->description !!}</textarea>
                        </div>
                        <ul class="list-disc list-inside text-sm text-danger">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="submit" class="btn btn-md btn-warning">Update</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <img src="/product/{{$data->images}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
