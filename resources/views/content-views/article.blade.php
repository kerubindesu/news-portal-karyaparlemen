@extends('layout.laman_template')

@section('title', 'News | Article')

@section('container')
<div class="container">
    <div class="tanggal-artikel d-flex justify-content-between mb-3">
        <span><p> {{ $content->sub_category }}</p></span>
        <span><p>Published on {{ date('d M Y', strtotime($content->created_at)) }}</p></span>
    </div>
    <div class="judul-artikel">
        <span><h1 class="text-start mb-3">{{ $content->title }}</h1></span>
    </div>
    <a href="" class="mb-3">
        <img src="{{ asset('storage/images/'.$content->images) }}" class="img-fluid rounded mb-3">
    </a>
    <div class="mb-3">
        <span>
            <p>{{$content->caption}}</p>
            <p>Ditulis oleh, <i>{{$content->credit}}</i></p>
        </span>
    </div>
</div>
<div class="container mb-3">
    <span><p class="text-end"><p>{!! $content->description!!}</p></span>
    <div class="d-flex align-items-center">
        <div class="card">
            <div class="card-header text-dark text-start">
                <h6>Baca Juga</h6>
            </div>
            <ul class="list-group list-group-flush">
                @foreach( $baca_juga as $content )
                <a href="{{ url('article/'.$content->id) }}" class="text-decoration-none">
                    <li class="list-group-item"><p class="text-primary">{{$content->title}}</p></li>
                </a>
                @endforeach
            </ul>
        </div>
    </div>
    <span><p class="text-end"><p>{!! $content->article!!}</p></span>
</div>
@endsection