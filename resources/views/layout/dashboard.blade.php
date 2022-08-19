<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Judul --}}
    <title>@yield('title')</title>
    {{-- Style CSS --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dashboard.css')}}">
    {{-- FontAwsome --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fontawesome-free-5.15.3-web/css/all.min.css')}}">
    {{-- Bootstrap CDN --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    {{-- Owl CDN --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <link rel="shortcut icon" href="{{asset('assets/img/pena.png')}}">
</head>
<body>
    <header class="navbar navbar-light sticky-top flex-md-nowrap p-0 shadow-sm">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{url('admin')}}"><img src="{{ asset("assets/img/logokarparrrFIX.png") }}" alt="" style="width: 160px; height: 100%;"></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="w-100 me-1" method="GET" action="{{url('cari')}}">
            <input class="form-control form-control-dark " type="search" placeholder="Cari untuk Berita" aria-label="Search" name="cari">
            <button class="btn visually-hidden" type="submit">Search</button>
        </form>

        <div class="navbar-nav">
            <div class="nav-item bg-light text-nowrap">
                <a class="nav-link p-2 text-secondary" href="{{ route('logout')}}" method="get" role="button" aria-expanded="false"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-4">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a class="sidebar-item nav-link" aria-current="page" href="{{url('admin')}}">
                                <span><i class="fas fa-tachometer-alt"></i></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="sidebar-item nav-link" href="{{url('contents')}}">
                                <span><i class="far fa-newspaper"></i></span>
                                Berita
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="sidebar-item nav-link" href="{{url('photos')}}">
                                <span><i class="far fa-images"></i></span>
                                Media
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="sidebar-item nav-link" href="{{url('ads')}}">
                                <span><i class="far fa-sticky-note"></i></span>
                                Iklan
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="sidebar-item nav-link" href="{{url('user')}}">
                                <span ><i class="fas fa-users"></i></span>
                                Pengguna
                            </a>
                        </li>
                    </ul>
                    <div class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Tutorial</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </div>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">
                            <span data-feather="file-text"></span>
                            Post Data
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">
                            <span data-feather="file-text"></span>
                            Edit Data
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">
                            <span data-feather="file-text"></span>
                            Kelola Data
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">
                            <span data-feather="file-text"></span>
                            Akun
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            {{-- Main Section --}}
            @yield('container')
        </div>
    </div>
    <footer class="footer shadow border-top d-flex justify-content-end bg-light pb-3">
        <section class="col-12 cright-footer-custom">
            <span class="text-end pe-4 pt-3">Build with <i class="fas fa-coffee"></i> Kreasindo Karya Media 2021</span>
        </section>
    </footer> {{-- endFooter --}}
    
    {{-- Bootstrap CDN --}}
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    {{-- CKEditor --}}
    <script src="{{asset('/assets/js/ckeditor/ckeditor.js')}}"></script>

</body>
</html>