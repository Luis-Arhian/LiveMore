@extends('layouts.maestro')

@section('css', asset("css/categorias.css"))

@section('contenido')
    <div class="categorias">
        @foreach ($categorias as $categoria)
            <h2> {{$categoria->images}}</h2>

        @endforeach
    </div>
@stop
