<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Judul --}}
    <title>Login</title>
    {{-- Style CSS --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-custom.css')}}">
    {{-- FontAwsome --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fontawesome-free-5.15.3-web/css/all.min.css')}}">
    {{-- Bootstrap CDN --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="shortcut icon" href="{{asset('assets/img/pena.png')}}">

</head>
<body>
    {{-- Main --}}
    <main class="log-custom">
        <section class="log-section">
            <div class="log-container">
                <div class="log-content">
                    <div class="container-form">
                        <div class="log-form mt-5 text-dark">
                            <span><h2 class="log-title mb-3">Login</h2></span>
                            <form action="{{route('postlogin')}}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="email" name="email" id="email" autofocus placeholder="Email" class="rounded" />
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" name="password" id="password" placeholder="Password" class="rounded" />
                                </div>
                                <div class="form-group mb-3">
                                    <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                    <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                                </div>
                                <div class="form-group form-button mb-5">
                                    <button type="submit" name="signin" id="signin" class="form-submit rounded shadow">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="log-form-img mb-5">
                            <img src="{{ asset("assets/img/logokarparrrFIX.png") }}" alt="" class="img-fluid">
                        </div>
                        <div class="log-footer">
                            <span class="text-center text-secondary py-3">Build with <i class="fas fa-coffee"></i> Kreasindo Karya Media 2021</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main> {{-- EndMain --}}

    {{-- Bootstrap CDN --}}
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    {{-- JQuery CDN --}}
    <script src="{{asset('assets/js/jquery.js')}}"></script>

</body>
</html>