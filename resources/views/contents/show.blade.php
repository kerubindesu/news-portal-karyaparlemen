@extends('layout.dashboard')

@section('title',  'Tampilan | Karya Parlemen')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-3 min-vh-100">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{url('contents')}}">Berita</a></li>
            <li class="breadcrumb-item active" aria-current="page">Preview Berita</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Preview Berita</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ url('contents/'.$content->id.'./edit')}}" class="btn btn-warning mb-3 mr-3">
                <span><i class="far fa-edit"></i></span>
                Edit berita
            </a>
        </div>
    </div>

    <div class="container rounded shadow-sm">
        <div class="col-md-8">
            <div class="row">
                <div class="tanggal-artikel mb-3">
                    <span><p class="text-end">Published on {{ date('d M Y', strtotime($content->created_at)) }}</p></span>
                </div>
                <div class="judul-artikel">
                    <span><p class="text-end"><h1 class="text-start mb-3">{{ $content->title }}</h1></span>
                </div>
                <a href="" class="mb-3">
                    <img src="{{ asset('storage/images/'.$content->images) }}" class="img-fluid rounded">
                </a>
            </div>
            <div class="my-3">
                <span><p class="text-end"><h1 class="text-start mb-3"><p>{!! $content->description!!}</p></span>
                <span><p class="text-end"><h1 class="text-start mb-3"><p>{!! $content->article!!}</p></span>
            </div>
        </div>
    </div>
</main>
    {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    <h2>Section title</h2> --}}
@endsection