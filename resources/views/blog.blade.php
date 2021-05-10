<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <title> Página principal </title>
</head>
<body>
    <div class="posts">
        @foreach ($posts_publicados as $post)
            <!-- Primer post -->
            @if($loop->first)
                <div class='post_principal' style='background-image: url("http://localhost/livemore/storage/{{$post->images[0]->url}}"')">
                    <a href="{{route('mostrarPost', $post)}}" class="tituloPost">
                        <div class="categoria">
                            <span> </span>
                             <p> {{$post->categories->name}}</p>
                            <span> </span>
                        </div>

                        <h1> {{$post->title}} </h1>
                    </a>

                    <!-- Menu de navegación -->
                    <div class="nav">
                        <div class="logo">
                            <svg width="100%" height="100%" viewBox="0 0 369 286" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                                <g transform="matrix(1,0,0,1,-224.859,-153.035)">
                                    <g transform="matrix(2.59851,0,0,3.28732,-5.76409,-1175.56)">
                                        <text x="91px" y="510px" style="font-family:'Rockstarswashes-Regular', 'Rockstar swashes';font-size:86.455px;fill:rgb(67,53,32);">d</text>
                                    </g>
                                    <g transform="matrix(1,0,0,1,129,5)">
                                        <text x="120px" y="369px" style="font-family:'Rockstaralt.-Regular', 'Rockstar alt.';font-size:262.457px;fill:rgb(67,53,32);">L</text>
                                    </g>
                                    <g transform="matrix(1,0,0,1,-28,-15)">
                                        <text x="416px" y="378px" style="font-family:'Rockstaralt.-Regular', 'Rockstar alt.';font-size:262.457px;fill:rgb(251,235,204);">M</text>
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <div class="enlaces">
                            <a href="#"> Principal</a>
                            <a href="#"> Categorias </a>
                            <a href="#"> Articulos </a>
                            <a href="#"> Contacto </a>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Segundo post -->
            @if ($loop->index == 2)
                <div class="postSecundario">
                    <div class="contenido">
                        <h1> {{$post->title}}</h1>
                        <h2> {{$post->brief}}</h2>
                        <h3> Articulo de {{$post->user->name}} {{$post->user->surname}}</h3>
                    </div>

                    <div class="imagen" style='background-image: url("http://localhost/livemore/storage/{{$post->images[0]->url}}"')">
                    </div>
                </div>
            @endif
         @endforeach

        <!-- Post por categoria -->
        @foreach ($categorias as $categoria)

            {{-- Si hay contenido en la categoria se mostrará, en caso contrario no. --}}
            @if($categoria->posts->count())
                <div class="categoria">
                    <h1> {{$categoria->name}}</h1>
                    <span> </span>
                </div>

                <div class="posts_categoria">
                    @foreach ($categoria->posts as $postCategoria)
                        @if ($loop->index <= 3)
                            <div class="post">
                                <img src="http://localhost/livemore/storage/{{$postCategoria->images[0]->url}}" alt="">
                                <div class="title">
                                    <a href="{{route('mostrarPost', $postCategoria)}}"> {{$post->title}} </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        @endforeach
    </div>
</body>
</html>
