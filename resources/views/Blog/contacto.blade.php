@extends('layouts.maestro')

@section('titulo', 'Contacto')
@section('css', asset("css/contacto.css"))

@section('contenido')

<div class="contenedor">

    <div class="formulario">

        <h2> Formulario de contacto </h2>

        {!! Form::open(['method'=>'post']) !!}
            {!! Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Nombre', 'required' => 'required']) !!}
            {!! Form::text('mail',null,['class'=>'form-control', 'placeholder'=>'Email', 'required' => 'required']) !!}

            {{ Form::textarea('contenido', null, ['placeholder'=>'¿En que podemos ayudarte?', 'required' => 'required']) }}

            {{ Form::submit('Enviar') }}

        {!! Form::close() !!}
    </div>

</div>

@endsection
