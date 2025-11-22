<?php
/**
 * Condicionales en PHP
 * Demostración del uso de estructuras condicionales: if/else, operador ternario y switch
 */

// Definición de variables
$curso = "Curso Profesional de PHP y Laravel";
$archivado = false;
$nivel = "intermedio"; // principiante, intermedio, avanzado
$estudiantes = 1250;
$activo = true;

// Operador ternario para asignar valores condicionales
$status = $archivado ? "archivado" : "activo";
$badgeColor = $activo ? "success" : "danger";

// Determinar el nivel de dificultad con switch
$dificultad = "";
switch ($nivel) {
    case "principiante":
        $dificultad = "Fácil - Ideal para empezar";
        break;
    case "intermedio":
        $dificultad = "Moderado - Requiere conocimientos básicos";
        break;
    case "avanzado":
        $dificultad = "Avanzado - Para desarrolladores experimentados";
        break;
    default:
        $dificultad = "No especificado";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ejemplos de estructuras condicionales en PHP">
    <title><?= htmlspecialchars($curso, ENT_QUOTES, 'UTF-8'); ?> - Condicionales</title>
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
            padding: 40px 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px;
            text-align: center;
        }
        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        .content {
            padding: 40px;
        }
        .card {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
            border-left: 4px solid #667eea;
        }
        .card h2 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 1.5em;
        }
        .badge {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.9em;
            margin: 5px;
        }
        .badge-success {
            background: #28a745;
            color: white;
        }
        .badge-danger {
            background: #dc3545;
            color: white;
        }
        .badge-info {
            background: #17a2b8;
            color: white;
        }
        .badge-warning {
            background: #ffc107;
            color: #333;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }
        .info-item {
            background: white;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
        }
        .info-item strong {
            color: #667eea;
            display: block;
            margin-bottom: 5px;
        }
        .conditional-example {
            background: #2d3748;
            color: #e2e8f0;
            padding: 20px;
            border-radius: 5px;
            margin-top: 15px;
            font-family: 'Courier New', monospace;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><?= htmlspecialchars($curso, ENT_QUOTES, 'UTF-8'); ?></h1>
            <p>Ejemplos de Estructuras Condicionales en PHP</p>
        </div>
        
        <div class="content">
            <!-- Ejemplo 1: Condicional if/else -->
            <div class="card">
                <h2>1. Condicional if/else</h2>
                <?php if ($archivado): ?>
                    <p class="badge badge-danger">El curso está archivado</p>
                <?php else: ?>
                    <p class="badge badge-success">El curso está activo</p>
                <?php endif; ?>
                
                <div class="conditional-example">
                    &lt;?php if ($archivado): ?&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;El curso está archivado&lt;/p&gt;<br>
                    &lt;?php else: ?&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;El curso está activo&lt;/p&gt;<br>
                    &lt;?php endif; ?&gt;
                </div>
            </div>

            <!-- Ejemplo 2: Operador ternario -->
            <div class="card">
                <h2>2. Operador Ternario</h2>
                <p>Estado del curso: <span class="badge badge-<?= $badgeColor ?>"><?= htmlspecialchars($status, ENT_QUOTES, 'UTF-8'); ?></span></p>
                <p class="badge badge-info">Estudiantes inscritos: <?= number_format($estudiantes); ?></p>
                
                <div class="conditional-example">
                    $status = $archivado ? "archivado" : "activo";<br>
                    $badgeColor = $activo ? "success" : "danger";
                </div>
            </div>

            <!-- Ejemplo 3: Switch -->
            <div class="card">
                <h2>3. Estructura switch</h2>
                <p><strong>Nivel del curso:</strong> <?= htmlspecialchars(ucfirst($nivel), ENT_QUOTES, 'UTF-8'); ?></p>
                <p><strong>Dificultad:</strong> <?= htmlspecialchars($dificultad, ENT_QUOTES, 'UTF-8'); ?></p>
                
                <div class="conditional-example">
                    switch ($nivel) {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;case "principiante":<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$dificultad = "Fácil";<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;case "intermedio":<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$dificultad = "Moderado";<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
                    }
                </div>
            </div>

            <!-- Información adicional -->
            <div class="card">
                <h2>Información del Curso</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <strong>Estado</strong>
                        <?php if ($activo): ?>
                            <span class="badge badge-success">Activo</span>
                        <?php else: ?>
                            <span class="badge badge-danger">Inactivo</span>
                        <?php endif; ?>
                    </div>
                    <div class="info-item">
                        <strong>Nivel</strong>
                        <?php
                        $nivelBadge = "badge-info"; // Valor por defecto
                        switch ($nivel) {
                            case "principiante":
                                $nivelBadge = "badge-info";
                                break;
                            case "intermedio":
                                $nivelBadge = "badge-warning";
                                break;
                            case "avanzado":
                                $nivelBadge = "badge-danger";
                                break;
                        }
                        ?>
                        <span class="badge <?= $nivelBadge ?>"><?= htmlspecialchars(ucfirst($nivel), ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                    <div class="info-item">
                        <strong>Estudiantes</strong>
                        <?= number_format($estudiantes); ?>
                    </div>
                    <div class="info-item">
                        <strong>Archivado</strong>
                        <?= $archivado ? "Sí" : "No"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>