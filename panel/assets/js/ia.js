$(document).ready(function() {
    $('#probarButton').click(function(e) {
        e.preventDefault();
        
        const prompt = $('#promptInput').val();

        $.ajax({
            url: 'controladores/ia.php',
            method: 'POST',
            data: { prompt: prompt },
            success: function(response) {
                $('#resultadoPrompt').html('<b>' + response + '</b>');
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    });

    $('#borrarButton').click(function(e) {
        e.preventDefault();
        $('#promptInput').val('');
        $('#resultadoPrompt').html('<b>Aquí se visualiza el prompt ejecutado</b>');
    });
});
