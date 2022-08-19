@extends('layout.dashboard')

@section('title',  'Users | Karya Parlemen')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-3 min-vh-100">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Users</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <div class="pt-2">
                    {{ $user->onEachSide(10)->links()}}
                </div>
            </div>
            <a href="#" class="btn visually-hidden btn btn-primary mb-3 mr-3 disabled">
                <span><i class="far fa-plus-square"></i></span>
                Tambah Data
            </a>
        </div>
    </div>

    {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    <h2>Section title</h2> --}}
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr class="text-center">
                    <th scope="col table-dark">Id</th>
                    <th scope="col table-dark">Nama</th>
                    <th scope="col table-dark">Password</th>
                    <th scope="col table-dark">Email</th>
                    <th scope="col table-dark">Level</th>
                    <th scope="col" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $user as $user )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->password}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->level}}</td>
                    <td><a href="" class="btn btn-dark disabled">Ubah</a></td>
                    <td><a href="" class="btn btn-dark disabled" aria-disabled="">Hapus</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection