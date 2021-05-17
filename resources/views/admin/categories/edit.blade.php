@extends('adminlte::page')

@section('title', 'LiveMore')

@section('js')
    <script src="{{asset('js/admin/slugmaker.js')}}"> </script>
    {{-- TODO: ajustar la libreria para que realice correctamente el slug. --}}
@endsection

@section('content_header')
    <h1> Actualizar categoria </h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong> {{session('info')}}</strong>
        </div>
    @endif
<div class="card">
    <div class="card-body">
            {!!Form::model($category, [ 'route' => ['admin.categories.update', $category], 'method' => 'PUT']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el nombre de la categoria.']) !!}

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
                {!! Form::submit('Actualizar categoria', ['class' => 'btn btn-success'])!!}

                {!!FORM::close() !!}
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
