<?php

require_once '../utils/config.php';

class RutinaModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function insertarRutina($titulo, $descripcion, $duracion, $imgContent) {
        $sql = "INSERT INTO rutinas (titulo, descripcion, duracion, imagen) VALUES (:titulo, :descripcion, :duracion, :imagen)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":descripcion", $descripcion);
        $stmt->bindParam(":duracion", $duracion);
        $stmt->bindParam(":imagen", $imgContent, PDO::PARAM_LOB);

        return $stmt->execute();
    }
}
