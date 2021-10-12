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
                        <h1 class="text-white">Update Product Category : {{$data->title}}</h1>
                        @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                            Session::forget('success');
                            @endphp
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-lg-8">
                <form action="{{ url('/ges-admin/category-product', $data->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="text-white" for="TitleSlider">Category Name</label>
                        <input type="text" class="form-control" id="" name="title" value="{{$data->title}}"
                            placeholder="Category Product Name">
                    </div>
                    <div class="form-group">
                        <label for="images">Image Category Product</label>
                        <input type="file" name="images" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="NavigasiTitle">Description Products</label>
                        <textarea class="form-control" rows="10" name="description">{{$data->description}}</textarea>
                    </div>
                    <ul class="list-disc list-inside text-sm text-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="submit" class="btn btn-md btn-warning">Update</button>
                    <a href="{{ url('/ges-admin/delete-category', $data->id) }}"
                        class="btn btn-md btn-danger">Delete</a>
                </form>
            </div>
            <div class="col-lg-4 my-5">
                <img class="mx-auto d-block img-fluid" src="/category-product/{{$data->images}}" alt="{{$data->slugs}}">
            </div>
        </div>
    </div>
</div>
@endsection
