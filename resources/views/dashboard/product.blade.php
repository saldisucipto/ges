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
                        <button class="btn btn-icon btn-secondary" type="button" data-toggle="modal"
                            data-target="#createStaticPages">
                            <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                            <span class="btn-inner--text">Create New Product</span>
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

                <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Category</th>
                                <th class="" scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($product as $item)
                            <tr>
                                <th scope="row">
                                    {{$no++}}
                                </th>
                                <td>{{$item->tittle}}</td>
                                <td>{{$item->categoryProduct->title}}</td>
                                <td>
                                    <div class="d-flex">
                                        <div class="px-1"><a href="/ges-admin/products-update/{{$item->id}}"
                                                class="btn btn-sm btn-warning ">Edit</a></div>
                                        <div class="px-1"><a href="/ges-admin/products-destory/{{$item->id}}"
                                                class="btn btn-sm btn-danger ">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="createStaticPages" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase">Buat Porduct Baru</h5>
                <button type="tbuton" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('createProduct') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="TitleSlider">Product Name</label>
                        <input type="text" class="form-control" id="" name="title" placeholder="Product Name">
                    </div>
                    <select class="form-control" name="id_category">
                        <option>Select Product Category </option>
                        @foreach ($data as $item)
                        <option value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label for="images">Image Product</label>
                        <input type="file" name="images" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="NavigasiTitle">Description Products</label>
                        <textarea id="wysiwygDeco" class="form-control wysiwygDeco" rows="10"
                            name="description"></textarea>
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
