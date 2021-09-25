@extends('layouts.frontendmaster')
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
                    <x-card-canvas></x-card-canvas>
                    {{-- End Card Stats --}}
                </div>
            </div>
        </div>
        {{-- product Section --}}

        {{-- end product Section --}}
    </div>
@endsection
