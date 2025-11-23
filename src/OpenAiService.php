<?php

namespace App;

use OpenAI;
    /**
     * Clase OllamaAiService
     * Genera respuestas usando Ollama
    */
class OpenAiService {
    protected $client;

    public function __construct() {
        $this->client = OpenAI::client('sk-proj-1234567890');
    }

    public function generateResponse($input) {

        $response = $this->client->chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $input]
            ]
        ]);

        return $response->choices[0]['message']['content'];
    }
}