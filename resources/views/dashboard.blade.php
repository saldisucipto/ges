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
                    <x-card-canvas></x-card-canvas>
                    {{-- End Card Stats --}}
                </div>
            </div>
        </div>
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="text-uppercase ls-1 mb-1">PT.GLOBAL ENVIRONMENT SOLUSINDO</h6>
                                    <h5 class="h3 mb-0">Company Settings</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="companyName">Company Name</label>
                                    <input type="text" class="form-control" id="companyName" aria-describedby="emailHelp"
                                        name="company_name" placeholder="PT. ....">
                                </div>
                                <div class="form-group">
                                    <label for="address">Telepphone 1</label>
                                    <input type="text" class="form-control" name="phone" id="phoneNumber">
                                </div>
                                <div class="form-group">
                                    <label for="address">Telepphone 2</label>
                                    <input type="text" class="form-control" name="phone1" id="phoneNumber">
                                </div>
                                <div class="form-group">
                                    <label for="address"> Email </label>
                                    <input type="email" class="form-control" name="email" id="phoneNumber">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" name="address" id="" cols="30" rows="10"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                                    <h5 class="h3 mb-0">Total orders</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Chart -->
                            <div class="chart">
                                <canvas id="chart-bars" class="chart-canvas"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
