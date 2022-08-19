{{-- Menu Navigasi --}}
<nav class="navbar navbar-expand-lg navbar-light shadow-sm py-3 justify-content-center col-12">
    <div class="container-fluid p-lg-0 col-11 col-lg-8 p-0">
        <a class="navbar-brand" href="{{url('/')}}" class="">
            <img src="{{ asset("assets/img/logokarparrrFIX.png") }}" alt="" style="width: 128px; height: 100%;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link-custom" aria-current="page" href="{{url('/')}}">
                        NEWS
                    </a>
                </li>
                {{-- Menu Dropdown Regional --}}
                <li class="nav-item dropdown">
                    <a class="nav-link-custom dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        REGIONAL
                    </a>
                    <ul class="dropdown-menu dropdown-menu-custom dropdown-menu-start" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{url('kosong')}}">Banjarnegara</a></li>
                        <li><a class="dropdown-item" href="{{url('/')}}">Banyumas</a></li>
                        <li><a class="dropdown-item" href="{{url('kosong')}}">Brebes</a></li>
                        <li><a class="dropdown-item" href="{{url('kosong')}}">Brebes</a></li>
                        <li><a class="dropdown-item" href="{{url('kosong')}}">Brebes</a></li>
                        <li><a class="dropdown-item" href="{{url('kosong')}}">Cilacap</a></li>
                        <li><a class="dropdown-item" href="{{url('kosong')}}">Kebumen</a></li>
                        <li><a class="dropdown-item" href="{{url('kosong')}}">Pemalang</a></li>
                        <li><a class="dropdown-item" href="{{url('kosong')}}">Purbalingga</a></li>
                        <li><a class="dropdown-item" href="{{url('kosong')}}">Tegal</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="{{url('kosong')}}">All</a></li>
                    </ul>
                </li> {{-- endRegional --}}
                {{-- Menu Dropdown Hype --}}
                <li class="nav-item dropdown">
                    <a class="nav-link-custom dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        HYPE
                    </a>
                    <ul class="dropdown-menu dropdown-menu-custom dropdown-menu-start" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{url('kosong')}}">Life Style</a></li>
                        <li><a class="dropdown-item" href="{{url('kosong')}}">Family</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="{{url('kosong')}}">All</a></li>
                    </ul>
                </li> {{-- endHype --}}
                {{-- Menu Dropdown Categories --}}
                <li class="nav-item dropdown">
                    <a class="nav-link-custom dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CATEGORIES
                    </a>
                    <ul class="dropdown-menu dropdown-menu-custom dropdown-menu-start" aria-labelledby="navbarDarkDropdownMenuLink">
                        @foreach ($categories as $item)
                        <li><a class="dropdown-item border-bottom border-white" href="{{ url('categories/'.$item->id_category)}}">{{$item->category}}</a></li>
                        @endforeach
                    </ul>
                </li> {{-- endCategories --}}
                {{-- Menu Dropdown Opinion --}}
                <li class="nav-item dropdown">
                    <a class="nav-link-custom dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        OPINION
                    </a>
                    <ul class="dropdown-menu dropdown-menu-custom dropdown-menu-start" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{url('/kosong')}}">Opini</a></li>
                    </ul>
                </li> {{-- endOpinion--}}
                {{-- Menu Dropdown More --}}
                <li class="nav-item dropdown">
                    <a class="nav-link-custom dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        MORE
                    </a>
                    <ul class="dropdown-menu dropdown-menu-custom dropdown-menu-start" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{url('more iklanmore')}}">Iklan</a></li>
                        <li><a class="dropdown-item" href="{{url('kosong')}}">Karir</a></li>
                        <li><a class="dropdown-item" href="{{url('more bantuan')}}">Bantuan</a></li>
                        <li><a class="dropdown-item" href="{{url('more pkp')}}">Panduan Komunitas Parlemen</a></li>
                        <li><a class="dropdown-item" href="{{url('kosong')}}">Panduan Penulisan Artikel</a></li>
                        <li><a class="dropdown-item" href="{{url('more kkp')}}">Ketentuan & Kebijakan Privasi</a></li>
                        <li><a class="dropdown-item" href="{{url('more pms')}}">Pedoman media Siber</a></li>
                    </ul>
                </li> {{-- endMore --}}
            </ul> 
            <form class="search-custom d-flex justify-content-between" method="GET" action="{{url('caripublic')}}">
                {{ csrf_field() }}
                <input class="form-control" type="search" placeholder="Search" autofocus aria-label="Search" name="q">
                <button class="btn visually-hidden" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav> {{-- endNavigasi --}}