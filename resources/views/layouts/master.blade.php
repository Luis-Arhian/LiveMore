<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('sss/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="@yield('css')">
    <title> @yield('titulo') </title>
</head>

<body>
    @section('nav')
        Barra de navegación
    @show

    @yield('contenido')

    @section('footer')
        Pie de página
    @show

</body>
</html>
