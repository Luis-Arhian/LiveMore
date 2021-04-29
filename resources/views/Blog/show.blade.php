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
        <img src="http://localhost/livemore/storage/{{$post->images[0]->url}}" alt="Imágen del post">
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

    <div class="comentarios">
        <h2> Comentarios </h2>
        <span> </span>

        @foreach ($comments as $comentario)
            <p>{{$comentario->id}}</p>
        @endforeach
    </div>
    @stop
