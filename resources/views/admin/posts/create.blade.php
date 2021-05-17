@extends('adminlte::page')

@section('title', 'LiveMore')

@section('css')
    <link rel="stylesheet" href="{{asset("css/createPost.css")}}">
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

@section('content_header')
    <h1> Nuevo post </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.posts.store', 'autocomplete'=>'off', 'files' => 'true'])!!}

            {{-- Campo oculto para mandar el id del usuario autentificado. --}}
            {!! Form::hidden('user_id', auth()->user()->id) !!}

            @include('admin.posts.partials.form')

            {!! Form::submit('Crear post', ['class' => 'btn btn-success'])!!}
        </div>
    </div>
@stop
