@extends('layout.dashboard')

@section('title',  'Edit | Iklan')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-3 min-vh-100">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admin')}}"><a>Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{url('ads')}}"><a>Iklan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Berita</h1>
    </div>
    <section class="form-admin">
        <form method="post" action="{{url('ads/'. $ad->id)}}" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="col-12 mb-3">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="pemilik" class="form-label">Pemilik</label>
                                <input type="text" id="pemilik" class="form-control @error('pemilik') is-invalid @enderror" placeholder="Pemilik" name="pemilik" value="{{ $ad->pemilik }}">
                                @error('pemilik')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="durasi" class="form-label">Durasi</label>
                                <input id="durasi" class="form-control @error('durasi') is-invalid @enderror" placeholder="Durasi" name="durasi" value="{{ $ad->durasi }}">
                                @error('durasi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4 mb-3">
                                <img src="{{ asset("storage/images/" . $ad->konten) }}" alt="" class="img-fluid rounded">
                            </div>
                            <div class="col-8 mb-3">
                                <label for="konten" class="form-label mt-3">Ganti Gamabr</label>
                                <input type="file" id="konten" class="form-control @error('konten') is-invalid @enderror" name="konten" value="{{ asset("storage/" . $ad->konten) }}">
                                <span class="text-danger"><h6 class="pt-2">*Gambar Wajib Diisi!!!</h6></span>
                                @error('konten')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Masukan Deskripsi Artikel" name="keterangan" rows="8">{!!$ad->keterangan!!}
                        </textarea>
                        @error('keterangan')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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