            <div class="form-group">
                {!! Form::label('title', 'Titulo: ') !!}
                {!! Form::text('title', null, ['class'=>'form-control', 'placeholder' =>'Introduzca el titulo del post.']) !!}

                @error('title')
                    <small class="text-danger"> Debes introducir un titulo para el articulo. </small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug: ') !!}
                {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder' =>'Introduzca el slug del post.', 'readonly']) !!}

                @error('slug')
                    <small class="text-danger"> {{$message}} </small>
                @enderror
            </div>

            <div class="row">
                <div class="col">
                    <div class="imageContainer mb-5">
                        @isset($post->image)
                            <img id="image" src="http://localhost/livemore/storage/app/{{$post->images->url}}" alt="Imagen por defecto">
                        @else
                            <img id="image" src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Imagen por defecto">
                        @endisset
                    </div>
                </div>
                <div class="col">
                    {!! Form::label('file', 'Introduce una imagen principal para el post.') !!}
                    {!! Form::file('file', ['class' => 'form-control-file']) !!}

                    <p class="mt-5"> Aqui deberás introducir una imagen que creas que representa a la información que vas a introducir en el árticulo, de forma que el usuario pueda hacerse una idea del contenido solamente visualizando la imagen. En caso de no introducir ninguna imagen, se introducirá una por defecto que se puede observar a la izquierda. (Si introduces una imagen esta tambien se verá a la izquierda). </p>

                    @error('file')
                        <span class="text-danger"> Debes introducir un archivo de tipo imagen. </span>
                    @enderror
                </div>

            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Categoria') !!}
                {!! Form::select('category_id', $categorias, null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('brief', 'Brief (Descripción): ') !!}
                {!! Form::textarea('brief',  null, ['class'=>'form-control', 'placeholder' => 'Introduce una descripción o resumen del post para que el usuario conozca acerca de lo que va a leer.']) !!}

                @error('brief')
                    <small class="text-danger"> Debes introducir contenido de brief. </small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('content', 'Contenido: ') !!}
                {!! Form::textarea('content',  null, ['class'=>'form-control', 'placeholder' => 'Aqui se introduce todo el contenido del post.']) !!}

                @error('content')
                    <small class="text-danger"> Debes introducir un cuerpo para el articulo. </small>
                @enderror
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
