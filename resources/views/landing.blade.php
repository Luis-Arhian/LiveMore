<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title> Landing Page </title>
</head>
<body>
    <main class="principal">
        <nav class="navegacion">
            <div class="navegacion contenedor-navegacion">
            	<div class="logo">
            	       <img src={{asset('assets/logos/logo.svg')}} alt="logo LiveMore">
            	</div>
            	<div class="enlaces">
            	    <a href="{{action([PostsController::class, 'index'])}}"> Blog</a>
            	    <a href="{{action([TiendaController::class, 'index'])}}"> Tienda </a>
            	    <a href=""> Conectate </a>
            	</div>
            </div>
       </nav>

       <div class="eslogan">
           <span class="light"> BE YOUR</span>
           <span class="regular"> OWN </span>
           <span class="medium"> CHANGE </span>

           <svg width="100%" height="100%" viewBox="0 0 657 152" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
            <g transform="matrix(1,0,0,1,-76.6758,-237.279)">
                <g transform="matrix(1,0,0,1,-55,10)">
                    <text x="127px" y="418px" style="font-family:'Rockstarswashes-Regular', 'Rockstar swashes';font-size:428.586px;">g</text>
                </g>
            </g>
          </svg>

       </div>

       <div class="registrate">
           <p>¿Aun no has comenzado tu cambio? </p>
           <button> REGISTRATE </button>
       </div>
    </main>
</body>
</html>
