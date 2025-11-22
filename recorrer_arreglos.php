<?php
/**
 * Recorrer Arreglos en PHP
 * Demostración del uso de foreach para recorrer arrays
 */

// Definición de variables
$curso = "Curso Profesional de PHP y Laravel";
$descripcion = "Aprende a recorrer arrays en PHP usando diferentes métodos. Domina foreach, for y otras técnicas para trabajar con estructuras de datos.";

// Array de etiquetas del curso
$tags = array(
    "HTML",
    "CSS",
    "JavaScript",
    "PHP",
    "Laravel",
    "MySQL",
    "PostgreSQL",
    "MongoDB",
    "Redis"
);

// Cursos relacionados
$cursosRelacionados = array(
    "Curso de JavaScript Moderno",
    "Curso de MySQL y Bases de Datos",
    "Curso de Laravel Avanzado",
    "Curso de Desarrollo Web Full Stack",
    "Curso de API REST con PHP"
);

// Contar elementos
$totalTags = count($tags);
$totalCursos = count($cursosRelacionados);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($descripcion, ENT_QUOTES, 'UTF-8'); ?>">
    <title><?= htmlspecialchars($curso, ENT_QUOTES, 'UTF-8'); ?> - Recorrer Arreglos</title>
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
        .header p {
            font-size: 1.2em;
            opacity: 0.95;
        }
        .content {
            padding: 40px;
        }
        .section {
            margin-bottom: 40px;
        }
        .section-title {
            color: #667eea;
            font-size: 1.8em;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #667eea;
        }
        .section-description {
            color: #666;
            margin-bottom: 20px;
            font-size: 1.1em;
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
        .cursos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .curso-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 25px;
            border-left: 4px solid #667eea;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .curso-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }
        .curso-card h3 {
            color: #667eea;
            margin-bottom: 10px;
            font-size: 1.2em;
        }
        .curso-card::before {
            content: "📚";
            font-size: 1.5em;
            display: block;
            margin-bottom: 10px;
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
        .stats {
            display: flex;
            gap: 30px;
            margin-top: 20px;
            flex-wrap: wrap;
        }
        .stat-item {
            background: white;
            padding: 15px 25px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
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
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2em;
            }
            .content {
                padding: 25px;
            }
            .cursos-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><?= htmlspecialchars($curso, ENT_QUOTES, 'UTF-8'); ?></h1>
            <p>Recorrer Arreglos con PHP</p>
        </div>
        
        <div class="content">
            <!-- Estadísticas -->
            <div class="stats">
                <div class="stat-item">
                    <div class="stat-number"><?= $totalTags; ?></div>
                    <div class="stat-label">Etiquetas</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number"><?= $totalCursos; ?></div>
                    <div class="stat-label">Cursos Relacionados</div>
                </div>
            </div>

            <!-- Etiquetas del curso -->
            <div class="section">
                <h2 class="section-title">Etiquetas del Curso</h2>
                <p class="section-description">Tecnologías y herramientas que aprenderás en este curso:</p>
                <div class="tags-container">
                    <?php foreach($tags as $tag): ?>
                        <span class="tag"><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></span>
                    <?php endforeach; ?>
                </div>
                
                <div class="info-box">
                    <strong>Método utilizado:</strong> foreach() - Recorre todos los elementos del array de forma eficiente.
                </div>
            </div>

            <!-- Cursos relacionados -->
            <div class="section">
                <h2 class="section-title">Cursos Relacionados</h2>
                <p class="section-description">Amplía tus conocimientos con estos cursos complementarios:</p>
                <div class="cursos-grid">
                    <?php foreach($cursosRelacionados as $cursoRelacionado): ?>
                        <div class="curso-card">
                            <h3><?= htmlspecialchars($cursoRelacionado, ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p>Curso complementario para profundizar tus conocimientos.</p>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="info-box">
                    <strong>Método utilizado:</strong> foreach() - Itera sobre cada elemento del array de cursos relacionados.
                </div>
            </div>
        </div>
    </div>
</body>
</html>