@extends('layout.dashboard')

@section('title',  'Dashboard | Karya Parlemen')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-3 min-vh-100">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{url('/')}}" class="btn btn-primary mb-3 mr-3">
                <span><i class="fas fa-external-link-alt"></i></i></span>
                Lihat Website
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4 mb-lg-0 ps-4">
            <div class="row">
                <div class="col-10 col-sm-5 col-lg-3 card mb-3 bg-gradient bg-success me-2">
                    <a class="text-decoration-none" href="{{url('contents')}}">
                        <div class="card-body text-light">
                            <h5 class="card-title"><span><i class="far fa-newspaper"></i></span> Berita</h5>
                            <p class="card-text-custom text-end">{{$count_contents}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-10 col-sm-5 col-lg-3 card mb-3 bg-warning me-3">
                    <a class="text-decoration-none" href="{{url('photos')}}">
                        <div class="card-body text-light">
                            <h5 class="card-title text-secondary"><span><i class="far fa-images"></i></span> Foto</h5>
                            <p class="card-text-custom text-end">{{$count_photos}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-10 col-sm-5 col-lg-3 card mb-3 bg-info me-3">
                    <a class="text-decoration-none" href="{{url('ads')}}">
                        <div class="card-body text-light">
                            <h5 class="card-title"><span><i class="far fa-sticky-note"></i></span> Iklan</h5>
                            <p class="card-text-custom text-end">{{$count_ads}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-10 col-sm-5 col-lg-3 card mb-3 bg-secondary me-3">
                    <a class="text-decoration-none" href="{{url('user')}}">
                        <div class="card-body text-light">
                            <h5 class="card-title"><span ><i class="fas fa-users"></i></span> Pengguna</h5>
                            <p class="card-text-custom text-end">{{$count_users}}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-7">
            <div class="card mb-3">
                <div class="card-header bg-dark text-light">
                    Trending
                </div>
                <ul class="list-group list-group-flush">
                    @foreach( $trending as $content )
                    <a href="{{ url('article/'.$content->id) }}" class="text-decoration-none">
                        <li class="list-group-item">{{$content->title}}</li>
                    </a>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-5">
            <div class="card">
                <div class="card-header bg-dark text-light text-center">
                    Recent Post
                </div>
                <ul class="list-group list-group-flush">
                    @foreach( $recent as $content )
                    <a href="{{ url('article/'.$content->id) }}" class="text-decoration-none">
                        <li class="list-group-item">{{$content->title}}</li>
                    </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</main>
@endsection