//funcion para subir imagen draggable

    document.querySelector('.file-upload-browse').addEventListener('click', function() {
        const fileInput = document.querySelector('.file-upload-default');
        fileInput.click();
    });

    document.querySelector('.file-upload-default').addEventListener('change', function() {
        const fileName = this.files[0].name;
        const fileInputDisplay = document.querySelector('.file-upload-info');
        fileInputDisplay.value = fileName;
    });