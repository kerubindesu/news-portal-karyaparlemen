@extends('layout.dashboard')

@section('title',  'Tambah | Iklan')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-3 min-vh-100">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{url('ads')}}">Iklan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Iklan</h1>
    </div>
    <section class="form-admin">
        <form method="post" action="/ads" enctype="multipart/form-data">
            @csrf
            <div class="col-12 mb-3">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="pemilik" class="form-label">Pemilik</label>
                                <input type="text" id="pemilik" class="form-control @error('pemilik') is-invalid @enderror" placeholder="Pemilik" name="pemilik" value="{{ old('pemilik') }}" autocomplete="off" autofocus>
                                @error('pemilik')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="durasi" class="form-label">Durasi</label>
                                <input id="durasi" class="form-control @error('durasi') is-invalid @enderror" placeholder="Durasi" name="durasi" value="{{ old('durasi') }}" autocomplete="off">
                                @error('durasi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="konten" class="form-label">Gambar</label>
                        <input type="file" id="konten" class="form-control @error('konten') is-invalid @enderror" placeholder="Konten" name="konten" value="{{ old('konten') }}">
                        <span class="text-danger"><h6 class="pt-2">*Gambar Wajib Diisi!!!</h6></span>
                        @error('konten')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea type="text" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Keterangan" name="keterangan" rows="8">{{ old('keterangan') }}</textarea>
                        @error('keterangan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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