@extends('layout.dashboard')

@section('title',  'Gallery | Karya Parlemen')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-3 min-vh-100">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Gallery Karya Parlemen</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <div class="pt-2">
                    {{ $photos->onEachSide(10)->links()}}
                </div>
            </div>
            <a href="{{url('photos/create')}}" class="btn btn-primary mb-3 mr-3">
                <span><i class="far fa-plus-square"></i></span>
                Tambah Foto/Gambar
            </a>
        </div>
    </div>
    <div class="row">
    @foreach( $photos as $photo )
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img src="{{ asset('storage/images/'.$photo->images) }}" class="w-100 shadow-1-strong rounded mb-4">
        </div>
    @endforeach
    </div>
</main>
@endsection
    
