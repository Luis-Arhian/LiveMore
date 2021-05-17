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
                    {!! Form::label('title', 'Nombre') !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el nombre de la categoria.']) !!}

                    {{-- Comprobación de errores al introducir nombre de categoria. --}}
                    @error('name')
                        <span class="text-danger"> Es necesario que el campo nombre tenga un valor valido. </span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el slug de la categoria.', 'readonly']) !!}
                    @error('slug')
                        <span class="text-danger"> {{$message}} </span>
                    @enderror
                </div>
                {!! Form::submit('Crear categoria', ['class' => 'btn btn-success'])!!}

                {!!FORM::close() !!}
        </div>
    </div>
</div>
@stop
