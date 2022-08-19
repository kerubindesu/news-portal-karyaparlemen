@extends('layout.template')

@section('title', 'News | Karya Parlemen')

@section('container')
    <div id="main-wrapper">
        <section class="col-11 col-lg-8 col-xl-8 col-xxl-8 bg-light container">
            <div class="row">
                {{-- Carousel --}}
                <div class="col-lg-8 bg-light mb-3">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner m-sm-auto m-md-auto">
                            @foreach ($banner as $content)
                            <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}} carousel-custom">
                                <a href="{{ url('article/'.$content->id) }}"><img src="{{ asset('storage/images/'.$content->images) }}" class="shadow-sm bg-white rounded carousel-custom-img link-custom" width alt="..."></a>
                                <div class="carousel-caption carousel-caption-custom d-none d-md-block overflow-hidden m-0">
                                    <div class="container">
                                        <a href="{{ url('article/'.$content->id) }}" class="text-start link-custom-carousel">
                                            <h2 class="link-custom-carousel">{{ $content->title }}</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="bg-light carousel-control-custom-prev rounded-circle" aria-hidden="true"><i class="fa-2x fas fa-chevron-left"></i></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="bg-light carousel-control-custom-next rounded-circle" aria-hidden="true"><i class="fa-2x fas fa-chevron-right"></i></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div> {{-- EndCarousel --}}
                {{-- Recent Section --}}
                <aside class="random-section col-lg-4 bg-white shadow-sm mb-3 pt-2 pb-5 rounded overflow-hidden">
                    <div class="random-section-tittle border-bottom mb-2">
                        <h5 class="py-2 text-center">Recent Post</h5>
                    </div>
                    <div class="random-sectio-scroll">
                        @foreach ($recent as $content)
                        <div class="col-lg-12 mb-1">
                            <div class="row card-list-custom">
                                <div class="col-4 col-md-4 col-sm-3 random-section-content d-flex justify-content-center align-items-center border-end">
                                    <a href="{{ url('article/'.$content->id) }}"><img src="{{ asset("storage/images/" . $content->images) }}" alt="..." class="random-section-img shadow-sm rounded-3"></a>
                                </div>
                                <div class="col-8 col-md-8 col-sm-9 random-section-content">
                                    <a href="{{ url('article/'.$content->id) }}" class="text-startp-0 m-0 link-custom">
                                        <span><small>{{ date('d M Y', strtotime($content->created_at)) }} | {{ $content->category }}</small></span>
                                        <span><h6 class="owl-c-title-custom">{{ $content->title }}</h6></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        @endforeach
                    </div>
                </aside> {{-- EndRecent Section --}}
            </div>
        </section>
        {{-- Trending Section --}}
        <section class="owl-c-section col-11 col-lg-8 col-xl-8 col-xxl-8 bg-light">
            <div class="row">
                <div class="owl-c-section-title col-12 bg-light shadow-none rounded">
                    <div class="container">
                        <h5>Trending</h5>
                    </div>
                    <div class="dropdown-divider"></div>
                </div>
            </div>
            <div class="owl-crousel-custom mb-3">
                <div class="owl-carousel owl-theme">
                    @foreach ($trending as $content)
                    <a href="{{ url('article/'.$content->id) }}" class="link-custom">
                        <div class="item item-crousel-custom ms-2 me-2">
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
        </section> {{-- EndTrending --}}
        <section class="rounded col-11 col-lg-8 col-xl-8 col-xxl-8 bg-light p-0 mb-3 bg-white">                            
            <div class="container-fluid">
                <div class="col-12">
                    <div class="row">
                        <div class="bg-white col-lg-8 laman-content-section px-0 py-3 border-end">
                            <div class="container">
                                @foreach ($latest as $content)
                                <div class="col-lg-12 mb-3">
                                    <div class="row list-custom">
                                        <div class="col-4 col-md-4 col-sm-3 list-custom d-flex justify-content-center align-items-center border-end">
                                            <a href="{{ url('article/'.$content->id) }}" class="bg-primary"><img src="{{ asset("storage/images/" . $content->images) }}" alt="..." class="random-section-img shadow-sm rounded"></a>
                                        </div>
                                        <div class="col-8 col-md-8 col-sm-9 list-custom">
                                            <a href="{{ url('article/'.$content->id) }}" class="text-start p-0 m-0 link-custom">
                                                <h6>{{ $content->title }}</h6>
                                                <p class="card-text d-block">{!! \Illuminate\Support\Str::limit($content->description, 128, $end='...') !!}</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                @endforeach
                            </div>
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
    </div>
@endsection