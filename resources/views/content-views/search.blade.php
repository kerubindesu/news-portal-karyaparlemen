@extends('layout.laman_template')

@section('title', 'Pencarian | Karya Parlemen')

@section('container')

<div class="container">
    <div class="categories-section-tittle border-bottom mb-3">
        <div class="container">
            <h5>Hasil Pencarian :</h5>
        </div>
    </div>
    @foreach ($posts as $content)
    <div class="col-lg-12 mb-3">
        <div class="row list-custom">
            <div class="col-4 col-md-4 col-sm-3 list-custom d-flex justify-content-center align-items-center border-end">
                <a href="{{ url('article/'.$content->id) }}" class="bg-primary"><img src="{{ asset('storage/images/'.$content->images) }}" alt="..." class="random-section-img shadow-sm rounded"></a>
            </div>
            <div class="col-8 col-md-8 col-sm-9 list-custom">
                <a href="{{ url('article/'.$content->id) }}" class="text-start p-0 m-0 link-custom">
                    <h6>{{ $content->title }}</h6>
                    <p class="card-text d-block">{!! \Illuminate\Support\Str::limit($content->description, 128, $end='...') !!}</p>
                </a>
            </div>
        </div>
    </div>
    <div class="dropdown-divider"></div>
    @endforeach
</div>

@endsection