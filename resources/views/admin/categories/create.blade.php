@extends('adminlte::page')

@section('title', 'LiveMore')

@section('js')
    <script src="{{asset('js/admin/slugmaker.js')}}"> </script>
    {{-- TODO: ajustar la libreria para que realice correctamente el slug. --}}

@endsection

@section('content_header')
    <h1> Crear nueva categoria </h1>
@stop


@section('content')
<div class="card">
    <div class="card-body">
            {!!Form::open(['route' => 'admin.categories.store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el nombre de la categoria.']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el slug de la categoria.', 'readonly']) !!}
                </div>
                {!! Form::submit('Crear categoria', ['class' => 'btn btn-success'])!!}

                {!!FORM::close() !!}
        </div>
    </div>
@stop
