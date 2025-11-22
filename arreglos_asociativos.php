<?php
/**
 * Arreglos Asociativos en PHP
 * Demostración del uso de arrays asociativos para estructurar datos
 */

// Array asociativo con información del curso
$curso = array(
    "title" => "Curso Profesional de PHP y Laravel",
    "subtitle" => "Aprende a crear aplicaciones web profesionales con PHP y Laravel",
    "description" => "Domina PHP desde cero hasta nivel avanzado y aprende Laravel, el framework más popular de PHP. Construye aplicaciones web modernas, seguras y escalables.",
    "author" => "Doniel Acosta",
    "date" => "2025-11-21",
    "duration" => "40 horas",
    "level" => "Intermedio",
    "students" => 1250,
    "rating" => 4.8,
    "tags" => array(
        "HTML",
        "CSS",
        "JavaScript",
        "PHP",
        "Laravel",
        "MySQL",
        "PostgreSQL",
        "MongoDB",
        "Redis"
    ),
);

// Contar elementos
$totalTags = count($curso["tags"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($curso["description"], ENT_QUOTES, 'UTF-8'); ?>">
    <title><?= htmlspecialchars($curso["title"], ENT_QUOTES, 'UTF-8'); ?> - Arreglos Asociativos</title>
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
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 50px 40px;
            text-align: center;
        }
        .header h1 {
            font-size: 2.8em;
            margin-bottom: 15px;
            font-weight: 700;
        }
        .header .subtitle {
            font-size: 1.3em;
            opacity: 0.95;
            margin-bottom: 10px;
        }
        .content {
            padding: 40px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .info-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            border-left: 4px solid #667eea;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .info-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        .info-card strong {
            color: #667eea;
            display: block;
            margin-bottom: 8px;
            font-size: 0.9em;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .info-card .value {
            font-size: 1.2em;
            font-weight: 600;
            color: #333;
        }
        .section {
            margin-bottom: 30px;
        }
        .section-title {
            color: #667eea;
            font-size: 1.8em;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #667eea;
        }
        .description {
            color: #666;
            font-size: 1.1em;
            line-height: 1.8;
            margin-bottom: 30px;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }
        .tags-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .tag {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.95em;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .tag:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .stats {
            display: flex;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
        }
        .stat-item {
            background: white;
            padding: 15px 25px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex: 1;
            min-width: 120px;
        }
        .stat-number {
            font-size: 2em;
            font-weight: bold;
            color: #667eea;
        }
        .stat-label {
            color: #666;
            font-size: 0.9em;
            margin-top: 5px;
        }
        .code-example {
            background: #2d3748;
            color: #e2e8f0;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            font-family: 'Courier New', monospace;
            font-size: 0.9em;
            overflow-x: auto;
        }
        .info-box {
            background: #e3f2fd;
            border-left: 4px solid #2196f3;
            padding: 15px 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .info-box strong {
            color: #1976d2;
        }
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2em;
            }
            .content {
                padding: 25px;
            }
            .info-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><?= htmlspecialchars($curso["title"], ENT_QUOTES, 'UTF-8'); ?></h1>
            <p class="subtitle"><?= htmlspecialchars($curso["subtitle"], ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        
        <div class="content">
            <!-- Estadísticas -->
            <div class="stats">
                <div class="stat-item">
                    <div class="stat-number"><?= number_format($curso["students"]); ?></div>
                    <div class="stat-label">Estudiantes</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number"><?= $curso["rating"] ?></div>
                    <div class="stat-label">Calificación</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number"><?= $curso["duration"] ?></div>
                    <div class="stat-label">Duración</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number"><?= $totalTags ?></div>
                    <div class="stat-label">Tecnologías</div>
                </div>
            </div>

            <!-- Descripción -->
            <div class="section">
                <h2 class="section-title">Descripción del Curso</h2>
                <p class="description"><?= htmlspecialchars($curso["description"], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>

            <!-- Información del curso -->
            <div class="section">
                <h2 class="section-title">Información del Curso</h2>
                <div class="info-grid">
                    <div class="info-card">
                        <strong>Autor</strong>
                        <span class="value"><?= htmlspecialchars($curso["author"], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                    <div class="info-card">
                        <strong>Fecha de Publicación</strong>
                        <span class="value"><?= htmlspecialchars($curso["date"], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                    <div class="info-card">
                        <strong>Nivel</strong>
                        <span class="value"><?= htmlspecialchars($curso["level"], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                    <div class="info-card">
                        <strong>Duración</strong>
                        <span class="value"><?= htmlspecialchars($curso["duration"], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Etiquetas -->
            <div class="section">
                <h2 class="section-title">Tecnologías y Herramientas</h2>
                <div class="tags-container">
                    <?php foreach($curso["tags"] as $tag): ?>
                        <span class="tag"><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Ejemplo de código -->
            <div class="section">
                <h2 class="section-title">Ejemplo de Array Asociativo</h2>
                <div class="code-example">
$curso = array(<br>
&nbsp;&nbsp;&nbsp;&nbsp;"title" => "Curso Profesional de PHP y Laravel",<br>
&nbsp;&nbsp;&nbsp;&nbsp;"subtitle" => "Aprende a crear aplicaciones...",<br>
&nbsp;&nbsp;&nbsp;&nbsp;"author" => "Doniel Acosta",<br>
&nbsp;&nbsp;&nbsp;&nbsp;"date" => "2025-11-21",<br>
&nbsp;&nbsp;&nbsp;&nbsp;"tags" => array("HTML", "CSS", "JavaScript", ...)<br>
);
                </div>
                
                <div class="info-box">
                    <strong>Nota:</strong> Los arrays asociativos permiten acceder a los valores mediante claves descriptivas en lugar de índices numéricos, lo que hace el código más legible y mantenible.
                </div>
            </div>
        </div>
    </div>
</body>
</html>