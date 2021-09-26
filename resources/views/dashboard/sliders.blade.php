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
                        <div class="col-lg-6 col-7 ">
                            <h1 class="text-white">Hi, Saldi Sucipto</h1>
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
                        <div class="card-header bg-transparent">
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="text-uppercase text-muted ls-1 mb-1">Sliders</h6>
                                    <h5 class="text-uppercase h3 mb-0">Setting Sliders</h5>
                                </div>
                                <div class="col">
                                    <ul class="nav nav-pills justify-content-end">
                                        <li class="nav-item mr-2 mr-md-0" data-toggle="chart"
                                            data-target="#chart-sales-dark"
                                            data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}"
                                            data-prefix="$" data-suffix="k">
                                            <a href="#" class="nav-link py-2 px-3 active" data-toggle="modal"
                                                data-target="#createSliders">
                                                <span class="d-none d-md-block"><i class="fas fa-plus"></i>&nbsp; Create
                                                    New</span>
                                                <span class="d-md-none"><i class="fas fa-plus"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="table-responsive mt-4">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="name">No</th>
                                                <th scope="col" class="sort" data-sort="budget">Sliders Title
                                                </th>
                                                <th scope="col" class="sort" data-sort="budget">Descriptions
                                                </th>
                                                <th scope="col" class="sort" data-sort="budget">Images
                                                </th>
                                                <th scope="col" class="sort" data-sort="status">Slugs</th>
                                                <th scope="col" class="sort" data-sort="completion">Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            @php
                                                $nomor = 1;
                                            @endphp
                                            @foreach ($data as $item)
                                                <tr>
                                                    <th scope="row">
                                                        <strong>{{ $nomor++ }}</strong>
                                                    </th>
                                                    <td class="budget">
                                                        {{ $item->title }}
                                                    </td>
                                                    <td class="budget text-sm">
                                                        {!! $item->description !!}
                                                    </td>
                                                    <td class="budget">
                                                        <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                            data-target="#image{{ $item->id }}"><i
                                                                class="fas fa-eye"></i>Show
                                                            Image</button>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-dot mr-4">
                                                            <i class="bg-warning"></i>
                                                            <span class="status">/{{ $item->slugs }}</span>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-warning" data-toggle="modal"
                                                            data-target="#updateSlider{{ $item->id }}">Edit</button>
                                                        <button class="btn btn-sm btn-danger" data-toggle="modal"
                                                            data-target="#del{{ $item->id }}">Delete</button>
                                                    </td>
                                                </tr>
                                                {{-- Modal Image --}}
                                                <div class="modal fade" id="image{{ $item->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="image{{ $item->id }}Label"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    {{ $item->title }}</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="/sliders/{{ $item->image }}" alt=""
                                                                    class="img-fluid mx-auto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- End Modal Image --}}
                                                {{-- Update Modal --}}
                                                <div class="modal fade" id="updateSlider{{ $item->id }}"
                                                    tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-warning">
                                                                <h5 class="modal-title text-white">Update Sliders
                                                                    {{ $item->title }}</h5>
                                                                <button type="tbuton" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true"
                                                                        class="text-white">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ url('/ges-admin/sliders/update', $item->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group">
                                                                        <label for="TitleSlider">Title Sliders</label>
                                                                        <input type="text" class="form-control"
                                                                            id="TitleSlider" name="title"
                                                                            value="{{ $item->title }}"
                                                                            placeholder="Home">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="NavigasiTitle">Description
                                                                            Sliders</label>
                                                                        <textarea
                                                                            class="form-control wysiwyg{{ $nomor }}"
                                                                            rows="20"
                                                                            name="description">{!! $item->description !!}</textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="images">Image Slider</label>
                                                                        <input type="file" name="image" id="image"
                                                                            class="form-control">
                                                                    </div>
                                                                    <!-- Validation Errors -->
                                                                    {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
                                                                    <ul class="list-disc list-inside text-sm text-danger">
                                                                        @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                    <button type="submit"
                                                                        class="btn btn-md btn-warning">update</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- End Update Modal --}}
                                                {{-- Modal Delete --}}
                                                <div class="modal fade" id="del{{ $item->id }}" tabindex="-1"
                                                    role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-uppercase"
                                                                    id="exampleModalLabel">Delete
                                                                    {{ $item->title }}</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ url('/ges-admin/sliders/update', $item->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <h2 class="text-center">Are You Sure??</h2>
                                                                        <h3 class="text-center">
                                                                            <span
                                                                                class="text-danger">{{ $item->title }}</span>
                                                                            Will Be Deleted!
                                                                        </h3>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary btn-danger">Yes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <!-- Modal Update -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="createSliders" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Sliders Baru</h5>
                    <button type="tbuton" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('createSliders') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="TitleSlider">Title Sliders</label>
                            <input type="text" class="form-control" id="TitleSlider" name="title" placeholder="Home">
                        </div>
                        <div class="form-group">
                            <label for="NavigasiTitle">Description Sliders</label>
                            <textarea class="form-control wysiwyg" rows="20" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="images">Image Slider</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <!-- Validation Errors -->
                        {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
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
