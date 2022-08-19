@extends('layout.dashboard')

@section('title',  'Edit | Berita')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-3 min-vh-100">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/contents')}}">Berita</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Berita</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Berita</h1>
    </div>
    <section class="form-admin">
        <form method="post" action="{{url('contents/'. $content->id)}}" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="col-12 mb-3">
                <div class="row">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukan Judul" name="title" value="{{ $content->title}}" autocomplete="off">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-xl-6 mb-3">
                                <label for="description" class="form-label">Artikel</label>
                                <textarea id="description" class="ckeditor form-control @error('description') is-invalid @enderror" placeholder="Masukan Deskripsi Artikel" name="description" cols="30" rows="16">{!!$content->description!!}</textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-xl-6 mb-3">
                                <label for="article" class="form-label">Artikel Lanjutan</label>
                                <textarea id="article" class="ckeditor form-control @error('article') is-invalid @enderror" placeholder="Masukan Deskripsi Artikel" name="article" cols="30" rows="16">{{$content->article}}</textarea>
                                @error('article')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4 mb-3">
                                <img src="{{ asset('storage/images/'.$content->images) }}" alt="" class="img-fluid rounded">
                            </div>
                            <div class="col-8 mb-3">
                                <label for="images" class="form-label mt-3">Ganti Gamabr</label>
                                <input type="file" id="images" class="form-control @error('images') is-invalid @enderror" name="images" value="{{ asset("storage/" . $content->images) }}">
                                @error('images')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-3 mb-3">
                                <label for="id_category" class="form-label">Kategori</label>
                                <select id="id_category" name="id_category" class="form-control @error('id_category') is-invalid @enderror form-select" aria-label="Default select example">
                                    <option disabled value>-- Pilih Kategori --</option>
                                    @foreach ($categories as $item)
                                    <option 
                                        value="{{$item->id_category}}"
                                        @if ($item->id_category === $content->id_category)
                                            selected
                                        @endif
                                    >{{$item->category}}</option>
                                    @endforeach
                                </select>
                                @error('id_category')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-lg-3 mb-3">
                                <label for="sub_category" class="form-label">Sub Kategori</label>
                                <input type="text" id="sub_category" class="form-control @error('sub_category') is-invalid @enderror" placeholder="Masukan Sub Kategori" name="sub_category" value="{{ $content->sub_category }}">
                                @error('sub_category')
                                <div class="alert alert-danger" autocomplete="off">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-lg-3 mb-3">
                                <label for="caption" class="form-label">Caption</label>
                                <input type="text" id="caption" class="form-control @error('caption') is-invalid @enderror" placeholder="Masukan Caption" name="caption" value="{{ $content->caption }}" autocomplete="off">
                                @error('caption')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-lg-3 mb-3">
                                <label for="credit" class="form-label">Credit</label>
                                <input type="text" id="credit" class="form-control @error('credit') is-invalid @enderror" placeholder="Masukan Credit" name="credit" value="{{ $content->credit }}" autocomplete="off">
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
                                <select id="trending" name="trending" class="form-control @error('trending') is-invalid @enderror form-select text-center" aria-label="Default select example">
                                    <option disabled value>-- Apakah ingin masukan ke Trending --</option>
                                    <option value="0" 
                                        @if ($content->trending == 0)
                                            selected
                                        @endif>Tidak
                                    </option>
                                    <option value="1"
                                        @if ($content->trending == 1)
                                            selected
                                        @endif>Trending
                                    </option>
                                </select>
                                @error('trending')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="w-12">
                        <button type="submit" class="btn btn-primary" name="">Selesai</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>
@endsection