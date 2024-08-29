<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once '../utils/config.php';

// Asegúrate de que el usuario esté logueado
if (!isset($_SESSION['user_id'])) {
    header("Location: /auth?alerta=warning&mensaje=Debes iniciar sesión para completar la encuesta.&titulo=Advertencia");
    exit;
}

// Obtén el id_planespagos asociado al usuario logueado
$stmt = $conn->prepare("SELECT id_planespagos FROM planes_pagos WHERE id_usuario = :id_usuario AND status = 'A'");
$stmt->bindParam(':id_usuario', $_SESSION['user_id']);
$stmt->execute();
$plan = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$plan) {
    header("Location: /survey?alerta=error&mensaje=No se encontró un plan de pagos activo para este usuario.&titulo=Error");
    exit;
}

$id_planespagos = $plan['id_planespagos'];

// Recoge las respuestas seleccionadas en el formulario, asegurando que no sean nulas
$askExp1 = $_POST['q1resp1'] ?? $_POST['q1resp2'] ?? $_POST['q1resp3'] ?? null;
$askExp2 = $_POST['q2resp1'] ?? $_POST['q2resp2'] ?? $_POST['q2resp3'] ?? null;
$askExp3 = $_POST['q3resp1'] ?? $_POST['q3resp2'] ?? $_POST['q3resp3'] ?? null;
$askExp4 = $_POST['q4resp1'] ?? $_POST['q4resp2'] ?? $_POST['q4resp3'] ?? null;
$askCoEntre1 = $_POST['q5resp1'] ?? $_POST['q5resp2'] ?? $_POST['q5resp3'] ?? null;
$askCoEntre2 = $_POST['q6resp1'] ?? $_POST['q6resp2'] ?? $_POST['q6resp3'] ?? null;
$askCoProgre1 = $_POST['q7resp1'] ?? $_POST['q7resp2'] ?? $_POST['q7resp3'] ?? null;
$askCoProgre2 = $_POST['q8resp1'] ?? $_POST['q8resp2'] ?? $_POST['q8resp3'] ?? null;

// Verifica si ya existen respuestas para este id_planespagos
$stmt = $conn->prepare("SELECT COUNT(*) FROM form_parametros WHERE id_planespagos = :id_planespagos");
$stmt->bindParam(':id_planespagos', $id_planespagos);
$stmt->execute();
$respuestasExistentes = $stmt->fetchColumn();

if ($respuestasExistentes > 0) {
    // Si ya existen respuestas, realiza un UPDATE
    $stmt = $conn->prepare("
        UPDATE form_parametros 
        SET askExp1 = :askExp1, askExp2 = :askExp2, askExp3 = :askExp3, askExp4 = :askExp4, 
            askCoEntre1 = :askCoEntre1, askCoEntre2 = :askCoEntre2, 
            askCoProgre1 = :askCoProgre1, askCoProgre2 = :askCoProgre2
        WHERE id_planespagos = :id_planespagos
    ");
} else {
    // Si no existen respuestas, realiza un INSERT
    $stmt = $conn->prepare("
        INSERT INTO form_parametros (askExp1, askExp2, askExp3, askExp4, askCoEntre1, askCoEntre2, askCoProgre1, askCoProgre2, id_planespagos)
        VALUES (:askExp1, :askExp2, :askExp3, :askExp4, :askCoEntre1, :askCoEntre2, :askCoProgre1, :askCoProgre2, :id_planespagos)
    ");
}

$stmt->bindParam(':askExp1', $askExp1);
$stmt->bindParam(':askExp2', $askExp2);
$stmt->bindParam(':askExp3', $askExp3);
$stmt->bindParam(':askExp4', $askExp4);
$stmt->bindParam(':askCoEntre1', $askCoEntre1);
$stmt->bindParam(':askCoEntre2', $askCoEntre2);
$stmt->bindParam(':askCoProgre1', $askCoProgre1);
$stmt->bindParam(':askCoProgre2', $askCoProgre2);
$stmt->bindParam(':id_planespagos', $id_planespagos);

if ($stmt->execute()) {
    // Actualiza la columna "activo" en la tabla "usuarios"
    $stmt = $conn->prepare("UPDATE usuarios SET activo = 1 WHERE id_usuario = :id_usuario");
    $stmt->bindParam(':id_usuario', $_SESSION['user_id']);
    $stmt->execute();

    // Redirige al perfil después de la operación exitosa
    header("Location: /profile?alerta=success&mensaje=Respuestas enviadas exitosamente.&titulo=Éxito");
    exit;
} else {
    header("Location: /survey?alerta=error&mensaje=Hubo un error al enviar tus respuestas. Por favor, inténtalo de nuevo.&titulo=Error");
    exit;
}

// Cerrar conexión
$conn = null;
?>
