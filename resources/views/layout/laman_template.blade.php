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

    <style>
    li {
        list-style: none;
        font-size: 14px;
        line-height: 24px;
        text-align: justify;
        font-family: Arial, Helvetica, sans-serif;
        color: #343a40;
    }
    </style>

</head>
<body>
    {{-- Main --}}
    <main class="main-content">
            {{-- Header --}}
    <header class="main-header sticky-top">
        @include('layout.nav')
    </header> {{-- endHeader --}}
        <div class="col-lg-12 bg-light">
            <div id="main-wrapper">
                <section class="rounded col-11 col-lg-8 col-xl-8 col-xxl-8 bg-light p-0 mb-3">                            
                    <div class="container-fluid">
                        <div class="col-12">
                            <div class="row">
                                <div class="bg-white col-lg-8 laman-content-section px-0 py-3 border-end mb-3">
                                    {{-- Isi Konten --}}
                                    @yield('container') {{-- EndIsi Konten --}}
                                </div>
                                <aside class="col-lg-4 p-0 mb-3 bg-white">
                                    <div class="col-12">
                                        <div class="col bg-white">
                                            <div class="container">
                                                {{-- Random Section --}}
                                                <div class="bg-white p-0 m-0">
                                                    <div class="random-section-tittle border-bottom mb-3">
                                                        <div class="container">
                                                            <h5 class="pt-3 text-center">Recommended</h5>
                                                        </div>
                                                    </div>
                                                    <div class="random-sectio-scroll mb-3">
                                                        @foreach ($recommended as $content)
                                                        <div class="col-lg-12 mb-1">
                                                            <div class="row card-list-custom">
                                                                <div class="col-4 col-md-4 col-sm-3 random-section-content d-flex justify-content-center align-items-center">
                                                                    <a href="{{ url('article/'.$content->id) }}"><img src="{{ asset("storage/images/" . $content->images) }}" alt="..." class="random-section-img shadow-sm rounded-3"></a>
                                                                </div>
                                                                <div class="col-8 col-md-8 col-sm-9 random-section-content">
                                                                    <a href="{{ url('article/'.$content->id) }}" class="text-startp-0 m-0 link-custom">
                                                                        <span><h6 class="owl-c-title-custom">{{ $content->title }}</h6></span>
                                                                        {{-- <span><p class="card-text d-block">{!! substr($content->description,64) !!}...</p></span> --}}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-divider"></div>
                                                        @endforeach
                                                    </div> 
                                                </div>
                                                {{-- EndRandom Section --}}
                                            </div>
                                            <div class="tag-section">
                                                <div>
                                                    <div class="mb-3">
                                                        <h5 class="py-3 text-center">All Categories</h5>
                                                    </div>
                                                </div>
                                                <div class="row row-cols-3 row-cols-sm-4 row-cols-lg-2 ms-2 my-3 py-3">
                                                    @foreach ($categories as $item)
                                                    <a class="link-custom" href="{{ url('categories/'.$item->id_category)}}">
                                                        <p><small class="border rounded shadow text-white mb-2 tag-custom">{{ $item->category }}</small></p>
                                                    </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Recent Section --}}
                <section class="owl-c-section col-11 col-lg-8 col-xl-8 col-xxl-8 bg-light">
                    <div class="row">
                        <div class="owl-c-section-title col-12 bg-light shadow-none rounded">
                            <div class="container bg-white pt-3 pb-1 rounded shadow-sm">
                                <h5>Recent Post</h5>
                            </div>
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                    <div class="owl-crousel-custom mb-3">
                        <div class="owl-carousel owl-theme">
                            @foreach ($recent as $content)
                            <a href="{{ url('article/'.$content->id) }}" class="link-custom">
                                <div class="item item-coursel-custom ms-2 me-2">
                                    <div class="card rounded shadow-sm">
                                        <img src="{{ asset("storage/images/" . $content->images) }}" alt="" class="owl-img-custom rounded-top">
                                        <div class="card-body owl-carousel-card-body mb-2">
                                            <span><small>{{ date('d M Y', strtotime($content->created_at)) }}</small></span>
                                            <span></span><h6>{{ $content->title }}</h6></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </section> {{-- EndRecent --}}
                {{-- Other Section --}}
                <section class="owl-c-section col-11 col-lg-8 col-xl-8 col-xxl-8 bg-light">
                    <div class="row">
                        <div class="owl-c-section-title col-12 bg-light shadow-none rounded">
                            <div class="container bg-white pt-3 pb-1 py-3 rounded shadow-sm">
                                <h5>Other</h5>
                            </div>
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                    <div class="owl-crousel-custom mb-3">
                        <div class="owl-carousel owl-theme">
                            @foreach ($recommended as $content)
                            <a href="{{ url('article/'.$content->id) }}" class="link-custom">
                                <div class="item item-coursel-custom ms-2 me-2">
                                    <div class="card rounded shadow-sm">
                                        <img src="{{ asset("storage/images/" . $content->images) }}" alt="" class="owl-img-custom rounded-top">
                                        <div class="card-body owl-carousel-card-body mb-2">
                                            <span><small>{{ date('d M Y', strtotime($content->created_at)) }}</small></span>
                                            <span><h6>{{ $content->title }}</h6></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </section> {{-- EndOther --}}
            </div>
        </div>
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