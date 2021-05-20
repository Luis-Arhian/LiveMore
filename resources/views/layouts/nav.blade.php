<nav class="navegador">
    <div class="navegador contenedor-navegador">
        <div class="logo">
            <img id="logoNav" src="{{asset('assets/logos/icono.svg')}}" alt="Logo LiveMore">
        </div>

        <div class="enlaces">
            <div class="close">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
            </div>

            <a href="{{route('principal')}}"> Principal </a>
            <a href="{{route('todasLasCategorias')}}"> Categorias </a>
            <a href=""> Contacto </a>
            @if(auth()->user())
                <a href="{{route('login')}}"> {{auth()->user()->name}} </a>
            @else
                <a href="{{route('login')}}"> Iniciar sesión </a>
            @endif
        </div>

        <div class="menu">
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 18v1h-24v-1h24zm0-6v1h-24v-1h24zm0-6v1h-24v-1h24z" fill="#1040e2"/><path d="M24 19h-24v-1h24v1zm0-6h-24v-1h24v1zm0-6h-24v-1h24v1z"/></svg>
        </div>
    </div>
</nav>
