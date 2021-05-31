<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/logos/favicon-16x16.png')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="@yield('css')">
    @yield('js')
    <script src="{{asset('ts/blog.js')}}"></script>

    <title> @yield('titulo') </title>
</head>
<body>
    @include('layouts.nav')
    <div class="articulo">
        @yield('contenido')
    </div>
    @include('layouts.footer')
</body>
</html>
