<?php

namespace App;

use ArdaGnsrn\Ollama\Ollama;
    /**
     * Clase OllamaAiService
     * Genera respuestas usando Ollama
    */
class OllamaAiService {
    protected $client;

    public function __construct() {
        $this->client = Ollama::client();
    }

    public function generateResponse($input) {

        $response = $this->client->chat()->create([
            'model' => 'deepseek-r1:1.5b',
            'messages' => [
                ['role' => 'user', 'content' => $input]
            ]
        ]);

        return $response->message->content;
    }
}