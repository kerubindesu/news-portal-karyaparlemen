@extends('layout.dashboard')

@section('title',  'Tambah | Galley')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-3 min-vh-100">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{url('photos')}}">Galley</a></li>
            <li class="breadcrumb-item active" aria-current="page">create</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Galley</h1>
    </div>
    <section class="form-admin">
        <form method="post" action="/photos" enctype="multipart/form-data">
            @csrf
            <div class="col-12 mb-3">
                <div class="col">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="images" class="form-label mt-3">Gamabr</label>
                        <input type="file" id="images" class="form-control @error('images') is-invalid @enderror" placeholder="Pilih Gambar" name="images" value="{{ old('images') }}">
                        @error('images')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="caption" class="form-label">Caption</label>
                        <input type="text" id="caption" class="form-control @error('caption') is-invalid @enderror" placeholder="Masukan Caption" name="caption" value="{{ old('caption') }}" autocomplete="off">
                        @error('caption')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="credit" class="form-label">Credit</label>
                        <input type="text" id="credit" class="form-control @error('credit') is-invalid @enderror" placeholder="Masukan Credit" name="credit" value="{{ old('credit') }}" autocomplete="off">
                        @error('credit')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mb-5" name="">Tambahkan</button>
                </div>
            </div>
        </form>
    </section>
</main>
@endsection