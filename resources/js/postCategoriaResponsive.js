'use strict';
document.addEventListener('DOMContentLoaded', function () {
    var principales = document.getElementsByClassName('principales');
    if (principales[0].classList.contains('activo')) {
        principales[0].classList.remove('activo');
    }
});
