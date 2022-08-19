@extends('layout.dashboard')

@section('title',  'Posts | Karya Parlemen')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-3 min-vh-100">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pencarian</li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Hasil pencarian :</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{url('contents/create')}}" class="btn btn-primary mb-3 mr-3">
                <span><i class="far fa-plus-square"></i></span>
                Posting Berita Baru
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr class="text-center">
                    <th scope="col">Nomor</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Artikel</th>
                    <th scope="col">Trending</th>
                    <th scope="col" colspan="3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $posts as $content )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset('storage/images/'.$content->images) }}" class="img-fluid rounded" width="180px" alt=""></td>
                    <td><p>{{ $content->title }}</p></td>
                    <td>{!! substr($content->description,0,96) !!}..</td>
                    <td><p>@if ($content->trending == 1)
                        Trending
                    @else
                        -
                    @endif</p></td>
                    <td><a href="{{ url('contents/'.$content->id)}}" class="btn btn-primary"><i class="far fa-eye"></i></a></td>
                    <td><a href="{{ url('contents/'.$content->id.'/edit')}}" class="btn btn-warning"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{ url('contents/'.$content->id)}}" method="post" class="d-inline">
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