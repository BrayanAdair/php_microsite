<?php
require_once '../utils/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id_rol = 3;
    $activo = 0;

    // Verificar si el correo ya existe
    $stmt = $conn->prepare("SELECT COUNT(*) FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        header("Location: /auth?alerta=warning&mensaje=Lo sentimos, ya existe una cuenta con este correo.&titulo=Advertencia");
        exit;
    } else {
        // Insertar nueva cuenta
        $stmt = $conn->prepare("INSERT INTO usuarios (nombres, apellidos, email, password, id_rol, activo) 
                                VALUES (:nombres, :apellidos, :email, :password, :id_rol, :activo)");
        $stmt->bindParam(':nombres', $nombres);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':id_rol', $id_rol);
        $stmt->bindParam(':activo', $activo);

        if ($stmt->execute()) {
            header("Location: /auth?alerta=success&mensaje=La cuenta se ha creado exitosamente.&titulo=Éxito");
            exit;
        } else {
            header("Location: /auth?alerta=error&mensaje=Hubo un error al crear la cuenta.&titulo=Error");
            exit;
        }
    }
}
// Cerrar conexión
$conn = null;
?>
