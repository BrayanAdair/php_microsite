<?php
session_start();
date_default_timezone_set('America/Mexico_City');
require_once(dirname(__DIR__) . '/vendor/autoload.php');
require_once('stripe.php');
require_once('../utils/config.php');

\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

if (isset($_SESSION['user_id'])) {
    $id_usuario = $_SESSION['user_id'];

    // Obtener el plan y precio de la URL
    $nombre_plan = isset($_POST['plan']) ? $_POST['plan'] : 'Silver';
    $precio_plan = isset($_POST['price']) ? $_POST['price'] : 24.90;  // Precio por defecto


    try {
        $token = $_POST['stripeToken'];
        $amount = $precio_plan;  // Utiliza el precio dinámico
        $currency = 'eur';  // Moneda fija en euros

        $charge = \Stripe\Charge::create([
            'amount' => $amount * 100,  // Convertir a céntimos
            'currency' => $currency,
            'description' => 'Pago del plan ' . $nombre_plan,
            'source' => $token,
        ]);

        // Verificar si el usuario ya tiene un plan activo
        $stmt = $conn->prepare("SELECT id_planespagos FROM planes_pagos WHERE id_usuario = :id_usuario AND status = 'A'");
        $stmt->bindParam(':id_usuario', $id_usuario);
        $stmt->execute();
        $planExistente = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$planExistente) {
            // Insertar el nuevo plan en la base de datos
            $status = 'A';
            $fecha_pago = date('Y-m-d H:i:s');
            $precio_plan = $amount;  // Usar el valor del precio
            $nivel_plan = 'BASICO';
        
            // Usar el nombre del plan dinámico obtenido del formulario
            $stmt = $conn->prepare("INSERT INTO planes_pagos (id_usuario, status, fecha_pago, nombre_plan, precio_plan, nivel_plan) 
                                    VALUES (:id_usuario, :status, :fecha_pago, :nombre_plan, :precio_plan, :nivel_plan)");
            
            $stmt->bindParam(':id_usuario', $id_usuario);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':fecha_pago', $fecha_pago);
            $stmt->bindParam(':nombre_plan', $nombre_plan); // Aquí es donde usas el valor dinámico
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
            // El usuario ya tiene un plan activo
            header("Location: /survey?alerta=info&mensaje=Ya tienes un plan activo, por ello ya puedes acceder a tu sitio de coaching.&titulo=Información");
            exit();
        }
    } catch(Exception $e) {
        header("Location: /error?alerta=error&mensaje=Error al realizar el pago: " . $e->getMessage() . "&titulo=Error");
        exit();
    }
} else {
    header("Location: /auth?alerta=warning&mensaje=Usuario no autenticado. Inicia sesión para continuar.&titulo=Advertencia");
    exit();
}

// Cerrar la conexión
$conn = null;
?>
