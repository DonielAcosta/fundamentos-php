<?php
/**
 * Variables en PHP
 * Demostración del uso de variables y su integración con HTML
 */

// Definición de variables
$curso = "Curso Profesional de PHP y Laravel";
$descripcion = "Aprende PHP desde cero hasta nivel avanzado y domina Laravel, el framework más popular de PHP.";
$instructor = "Equipo de Desarrollo";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($descripcion, ENT_QUOTES, 'UTF-8'); ?>">
    <title><?= htmlspecialchars($curso, ENT_QUOTES, 'UTF-8'); ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            max-width: 800px;
            width: 100%;
        }
        h1 {
            color: #667eea;
            margin-bottom: 20px;
            font-size: 2.5em;
            text-align: center;
        }
        .curso-title {
            color: #764ba2;
            font-weight: bold;
        }
        .info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            border-left: 4px solid #667eea;
        }
        .info p {
            margin-bottom: 10px;
        }
        .info strong {
            color: #667eea;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido al <span class="curso-title"><?= htmlspecialchars($curso, ENT_QUOTES, 'UTF-8'); ?></span></h1>
        
        <div class="info">
            <p><strong>Descripción:</strong> <?= htmlspecialchars($descripcion, ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>Instructor:</strong> <?= htmlspecialchars($instructor, ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>Lenguaje:</strong> PHP 8.x</p>
            <p><strong>Framework:</strong> Laravel</p>
        </div>
    </div>
</body>
</html>