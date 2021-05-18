document.addEventListener('DOMContentLoaded', function(){

    let boton = document.querySelector('.menu');

    boton.addEventListener('click', function(){
        let menu = document.querySelector('.enlaces');

        if (!menu.classList.contains('activo')){
            menu.classList.add('activo');

            let cerrar = document.querySelector('.close');
            cerrar.addEventListener('click', function(){
                if (menu.classList.contains('activo')){
                    menu.classList.remove('activo');
                }
            });
        }
    });
});