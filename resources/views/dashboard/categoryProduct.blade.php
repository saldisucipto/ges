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
                        <h1 class="text-white"> <i class="fas fa-box"></i> Settings Product Category</h1>
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
                        <button class="btn btn-icon btn-secondary" type="button" data-toggle="modal"
                            data-target="#createStaticPages">
                            <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                            <span class="btn-inner--text">Create New Category Product</span>
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
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($data as $item)
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">{{$item->title}}</h5>
                                        <span class="h3 font-weight-bold mb-0"><a
                                                href="/ges-admin/category-product/{{$item->id}}"><i
                                                    class="fas fa-cogs"></i>
                                                Update</a></span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                            {{-- <i class="ni ni-collection"></i> --}}
                                            <img class="img-fluid" src="/category-product/{{$item->images}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="createStaticPages" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase">Buat Category Porduct Baru</h5>
                <button type="tbuton" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('createCategory') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="TitleSlider">Category Nam</label>
                        <input type="text" class="form-control" id="" name="title" placeholder="Category Product Name">
                    </div>
                    <div class="form-group">
                        <label for="images">Image Category Product</label>
                        <input type="file" name="images" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="NavigasiTitle">Description Products</label>
                        <textarea class="form-control" rows="10" name="description"></textarea>
                    </div>
                    <ul class="list-disc list-inside text-sm text-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="submit" class="btn btn-md btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
