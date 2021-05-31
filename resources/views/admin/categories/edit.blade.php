@extends('adminlte::page')

@section('title', 'LiveMore')

@section('css')
    <link rel="stylesheet" href="{{asset("css/createPost.css")}}">
@end

@section('js')
    <script src="{{asset('js/admin/slugmaker.js')}}"> </script>
    {{-- TODO: ajustar la libreria para que realice correctamente el slug. --}}

    <script>
         // Cambiar imagen.
         document.getElementById('file').addEventListener('change', cambiarImagen);

            function cambiarImagen(event){
                var file = event.target.files[0];

                var read = new FileReader();

                read.onload = (event) => {
                    document.getElementById('image').setAttribute('src', event.target.result);
                };

                read.readAsDataURL(file);
            }
    </script>
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
            {!!Form::model($category, [ 'route' => ['admin.categories.update', $category], 'method' => 'PUT','files'=>'true']) !!}

                <div class="form-group">
                    {!! Form::label('title', 'Nombre') !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el nombre de la categoria.']) !!}

                    {{-- Comprobación de errores al introducir nombre de categoria. --}}
                    @error('title')
                        <span class="text-danger"> Es necesario que el campo nombre tenga un valor valido. </span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el slug de la categoria.', 'readonly']) !!}
                    @error('slug')
                        <span class="text-danger"> 'El slug ya existe o no es valido.' </span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col">
                        <div class="imageContainer mb-5">
                            @if($category->images)
                                <img id="image" src="http://localhost/livemore/storage/app/{{$category->images->url}}" alt="Imagen por defecto">
                            @else
                                <img id="image" src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Imagen por defecto">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        {!! Form::label('file', 'Introduce una imagen principal para la categoria.') !!}
                        {!! Form::file('file', ['class' => 'form-control-file']) !!}

                        <p class="mt-5"> Aqui deberás introducir una imagen que creas que representa a la información que vas a introducir en la categoria, de forma que el usuario pueda hacerse una idea del contenido solamente visualizando la imagen. En caso de no introducir ninguna imagen, se introducirá una por defecto que se puede observar a la izquierda. (Si introduces una imagen esta tambien se verá a la izquierda). </p>

                        @error('file')
                            <span class="text-danger"> Debes introducir un archivo de tipo imagen. </span>
                        @enderror
                    </div>

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
