@extends('layouts.maestro')
    @section('css', asset("css/postCategoria.css"))

    @section('titulo', $categoria->title)
    @section('contenido')
        <div class="categoria">
            <div class="title">
                <h1> {{$categoria -> title}} </h1>
                <span> </span>
            </div>

            <div class="posts">
                @foreach ($postCategoria as $post)
                    @if ($loop->index < 2)
                            <div class="principales">
                                <div class="content">
                                    <h1> {{$post->title}} </h1>
                                    <h2> {{$post->brief}}</h2>
                                    <h3> {{$post->user->name}} {{$post->user->surname}} </h3>
                                </div>
                                @if($post->images)
                                    <img src="http://localhost/livemore/storage/app/{{$post->images->url}}" alt="">
                                @else
                                    <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
                                @endif
                            </div>

                    @elseif ($loop->index == 3)
                        <div class="grid">
                            @foreach ($postCategoria as $post2)
                                @if ($loop->index >= 2)
                                <div class="post">
                                    @if($post2->images)
                                        <img src="http://localhost/livemore/storage/app/{{$post2->images->url}}" alt="">
                                    @else
                                        <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
                                    @endif

                                    <h3> {{$post2->title}}</h3>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @stop
