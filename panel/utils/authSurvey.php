<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: /auth");
    exit;
}

$stmt = $conn->prepare("
    SELECT u.activo, pp.status 
    FROM usuarios u
    LEFT JOIN planes_pagos pp ON u.id_usuario = pp.id_usuario
    WHERE u.id_usuario = :id_usuario
");
$stmt->bindParam(':id_usuario', $_SESSION['user_id']);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user['status'] != 'A') {
    header("Location: /payment");
    exit;
}

?>
