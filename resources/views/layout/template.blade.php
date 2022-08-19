<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Judul --}}
    <title>@yield('title')</title>
    {{-- Style CSS --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-custom.css')}}">
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
    {{-- Main --}}
    <main class="main-content">
            {{-- Header --}}
    <header class="main-header sticky-top">
        @include('layout.nav')
    </header> {{-- endHeader --}}
        @yield('container')
    </main> {{-- endMain --}}
    {{-- Footer --}}
    <footer class="footer shadow border-top">
        @include('layout.footer')
    </footer> {{-- endFooter --}}

    {{-- Bootstrap CDN --}}
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    {{-- JQuery CDN --}}
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    {{-- Owl Carousel JS --}}
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.owl.carousel.js')}}"></script>
</body>
</html>