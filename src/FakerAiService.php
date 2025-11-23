<?php

namespace App;

/**
 * Clase FakerAiService
 * Genera respuestas de forma aleatoria
 */
class FakerAiService {
    public function generateResponse($input) {

        sleep(2);
        if(strpos($input, 'PHP') !== false){
            return 'AI: ' . $input;
        }else{
            return 'AI: No se puede responder a esa pregunta';
        }
    
    }
}