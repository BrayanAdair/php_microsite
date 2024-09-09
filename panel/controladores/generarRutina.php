<?php
require_once __DIR__ . '../../vendor/autoload.php';
require_once './utils/config.php';

class GenerarRutinaController {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function generarRutina($user_id) {
        // Verifica si el usuario tiene un plan activo
        $stmt = $this->conn->prepare("SELECT id_planespagos FROM planes_pagos WHERE id_usuario = :user_id AND status = 'A'");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        $plan = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$plan) {
            return "No se encontró un plan activo.";
        }

        $id_planespagos = $plan['id_planespagos'];

        // Obtiene las respuestas del usuario desde la tabla form_parametros
        $stmt = $this->conn->prepare("SELECT * FROM form_parametros WHERE id_planespagos = :id_planespagos");
        $stmt->bindParam(':id_planespagos', $id_planespagos);
        $stmt->execute();
        $respuestas = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$respuestas) {
            return "No se encontraron respuestas para este usuario.";
        }

        // Aquí puedes crear un array con las respuestas que serán enviadas a OpenAI
        $datos = [
            "experienciaGeneral" => [
                "tiempoEntrenando" => $respuestas['askExp1'],
                "frecuenciaEntrenamiento" => $respuestas['askExp2'],
                "nivelConfianza" => $respuestas['askExp3'],
                "participacionProgramas" => $respuestas['askExp4']
            ],
            "conocimientoProgramacion" => [
                "crearAdaptarPrograma" => $respuestas['askCoEntre1'],
                "principiosPeriodizacion" => $respuestas['askCoEntre2']
            ],
            "progresionAdaptacion" => [
                "monitoreoProgresos" => $respuestas['askCoProgre1'],
                "corregirErroresTecnicos" => $respuestas['askCoProgre2']
            ],
            "temporada" => "off-season"  // Valor estático como mencionaste
        ];

        // Llama a la función para obtener la respuesta de la IA
        $respuestaIA = $this->obtenerRespuestaChatGPT(json_encode($datos));
        return $respuestaIA;
    }

    private function obtenerRespuestaChatGPT($mensaje) {
        $apiKey = 'sk-proj-APIKEY';
        $client = new GuzzleHttp\Client();

        $response = $client->post('https://api.openai.com/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'gpt-4',
                'messages' => [
                    ['role' => 'system', 'content' => 'Eres un asistente de IA que crea rutinas de entrenamiento personalizadas.'],
                    ['role' => 'user', 'content' => $mensaje],
                ],
                'max_tokens' => 150,
            ],
        ]);

        $respuesta = json_decode($response->getBody(), true);
        return $respuesta['choices'][0]['message']['content'];
    }
}

// Instancia del controlador y llamado al método
if (isset($_SESSION['user_id'])) {
    $controller = new GenerarRutinaController($conn);
    echo $controller->generarRutina($_SESSION['user_id']);
} else {
    echo "Usuario no logueado.";
}
