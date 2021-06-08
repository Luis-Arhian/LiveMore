<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/logos/favicon-16x16.png')}}">
    <script src="{{asset('ts/blog.js')}}"></script>
    <title> Landing Page </title>
</head>
<body>
    <main class="principal">
        <nav class="navegacion">
            <div class="navegacion contenedor-navegacion">
            	<img src={{asset('assets/logos/logo.png')}} alt="logo LiveMore">
                
            	<div class="enlaces">
                    <div class="close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
                    </div>

            	    <a href="{{route('principal')}}"> Blog</a>
            	    <a href="{{route('todasLasCategorias')}}"> Categorias </a>
            	    <a href=""> Contacto </a>
            	    <a href="{{route('login')}}"> Inicia Sesión </a>
            	</div>

                <div class="menu">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 18v1h-24v-1h24zm0-6v1h-24v-1h24zm0-6v1h-24v-1h24z" fill="#1040e2"/><path d="M24 19h-24v-1h24v1zm0-6h-24v-1h24v1zm0-6h-24v-1h24v1z"/></svg>
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
