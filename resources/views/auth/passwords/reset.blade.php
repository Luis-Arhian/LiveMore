<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/logos/favicon-16x16.png')}}">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Iniciar Sesión </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <main class="container">
        <div class="imageContainer">
            <img src="{{asset("assets/img/login.jpg")}}" alt="">
        </div>

            <div class="loginContainer">
                <svg width="100%" height="100%" viewBox="0 0 614 309" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                    <g transform="matrix(1,0,0,1,-118.163,-153.035)">
                        <text x="120px" y="369px" style="font-family:'Rockstaralt.-Regular', 'Rockstar alt.';font-size:262.457px;fill:rgb(67,53,32);">Live</text>
                        <g transform="matrix(1,0,0,1,-28,-15)">
                            <text x="416px" y="378px" style="font-family:'Rockstaralt.-Regular', 'Rockstar alt.';font-size:262.457px;fill:rgb(74,255,11);">More</text>
                        </g>
                        <g transform="matrix(3.17684,0,0,3.28732,-1.09284,-1152.56)">
                            <text x="91px" y="510px" style="font-family:'Rockstarswashes-Regular', 'Rockstar swashes';font-size:86.455px;fill:rgb(67,53,32);">d</text>
                        </g>
                    </g>
                </svg>

                <div class="card">
                    <div class="formulario">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                </div>
            </div>
        </main>
</body>
</html>
