<?php
session_start();
require_once '../utils/config.php';

if (isset($_SESSION['user_id'])) {
    $id_usuario = $_SESSION['user_id'];

    
    $stmt = $conn->prepare("SELECT id_planespagos FROM planes_pagos WHERE id_usuario = :id_usuario AND status = 'A'");
    $stmt->bindParam(':id_usuario', $id_usuario);
    $stmt->execute();
    $planExistente = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$planExistente) {
        
        $status = 'A';
        $fecha_pago = date('Y-m-d H:i:s');
        $nombre_plan = 'GOLD';
        $precio_plan = 29.55;
        $nivel_plan = 'BASICO';

        $stmt = $conn->prepare("INSERT INTO planes_pagos (id_usuario, status, fecha_pago, nombre_plan, precio_plan, nivel_plan) 
                                VALUES (:id_usuario, :status, :fecha_pago, :nombre_plan, :precio_plan, :nivel_plan)");
        
        $stmt->bindParam(':id_usuario', $id_usuario);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':fecha_pago', $fecha_pago);
        $stmt->bindParam(':nombre_plan', $nombre_plan);
        $stmt->bindParam(':precio_plan', $precio_plan);
        $stmt->bindParam(':nivel_plan', $nivel_plan);
        
        if ($stmt->execute()) {
            header("Location: /survey?alerta=success&mensaje=Pago procesado exitosamente.&titulo=Éxito");
            exit();
        } else {
            header("Location: /survey?alerta=error&mensaje=Hubo un error al procesar el pago. Inténtalo de nuevo.&titulo=Error");
            exit();
        }
    } else {
        
        header("Location: /survey?alerta=info&mensaje=Ya tienes un plan activo, por ello ya puedes acceder a tu sitio de coaching.&titulo=Información");
        exit();
    }
} else {
    header("Location: /auth?alerta=warning&mensaje=Usuario no autenticado. Inicia sesión para continuar.&titulo=Advertencia");
    exit();
}

// Cerrar la conexión
$conn = null;
?>
