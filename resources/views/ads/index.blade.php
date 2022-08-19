@extends('layout.dashboard')

@section('title',  'Iklan | Karya Parlemen')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-3 min-vh-100">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Iklan</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Iklan</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <div class="pt-2">
                    {{ $ads->onEachSide(10)->links()}}
                </div>
            </div>
            <a href="{{url('ads/create')}}" class="btn btn-primary mb-3 mr-3">
                <span><i class="far fa-plus-square"></i></span>
                Tambah Data
            </a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">konten</th>
                    <th scope="col">Pemilik</th>
                    <th scope="col">Durasi</th>
                    <th scope="col">Tgl_Masuk</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col" colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $ads as $ad )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset("storage/images/" . $ad->konten) }}" class="img-fluid rounded" width="180px" alt=""></td>
                    <td>{{ $ad->pemilik }}</td>
                    <td>{{ $ad->durasi }}</td>
                    <td>{{ date('d M Y', strtotime($ad->created_at)) }}</td>
                    <td>{!! substr($ad->keterangan,0,96) !!}</td>
                    <td><a href="{{ url('ads/'.$ad->id)}}" class="btn btn-primary disabled"><i class="far fa-eye"></i></a></td>
                    <td><a href="{{ url('ads/'.$ad->id.'/edit')}}" class="btn btn-warning"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{ url('ads/'.$ad->id)}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-dark" name="delete" onclick="return confirm('Apakah anda yakin ingin menghapus Data ini?'); "><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
    
