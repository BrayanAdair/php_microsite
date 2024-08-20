<?php
require_once '../modelos/RutinaModel.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $duracion = $_POST["duracion"];
    $imgContent = null;

    if (isset($_FILES["img"]) && $_FILES["img"]["error"][0] == 0) {
        if ($_FILES["img"]["size"][0] > 2097152) { // 2MB
            echo "El archivo es demasiado grande.";
            exit;
        }

        $imageFileType = strtolower(pathinfo($_FILES["img"]["name"][0], PATHINFO_EXTENSION));
        $allowedFormats = ['jpg', 'jpeg', 'png'];
        if (!in_array($imageFileType, $allowedFormats)) {
            echo "Solo se permiten archivos JPG, JPEG y PNG.";
            exit;
        }

        $imgContent = file_get_contents($_FILES["img"]["tmp_name"][0]);
    } else {
        echo "Error en la carga: ";
        print_r($_FILES["img"]);
        exit;
    }

    // creamos la instancia del modelo y se mando a llamar
    $rutinaModel = new RutinaModel($conn);
    if ($rutinaModel->insertarRutina($titulo, $descripcion, $duracion, $imgContent)) {
        echo "Rutina guardada con éxito.";
    } else {
        echo "Error al guardar la rutina.";
    }
}
