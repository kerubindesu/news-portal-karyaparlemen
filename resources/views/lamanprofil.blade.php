<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!--     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/tyle1.css">
    <link rel="stylesheet" type="text/css" href="assets/css/indexadmin.css">

    <title>KARYA PARLEMEN</title>
    <link rel="shortcut icon" href="assets/img/pena.png">

</head>

<body>

    <div class="bungkus">
        <!-- Navigasi-->

        <div class="fixed-top">
            <!-- NAVIGASI -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top" id="MainNav">
                <div class="container">
                    <div class="navbar-header">
                        <div class="container">
                            <a class="navbar-brand" href="#">
                                <a href="/index"> <img src="assets/img/logokarparrrFIX.png" alt="" width="140" height="30"></a>
                            </a>
                        </div>
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse float-right" id="navbarNav">
                        <!-- Kie Kene -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item">
                            <li class="nav">
                                <a class="nav-link navbar-dark js-scrosll-trigger" aria-current="page" href="{{url('/admin')}}" role="button" style="color:white;">Dasboard</a>
                            </li>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link " href="{{url('/post')}}" role="button" aria-expanded="false" style="color: white;">
                                    Post
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link js-scroll-trigger " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                    Media
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{url('/media')}}">Image</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{url('/media')}}">Vidio</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link js-scroll-trigger dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                    Profil
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{url('/lamanprofil')}}">Profil</a></li>
                                    <li><a class="dropdown-item" href="{{url('/profil')}}">Tambah Profil</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link " href="{{url('/user')}}" role="button" aria-expanded="false" style="color: white;">
                                    User
                                </a>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link " href="{{url('/iklanadmin')}}" role="button" aria-expanded="false" style="color: white;">
                                    Iklan
                                </a>
                            </li>
                        </ul>
                        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
                        </ul>
                    </div>
                    <!-- ini buat search -->
                    <div class="mx-auto" style="width: 200px;">

                        <form class="d-flex" action="" method="post">
                            <input class="form-control me-2 bg-tranparante navbar-collapse outline-dark" type="search" name="keyword" placeholder="Masukan keyword" aria-label="Search outline-dark" autocomplete="off">
                            <button class="btn bg-light" type="cari" name="cari" id="cari">Search</button>
                        </form>

                    </div>

                </div>
                <!-- ini buat logo log in -->
        </div>

        </nav>
        <br>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <br>

                </div>

            </div>
        </div>


        <div class="container">
            <div class="row bg-light">
                <div class="card-header bg-light">Profil
                    <a href="profil.html">Edit Profil</a>
                </div>

                <div class="col-lg-6z">
                    Foto
                </div>
                <div class="col-lg-6">

                </div>

                <div class="col-lg-6">
                    Username
                </div>
                <div class="col-lg-6">
                    Adminkarya
                </div>
                <div class="col-lg-6">
                    Email
                </div>
                <div class="col-lg-6">
                    yogawidyapradana@gmail.com
                </div>
                <div class="col-lg-6">
                    No Telfon
                </div>
                <div class="col-lg-6">
                    081390814320
                </div>
                <div class="col-lg-6">
                    Biografi
                </div>
                <div class="col-lg-6">
                    He is the producer of the fashion brand 'Empty Candy'.

                    He looks as young as a primary school student, but is quick witted and calculating, though he often makes absent-minded remarks with a frequent lack of tact in his words. He's very popular with women due to his cuteness. He is connected to Chuohku and holds a great secret that can't be told to anyone.
                </div>

            </div>


            <!-- tutup -->



            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
            <script type="assets/js/bootstrap.bundle.min.js"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
            <!--   </div>
</div>
 -->
</body>


</html>