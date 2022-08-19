@extends('layout.dashboard')

@section('title',  'Edit | Gambar')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-3 min-vh-100">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{url('photos')}}">galley</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Berita</h1>
    </div>
    <section class="form-admin">
        <form method="post" action="{{url('photos/'. $photo->id)}}" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="col-12 mb-3">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4 mb-3">
                                <img src="{{ asset('storage/images/'.$photo->images) }} alt="" class="img-fluid rounded">
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
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-3">
                                <label for="caption" class="form-label">Caption</label>
                                <input type="text" id="caption" class="form-control @error('caption') is-invalid @enderror" placeholder="Masukan Caption" name="caption" value="{{ $photo->caption }}">
                                @error('caption')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-lg-4 mb-3">
                                <label for="credit" class="form-label">Credit</label>
                                <input type="text" id="credit" class="form-control @error('credit') is-invalid @enderror" placeholder="Masukan Credit" name="credit" value="{{ $photo->credit }}">
                                @error('credit')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-5" name="">Selesai</button>
                </div>
            </div>
        </form>
    </section>
</main>
@endsection