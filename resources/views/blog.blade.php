<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/logos/favicon-16x16.png')}}">

    <script src="{{asset('ts/blog.js')}}"></script>
    <title> Página principal </title>
</head>
<body>
    <div class="posts">
        @foreach ($posts_publicados as $post)
            {{-- Primer post --}}
            @if($loop->first)
                <div class='post_principal' loading="lazy" style='background-image: url(
                    @if($post->images) "http://localhost/livemore/storage/app/{{$post->images->url}}"
                    @else "http://localhost/livemore/storage/app/posts_images/default_image.jpg"
                    @endif'>
                        <a href="{{route('mostrarPost', $post)}}" class="tituloPost">
                            <div class="categoria">
                                <span> </span>
                                <p> {{$post->categories->title}}</p>
                                <span> </span>
                            </div>

                            <h1> {{$post->title}} </h1>
                        </a>

                    {{-- Menu de navegación --}}
                    <div class="nav">
                        <div class="logo">
                            <img src={{asset('assets/logos/logo.png')}} alt="logo LiveMore">
                        </div>

                        <div class="enlaces">
                            <div class="close">
                                <svg loading="lazy" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
                            </div>
                            <a href=""> Principal</a>
                            <a href="{{route('todasLasCategorias')}}"> Categorias </a>
                            <a href="{{route('contacto')}}"> Contacto</a>

                            @if(auth()->user())
                                <a href="{{route('login')}}"> {{auth()->user()->name}} </a>
                            @else
                            <a href="{{route('login')}}"> Iniciar sesión </a>
                            @endif

                        </div>
                        <div class="menu">
                            <svg loading="lazy" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 18v1h-24v-1h24zm0-6v1h-24v-1h24zm0-6v1h-24v-1h24z" fill="#1040e2"/><path d="M24 19h-24v-1h24v1zm0-6h-24v-1h24v1zm0-6h-24v-1h24v1z"/></svg>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Segundo post --}}
            @if ($loop->index == 1)
                <a href="{{route('mostrarPost', $post)}}"class="postSecundario">
                    <div class="contenido">
                        <h1> {!!$post->title!!}</h1>
                        <h2> {!!$post->brief!!}</h2>
                        <h3> Articulo de {!!$post->user->name!!} {!!$post->user->surname!!}</h3>
                    </div>

                    <div class="imagen" loading="lazy" style='background-image: url(
                        @if($post->images) "http://localhost/livemore/storage/app/{{$post->images->url}}"
                        @else "https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                        @endif)'>
                    </div>
                </a>
            @endif
         @endforeach

        {{-- Post por categoria --}}
        @foreach ($categorias as $categoria)

            {{-- Si hay contenido en la categoria se mostrará, en caso contrario no. --}}
            @if($categoria->posts->count())
                <div class="categoria">
                    <a href="{{route('filtrarCategoria', $categoria)}}">
                        <h1> {{$categoria->title}}</h1>
                    </a>
                    <span> </span>
                </div>

                <div class="posts_categoria">
                    @foreach ($categoria->posts as $postCategoria)
                        @if ($loop->index <= 3)
                            <div class="post">
                                @if($postCategoria->images)
                                    <img loading="lazy" src="http://localhost/livemore/storage/app/{{$postCategoria->images->url}}" alt="">
                                @else
                                    <img loading="lazy" src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
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
