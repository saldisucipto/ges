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
                <div class="col-lg-7">
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
                                    <h6 class="text-uppercase text-muted ls-1 mb-1">Navigasi</h6>
                                    <h5 class="text-uppercase h3 mb-0">Setting Navigasi</h5>
                                </div>
                                <div class="col">
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col" class="sort" data-sort="name">No</th>
                                                    <th scope="col" class="sort" data-sort="budget">Navigasi Name
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
                                                @foreach ($nav as $item)
                                                    <tr>
                                                        <th scope="row">
                                                            <strong>{{ $nomor++ }}</strong>
                                                        </th>
                                                        <td class="budget">
                                                            {{ $item->title }}
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-dot mr-4">
                                                                <i class="bg-warning"></i>
                                                                <span class="status">/{{ $item->slugs }}</span>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sm btn-warning" data-toggle="modal"
                                                                data-target="#update{{ $item->id }}">Edit</button>
                                                            <button class="btn btn-sm btn-danger" data-toggle="modal"
                                                                data-target="#del{{ $item->id }}">Delete</button>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal Update -->
                                                    <div class="modal fade" id="update{{ $item->id }}" tabindex="-1"
                                                        role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit
                                                                        {{ $item->title }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form
                                                                        action="{{ url('/ges-admin/navigasi', $item->id) }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <label for="NavigasiTitle">Navigasi Name</label>
                                                                            <input type="text"
                                                                                class="form-control form-control-sm"
                                                                                id="NavigasiTitle" name="title"
                                                                                value="{{ $item->title }}">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary btn-warning">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                                        action="{{ url('/ges-admin/navigasi', $item->id) }}"
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
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
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
                                    <h5 class="text-uppercase h3 mb-0">Create New Navigasi</h5>
                                </div>
                            </div>
                            <div class="row bg-transparent">
                                <div class="card-body">
                                    <form action="{{ route('createNavigasi') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="NavigasiTitle">Navigasi</label>
                                            <input type="text" class="form-control form-control-sm" id="NavigasiTitle"
                                                name="title" placeholder="Home">
                                        </div>
                                        <!-- Validation Errors -->
                                        {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
                                        <ul class=" list-disc list-inside text-sm text-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
