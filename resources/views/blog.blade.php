<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Página principal </title>
</head>
<body>
    @foreach ($posts_publicados as $post)
        @foreach ($post->images as $image)
            <img src="http://localhost/livemore/{{$image->url}}" alt="{{$image->description}}">
        @endforeach
    @endforeach
</body>
</html>
