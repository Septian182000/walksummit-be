@extends('layouts.global')

@section('content')
@include('partials.sidebar')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Grup</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Grup</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                </div>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <input type="submit" value="Log Out"
                                class="dropdown-item text-center text-danger text-bold fw-bold">
                        </form>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="card m-2">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h1>List Grup</h1>
                </div>
                <div class="col">
                    <form action="{{ route('grup.index') }}" class="mt-3">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="number" name="id" class="form-control" id="formPencarian"
                                        placeholder="Cari Grup">
                                </div>
                            </div>
                            <div class="col">
                                <button class="btn bg-gradient-info">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card mx-2">
        <div class="card-body">
            @if (request('id'))
            @include('partials.grup.table-search')
            @else
            @include('partials.grup.table')
            @endif
        </div>
    </div>
</main>
@endsection