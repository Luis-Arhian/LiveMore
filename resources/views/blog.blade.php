<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <script src="{{asset('ts/blog.js')}}"></script>
    <title> Página principal </title>
</head>
<body>
    <div class="posts">
        @foreach ($posts_publicados as $post)
            <!-- Primer post -->
            @if($loop->first)
                <div class='post_principal' style='background-image: url(
                    @if($post->images) "http://localhost/livemore/storage/app/{{$post->images->url}}"
                    @else "http://localhost/livemore/storage/app/posts_images/default_image.jpg"
                    @endif'>
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
                            <div class="close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-m</title><path d="M289.94,256l95-95A24,24,0,0,0,351,127l-95,95-95-95A24,24,0,0,0,127,161l95,95-95,95A24,24,0,1,0,161,385l95-95,95,95A24,24,0,0,0,385,351Z"/></svg>
                            </div>
                            <a href="#"> Principal</a>
                            <a href="#"> Categorias </a>
                            <a href="#"> Articulos </a>
                            <a href="#"> Contacto </a>

                        </div>
                        <div class="menu">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 18v1h-24v-1h24zm0-6v1h-24v-1h24zm0-6v1h-24v-1h24z" fill="#1040e2"/><path d="M24 19h-24v-1h24v1zm0-6h-24v-1h24v1zm0-6h-24v-1h24v1z"/></svg>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Segundo post -->
            @if ($loop->index == 1)
                <a href="{{route('mostrarPost', $post)}}"class="postSecundario">
                    <div class="contenido">
                        <h1> {{$post->title}}</h1>
                        <h2> {!!$post->brief!!}</h2>
                        <h3> Articulo de {{$post->user->name}} {{$post->user->surname}}</h3>
                    </div>

                    <div class="imagen" style='background-image: url(
                        @if($post->images) "http://localhost/livemore/storage/app/{{$post->images->url}}"
                        @else "https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                        @endif)'>
                    </div>
                </a>
            @endif
         @endforeach

        <!-- Post por categoria -->
        @foreach ($categorias as $categoria)

            {{-- Si hay contenido en la categoria se mostrará, en caso contrario no. --}}
            @if($categoria->posts->count())
                <div class="categoria">
                    <a href="{{route('filtrarCategoria', $categoria)}}">
                        <h1> {{$categoria->name}}</h1>
                    </a>
                    <span> </span>
                </div>

                <div class="posts_categoria">
                    @foreach ($categoria->posts as $postCategoria)
                        @if ($loop->index <= 3)
                            <div class="post">
                                @if($postCategoria->images)
                                    <img src="http://localhost/livemore/storage/app/{{$postCategoria->images->url}}" alt="">
                                @else
                                    <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
                                @endif
                                <div class="title">
                                    <a href="{{route('mostrarPost', $postCategoria)}}"> {{$postCategoria->title}} </a>
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
