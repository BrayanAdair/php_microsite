<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: /auth");
    exit;
}
// Verificar si el usuario tiene el rol adecuado (1 o 2)
if (in_array($_SESSION['user_role'], [1, 2])) {
    if (basename($_SERVER['PHP_SELF']) !== 'index.php') {
        header("Location: /panel/index.php");
        exit;
    }
} else {
    header("Location: /");
    exit;
}
?>
