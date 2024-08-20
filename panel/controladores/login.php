<?php
session_start();
require_once '../utils/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user) {
        if ($password === $user['password']) {
            $_SESSION['user_id'] = $user['id_usuario'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role'] = $user['id_rol']; 
            $_SESSION['user_nombres'] = $user['nombres']; 
            $_SESSION['user_apellidos'] = $user['apellidos']; 
    
            if ($user['id_rol'] == 1) {
                header("Location: /panel");
            } elseif ($user['id_rol'] == 2) {
                header("Location: ../index.php?view=overlay");
            } elseif ($user['id_rol'] == 3) {
                if ($user['activo'] == 1) {
                    header("Location: /profile");
                } else {
                    header("Location: /survey");
                }
            } else {
                echo "Rol de usuario no reconocido";
            }
            exit;
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
    
}

// Cerrar conexión
$conn = null;
?>