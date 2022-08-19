@extends('layout.template')

@section('title', '404 | Not Found')

@section('container')
<div class="col-lg-12 bg-light pt-3">
    <div class="d-flex justify-content-center flex-column align-items-center">
        <section class="col-11 col-lg-8 col-xl-8 col-xxl-8 bg-light container">
            <div class="row">
                {{-- Error Page --}}
                <div class="col-lg-8 bg-light mb-3 justify-content-center align-items-center">
                    <div class="container-error-page d-flex flex-column justify-content-center align-items-center" style="min-height: 100%">
                        <span>
                            <h1 class="text-center">Maaf, Laman Belum Tersedia.</h1>
                        </span>
                        <span class="d-flex">
                            <a href="{{url('/')}}" class="text-decoration-none">
                                <i class="fa-2x fas fa-arrow-circle-left"></i>
                            </a>
                        </span>
                        <span class="d-flex">
                            <a href="{{url('/')}}" class="text-decoration-none">
                                <h6>Kembali ke Beranda</h6>
                            </a>
                        </span>
                    </div>
                </div> {{-- EndCarousel --}}
                {{-- Random Section --}}
                <aside class="random-section col-lg-4 bg-white shadow-sm mb-3 pt-2 pb-5 rounded overflow-hidden">
                    <div class="random-section-tittle">
                        <h5 class="pb-2 border-bottom text-center">Recommended</h5>
                    </div>
                    <div class="random-sectio-scroll">
                        @foreach ($recommended as $content)
                        <div class="col-lg-12 mb-1">
                            <div class="row card-list-custom">
                                <div class="col-4 col-md-4 col-sm-3 random-section-content d-flex justify-content-center align-items-center border-end">
                                    <a href="{{ url('article/'.$content->id) }}"><img src="{{ asset('storage/images/'.$content->images) }}" alt="..." class="random-section-img shadow-sm rounded-3"></a>
                                </div>
                                <div class="col-8 col-md-8 col-sm-9 random-section-content">
                                    <a href="{{ url('article/'.$content->id) }}" class="text-start p-0 m-0 link-custom">
                                        <span><h6 class="owl-c-title-custom">{{ $content->title }}</h6></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        @endforeach
                    </div>
                </aside> {{-- EndRandom Section --}}
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
    </div>
</div>
@endsection