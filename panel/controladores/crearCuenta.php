<?php
require_once '../utils/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id_rol = 3;
    $activo = 0;
    $stmt = $conn->prepare("INSERT INTO usuarios (nombres, apellidos, email, password, id_rol, activo) 
                            VALUES (:nombres, :apellidos, :email, :password, :id_rol, :activo)");
    $stmt->bindParam(':nombres', $nombres);
    $stmt->bindParam(':apellidos', $apellidos);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':id_rol', $id_rol);
    $stmt->bindParam(':activo', $activo);
    if ($stmt->execute()) {
        header("Location: /survey");
        exit;
    } else {
        echo "Error al crear la cuenta. Por favor, inténtalo de nuevo.";
    }
}
// Cerrar conexión
$conn = null;
?>
