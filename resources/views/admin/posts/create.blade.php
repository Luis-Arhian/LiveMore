@extends('adminlte::page')

@section('title', 'LiveMore')

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
    </script>
@stop

@section('content_header')
    <h1> Nuevo post </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.posts.store', 'autocomplete'=>'off'])!!}

            <div class="form-group">
                {!! Form::label('name', 'Titulo: ') !!}
                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' =>'Introduzca el titulo del post.']) !!}

                {!! Form::label('slug', 'Slug: ') !!}
                {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder' =>'Introduzca el slug del post.', 'readonly']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Categoria') !!}
                {!! Form::select('category_id', $categorias, null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('brief', 'Brief (Descripción): ') !!}
                {!! Form::textarea('brief',  null, ['class'=>'form-control', 'placeholder' => 'Introduce una descripción o resumen del post para que el usuario conozca acerca de lo que va a leer.']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('content', 'Contenido: ') !!}
                {!! Form::textarea('content',  null, ['class'=>'form-control', 'placeholder' => 'Aqui se introduce todo el contenido del post.']) !!}
            </div>

            <div class="form-group">
                <p class=""> Opciones de publicación: </p>

                <label>
                    {!! Form::radio('status', 0, true) !!}
                    Sin publicar
                </label>

                <label>
                    {!! Form::radio('status', 1) !!}
                    Publicado
                </label>
            </div>
        </div>
    </div>
@stop
