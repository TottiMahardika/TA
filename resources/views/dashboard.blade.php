@extends('layout.main')

@section('title', 'Dashboard')

@section('content')

    <h1>Welcome, {{Auth::user()->username}}</h1>

    <div class="row my-5">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 my-5 mx-auto">
            <div class="card border-left-primary shadow h-100 py-4">
                <a href="/books" class="card-body text-decoration-none">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bolder text-primary text-uppercase mb-1">
                                Books</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$book_count}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 my-5 mx-auto">
            <div class="card border-left-success shadow h-100 py-4">
                <a href="/books" class="card-body text-decoration-none category">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bolder text-success text-uppercase mb-1">
                                Categories</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$category_count}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 my-5 mx-auto">
            <div class="card border-left-info shadow h-100 py-4">
                <a href="/users" class="card-body text-decoration-none users">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="col mr-2">
                                <div class="text-xs fw-bolder text-danger text-uppercase mb-1">
                                    Users</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$user_count}}</div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    <div class="mt-5">
        
        <h3 class="text-center mb-2">Riwayat Peminjaman</h3>
        <x-rent-log-table :rentlog='$rent_logs' />
    </div>
    
@endsection