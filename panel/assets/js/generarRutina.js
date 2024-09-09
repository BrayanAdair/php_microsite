$(document).ready(function() {
    $('#generarRutinaButton').click(function(e) {
        e.preventDefault();

        $.ajax({
            url: 'controladores/generarRutina.php', // Ajusta la ruta si es necesario
            method: 'POST',
            success: function(response) {
                $('#resultadoRutina').html('<b>' + response + '</b>');
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    });
});
