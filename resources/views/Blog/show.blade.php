@extends('layouts.maestro')

    @section('css', asset("css/articulos.css"));
    @section('contenido')

    <div class="title">
        <h1> {{$post->title}} </h1>

        <div class="autor">
            <h2> {{$post->user->name}} {{$post->user->surname}} </h2>
        </div>

        <span> </span>
    </div>

    <div class="brief">
        <p>
            {{$post->brief}} {{$post->brief}}
        </p>
    </div>

    <div class="imagen">
        <img src="http://localhost/livemore/storage/{{$post->images[0]->url}}" alt="Imagen del post">
        <span> </span>
    </div>

    <div class="contenido">
        {{$post->content}}
    </div>

    <div class="post_relacionados">
        <h1> Post Relacionados </h1>
        <span> </span>

        <div class="posts">
            @foreach ($post_similares as $relacionado)
                <a href="">
                    <img src="http://localhost/livemore/storage/{{$relacionado->images[0]->url}}" alt="">
                    <h2> {{$relacionado->title}}</h2>
                </a>
            @endforeach
        </div>

    </div>

    {{-- TODO: Realizar estructura para insertar comentarios solamente si estas registrado. --}}
    <div class="comentarios">
        <h2> Comentarios </h2>
        <span> </span>

        @foreach ($comments as $comentario)
            <div class="comentario">
                <div class="autor">
                    <p>{{$comentario->user-> name}} {{$comentario->user->surname}}</p>
                    <p> {{$comentario->created_at}}</p>
                    <span> </span>
                </div>

                <h3>{{$comentario->content}}</h3>

            </div>
        @endforeach
    </div>
    @stop