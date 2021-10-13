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
                        <h1 class="text-white">Hi, Saldi Sucipto</h1>
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
                            <span class="btn-inner--text">Create New Static Pages</span>
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
                                                href="static-pages/update/{{$item->id}}"><i class="fas fa-cogs"></i>
                                                Settings</a></span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                            <i class="ni ni-collection"></i>
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
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase">Buat Static Pages Baru</h5>
                <button type="tbuton" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('createPages') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="TitleSlider">Title Static Pages</label>
                        <input type="text" class="form-control" id="TitleSlider" name="title"
                            placeholder="Title Static">
                    </div>
                    <div class="form-group">
                        <label for="NavigasiTitle">Description Static Pages</label>
                        <textarea class="wysiwygDeco" rows="20" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="images">Image Static Pages</label>
                        <input type="file" name="images" id="image" class="form-control">
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
