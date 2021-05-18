@extends('layouts.maestro')

@section('js')
        <script src="{{asset('ts/blog.js')}}"></script>
@stop

    @section('css', asset("css/articulos.css"));
    @section('titulo', $post->title)

    @section('contenido')

    <div class="title">
        <h1> {{$post->title}} </h1>

        <div class="autor">
            <h2> {{$post->user->name}} {{$post->user->surname}} </h2>
        </div>

        <span> </span>
    </div>

    <div class="brief">
        <p>
            {!!$post->brief!!}
        </p>
    </div>

    <div class="imagen">
        @if($post->images)
            <img src="http://localhost/livemore/storage/app/{{$post->images->url}}" alt="Imagen del post">
        @else
            <img src="http://localhost/livemore/storage/app/posts_images/default_image.jpg" alt="Imagen del post">
        @endif

        <span> </span>
    </div>

    <div class="contenido">
        {!!$post->content!!}
    </div>

    <div class="post_relacionados">
        <h1> Post Relacionados </h1>
        <span> </span>

        <div class="posts">
            @foreach ($post_similares as $relacionado)
                <a href="">
                    @if($relacionado->images)
                        <img src="http://localhost/livemore/storage/app/public/{{$relacionado->images->url}}" alt="">

                    @else
                        <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Error al cargar la imágen">
                    @endif

                    <h2> {{$relacionado->title}}</h2>
                </a>
            @endforeach
        </div>

    </div>

    {{-- TODO: Realizar estructura para insertar comentarios solamente si estas registrado. --}}
    <div class="comentarios">
        <h2> Comentarios </h2>
        <span> </span>

        <div class="enviarComentario">
            {!! Form::open(['route' => 'comments.store', 'method' => 'POST']) !!}
            {!! Form::textarea('content', null, ['placeholder' => 'Introduce un comentario.']) !!}
            {!! Form::hidden('post_id', $post->id) !!}

            {!! Form::submit('Enviar') !!}

            {!! Form::close() !!}
        </div>
        @foreach ($comments as $comentario)
            <div class="comentario">
                <div class="autor">
                    <p>{{$comentario->user-> name}} {{$comentario->user->surname}}</p>
                    <p> {{$comentario->created_at}}</p>
                    <span> </span>
                </div>

                <h3>{{$comentario->content}}</h3>

            </div>
        @endforeach
    </div>
    @stop
