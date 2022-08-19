@extends('layout.dashboard')

@section('title',  'Tambah | Berita')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-3 min-vh-100">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{url('/contents')}}">Berita</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Berita</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Berita</h1>
    </div>
    <section class="form-admin">
        <form method="post" action="{{url('contents')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-12 mb-3">
                <div class="row">
                    <div class="mb-3">
                        <label for="title" class="form-label" for="formControlDefault">Judul</label>
                        <input type="text" id="formControlDefault" class="form-control @error('title') is-invalid @enderror" placeholder="Masukan Judul" name="title" value="{{ old('title') }}" autofocus autocomplete="off">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-xl-6 mb-3">
                                <label for="description" class="form-label">Artikel</label>
                                <textarea id="description" class="ckeditor form-control @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-xl-6 mb-3">
                                <label for="article" class="form-label">Artikel Lanjutan</label>
                                <textarea id="article" class="ckeditor form-control @error('article') is-invalid @enderror" name="article">{{ old('article') }}</textarea>
                                @error('article')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="images" class="form-label mt-3">Gambar</label>
                        <input type="file" id="images" class="form-control @error('images') is-invalid @enderror" placeholder="Pilih Gambar" name="images" value="{{ old('images') }}">
                        @error('images')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-3 mb-3">
                                <label for="id_category" class="form-label">Kategori</label>
                                <select id="id_category" name="id_category" id="id_category" class="form-control @error('id_category') is-invalid @enderror" value="{{ old('id_category') }}">
                                    <option disabled value selected>-- Pilih Kategori --</option>
                                    @foreach ($categories as $item)
                                    <option value="{{$item->id_category}}">{{$item->category}}</option>
                                    @endforeach
                                </select>
                                @error('id_category')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-lg-3 mb-3">
                                <label for="sub_category" class="form-label">Sub Kategori</label>
                                <input type="text" id="sub_category" class="form-control @error('sub_category') is-invalid @enderror" placeholder="Masukan Sub Kategori" name="sub_category" value="{{ old('sub_category') }}" autocomplete="off">
                                @error('sub_category')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-lg-3 mb-3">
                                <label for="caption" class="form-label">Caption</label>
                                <input type="text" id="caption" class="form-control @error('caption') is-invalid @enderror" placeholder="Masukan Caption" name="caption" value="{{ old('caption') }}" autocomplete="off">
                                @error('caption')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-lg-3 mb-3">
                                <label for="credit" class="form-label">Credit</label>
                                <input type="text" id="credit" class="form-control @error('credit') is-invalid @enderror" placeholder="Masukan Credit" name="credit" value="{{ old('credit') }}" autocomplete="off">
                                @error('credit')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-3 mb-3">
                                <label for="trending" class="form-label">Trending</label>
                                <select id="trending" name="trending" class="form-control @error('trending') is-invalid @enderror">
                                <option disabled value selected>-- Masukan Ke Trending --</option>
                                <option value="0">Tidak
                                </option>
                                <option value="1">Trending
                                </option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="w-12">
                        <button type="submit" class="btn btn-primary" name="">Tambahkan</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>
@endsection