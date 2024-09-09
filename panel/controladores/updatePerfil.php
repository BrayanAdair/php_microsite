<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include '../utils/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_usuario = $_SESSION['user_id'];

    // Inicializa un array para los valores y otro para las columnas a actualizar
    $columns = [];
    $values = [];

    // Verificamos si los campos tienen algún valor antes de agregar al array
    if (!empty($_POST['name'])) {
        $columns[] = 'nombres = ?';
        $values[] = $_POST['name'];
    }

    if (!empty($_POST['last_name'])) {
        $columns[] = 'apellidos = ?';
        $values[] = $_POST['last_name'];
    }

    if (!empty($_POST['email'])) {
        $columns[] = 'email = ?';
        $values[] = $_POST['email'];
    }

    if (!empty($_POST['password'])) {
        $columns[] = 'password = ?';
        $values[] = $_POST['password']; // Contraseña en texto plano
    }

    // Manejo de la imagen de perfil
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
        // Limitar el tamaño a 2MB
        if ($_FILES['profile_image']['size'] > 2097152) { // 2MB
            header("Location: /set-profile?alerta=error&mensaje=El archivo es demasiado grande. Máximo 2MB.&titulo=Error");
            exit;
        }

        // Comprobar el tipo de archivo
        $imageFileType = strtolower(pathinfo($_FILES['profile_image']['name'], PATHINFO_EXTENSION));
        $allowedFormats = ['jpg', 'jpeg', 'png'];
        if (!in_array($imageFileType, $allowedFormats)) {
            header("Location: /set-profile?alerta=error&mensaje=Solo se permiten archivos JPG, JPEG y PNG.&titulo=Error");
            exit;
        }

        // Leer el contenido del archivo para almacenarlo en el campo MEDIUMBLOB
        $imgContent = file_get_contents($_FILES['profile_image']['tmp_name']);

        // Añadir la imagen al array de valores
        $columns[] = 'foto = ?';
        $values[] = $imgContent;
    } elseif ($_FILES['profile_image']['error'] !== UPLOAD_ERR_NO_FILE) {
        // Si hay un error que no es el de no haber seleccionado archivo
        header("Location: /set-profile?alerta=error&mensaje=Error al cargar la imagen.&titulo=Error");
        exit;
    }

    // Verificamos si hay columnas para actualizar
    if (!empty($columns)) {
        // Construimos dinámicamente la consulta con solo las columnas que se van a actualizar
        $sql = "UPDATE usuarios SET " . implode(', ', $columns) . " WHERE id_usuario = ?";
        $values[] = $id_usuario; // Añadimos el ID del usuario al final de los valores
        $stmt = $conn->prepare($sql);
        $stmt->execute($values);

        // Si el update fue exitoso, actualizamos los valores de la sesión
        if ($stmt->rowCount() > 0) {
            if (!empty($_POST['name'])) {
                $_SESSION['user_nombres'] = $_POST['name'];
            }
            if (!empty($_POST['last_name'])) {
                $_SESSION['user_apellidos'] = $_POST['last_name'];
            }
            if (!empty($_POST['email'])) {
                $_SESSION['user_email'] = $_POST['email'];
            }

            header("Location: /profile?alerta=success&mensaje=Perfil actualizado correctamente.&titulo=Éxito");
        } else {
            header("Location: /set-profile?alerta=error&mensaje=No se pudo actualizar el perfil.&titulo=Error");
        }
    } else {
        header("Location: /set-profile?alerta=error&mensaje=No se proporcionaron datos para actualizar.&titulo=Error");
    }
    exit;
}