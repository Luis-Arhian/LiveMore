@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset("css/createPost.css")}}">
@stop

@section('title', 'LiveMore')

@section('content_header')
    <h1> Editar post </h1>
@stop

@section('js')
    <script src="{{asset('js/admin/slugmaker.js')}}"> </script>
    {{--Editor de texto enriquecido para introducir contenido en el post. --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#brief' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );

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
@stop

@section('content')
<div class="card">
        <h1> {{$post}} </h1>
        <div class="card-body">
            {!! Form::model($post, ['route'=> ['admin.posts.update', $post], 'autocomplete'=>'off', 'files' => 'true', 'method' => 'PUT'])!!}

            @include('admin.posts.partials.form')

            {!! Form::submit('Actualizar post', ['class' => 'btn btn-success'])!!}
            {!! Form::close() !!}
        </div>
    </div>

@stop
