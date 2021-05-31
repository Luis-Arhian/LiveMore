document.addEventListener('DOMContentLoaded', function(){

    // Obtenemos el nombre que se le quiere dar al sitio y le agregamos guiones para crear el slug que servirá para crear url amigables.
    var titulo = document.getElementById('title') || document.getElementById('name');

    titulo.addEventListener('keyup', function(){
        var slug = titulo.value;
        slug = slug.replaceAll(" ", "-");

        console.log(slug);
        var campoSlug = document.getElementById('slug');
        campoSlug.value = slug;
    });

});
