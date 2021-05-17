@extends('layouts.maestro')

@section('css', asset("css/categorias.css"))

@section('contenido')
    <div class="titulo">
        <h1> Categorias </h1>
        <span> </span>
    </div>

    <div class="categorias">
        @foreach ($categorias as $categoria)
            <a href="{{route('filtrarCategoria', $categoria)}}"class="categoria">
                <img src="@if($categoria->images) http://localhost/livemore/storage/{{$categoria->images[0]->url}} @else https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80 @endif" alt="{{$categoria->name}}">

                <h3> {{$categoria->name }}</h3>
            </a>

        @endforeach
    </div>

@stop
