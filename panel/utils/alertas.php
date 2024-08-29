<?php
if (isset($_GET['alerta']) && isset($_GET['mensaje'])) {
    $tipo = htmlspecialchars($_GET['alerta']);
    $mensaje = htmlspecialchars($_GET['mensaje']);
    $titulo = isset($_GET['titulo']) ? htmlspecialchars($_GET['titulo']) : '';

    echo "<script type='text/javascript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: '$tipo',
                title: '$titulo',
                text: '$mensaje',
                confirmButtonText: 'Aceptar'
            }).then(function() {
                // Limpiar parámetros de la URL después de mostrar la alerta
                window.history.replaceState(null, null, window.location.pathname);
            });
        });
    </script>";
}
?>
