<?php
if (file_exists('../panel/utils/config.php')) {
    include '../panel/utils/config.php';
} else {
    die('Error: no se encontró el archivo de configuración.');
}

function getRutinas() {
    global $conn;

    try {
        $stmt = $conn->prepare("SELECT titulo, descripcion FROM rutinas");
        $stmt->execute();
        
        // Fetch todas las rutinas
        $rutinas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rutinas;

    } catch(PDOException $e) {
        return [];
    }
}
?>
