// Añade una función para ocultar la pantalla de carga después de cierto tiempo
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        document.querySelector('.loading-screen').style.display = 'none';
    }, 3000); // 3000 milisegundos
});

document.getElementById('startButton').addEventListener('click', function() {
    window.location.href = 'puzzle1.php';
});