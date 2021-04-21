<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('scss/login.css')}}">
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
                    <span class="header">{{ __('Bienvenido a tu nuevo cambio') }}</span>

                    <div class="formulario">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <input id="email" type="email" placeholder="Email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label class="recordar">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="imagen imagen-checked"> </span>
                                <span class="texto"> Recordar contraseña </span>
                            </label>

                            <button type="submit">{{ __('Entra!!') }}</button>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste la contraseña?') }}
                                </a>
                            @endif
                        </form>
                    </div>

                    <div class="registrate"> ¿Todavia no has comenzado?
                        <span>
                            Registrate
                        </span>
                    </div>
                </div>
            </div>
        </main>
</body>
</html>
