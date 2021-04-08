<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Página principal </title>
</head>
<body>
    @if (isset($pagina))
        <h3> La pagina es {{$pagina}} </h3>
    @endif
    <main>
        <div class="entradaPrincipal">
            <div class="infoEntrada">
                <div class="categoria">

                </div>

                <div class="titulo">

                </div>
            </div>
        </div>

        <nav class="nav">
            <div class="logo"></div>
            <div class="enlaces"></div>
        </nav>

        <div class="entradas">
            <div class="entradaSecundaria">
                <div class="info">

                </div>

                <div class="imagen">

                </div>
            </div>

            <div class="categorias">
                <div class="tituloCategoria"> </div>

                <div class="articulos">
                    <div class="articulos"></div>
                    <div class="articulos"></div>
                    <div class="articulos"></div>
                    <div class="articulos"></div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
