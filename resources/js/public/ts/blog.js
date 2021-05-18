document.addEventListener('DOMContentLoaded', function () {
    var boton = document.querySelector('.menu');
    boton.addEventListener('click', function () {
        var menu = document.querySelector('.enlaces');
        if (!menu.classList.contains('activo')) {
            menu.classList.add('activo');
            var cerrar = document.querySelector('.close');
            cerrar.addEventListener('click', function () {
                if (menu.classList.contains('activo')) {
                    menu.classList.remove('activo');
                }
            });
        }
    });
});
