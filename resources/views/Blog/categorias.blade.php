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
                <img src="http://localhost/livemore/storage/{{$categoria->images[0]->url}}" alt="{{$categoria->name}}">

                <h3> {{$categoria->name }}</h3>
            </a>

        @endforeach
    </div>

@stop
