<?php

class TuControlador extends ControladorBase {
    public function procesarPrompt() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $prompt = $_POST['prompt'];

            // Aquí llamas a tu función para obtener la respuesta de la IA
            $respuestaIA = $this->obtenerRespuestaChatGPT($prompt);

            // Devuelves la respuesta como texto plano
            echo $respuestaIA;
        }
    }

    private function obtenerRespuestaChatGPT($mensaje) {
        $apiKey = 'API-KEY-JEJE';
        $client = new GuzzleHttp\Client();

        $response = $client->post('https://api.openai.com/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'gpt-4',
                'messages' => [
                    ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                    ['role' => 'user', 'content' => $mensaje],
                ],
                'max_tokens' => 150,
            ],
        ]);

        $respuesta = json_decode($response->getBody(), true);
        return $respuesta['choices'][0]['message']['content'];
    }
}
?>