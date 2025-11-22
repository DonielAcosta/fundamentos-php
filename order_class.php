<?php
/**
 * Order Class - Demostración de Programación Orientada a Objetos
 * Uso de clases separadas, encapsulación y métodos
 */

// Incluir la clase Curso
require_once 'Curso.php';

// Crear instancia del curso con tags iniciales
$curso = new Curso(
    "Curso Profesional de PHP y Laravel",
    "Aprende a crear aplicaciones web profesionales con PHP y Laravel",
    "Domina PHP desde cero hasta nivel avanzado y aprende Laravel, el framework más popular de PHP. Construye aplicaciones web modernas, seguras y escalables.",
    "Doniel Acosta",
    "2025-11-21",
    array("HTML", "CSS", "JavaScript", "PHP", "Laravel", "MySQL", "PostgreSQL", "MongoDB", "Redis")
);

// Agregar tags adicionales (se validará que no sean duplicados)
$curso->addTag("Python");
$curso->addTag("JavaScript"); // Duplicado - no se agregará
$curso->addTag("React");
$curso->addTag("Node.js");
$curso->addTag("Express");
$curso->addTag("MongoDB"); // Duplicado - no se agregará
$curso->addTag("PostgreSQL"); // Duplicado - no se agregará

// Asegurar que los tags estén ordenados alfabéticamente
$curso->sortTags();

// Obtener información del curso
$totalTags = count($curso->getTags());
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($curso->getDescription(), ENT_QUOTES, 'UTF-8'); ?>">
    <title><?= htmlspecialchars($curso->getTitle(), ENT_QUOTES, 'UTF-8'); ?> - POO en PHP</title>
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
            max-width: 1200px;
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
        .success-box {
            background: #e8f5e9;
            border-left: 4px solid #4caf50;
            padding: 15px 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .success-box strong {
            color: #2e7d32;
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
            <h1><?= htmlspecialchars($curso->getTitle(), ENT_QUOTES, 'UTF-8'); ?></h1>
            <p class="subtitle"><?= htmlspecialchars($curso->getSubtitle(), ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        
        <div class="content">
            <!-- Estadísticas -->
            <div class="stats">
                <div class="stat-item">
                    <div class="stat-number"><?= $totalTags; ?></div>
                    <div class="stat-label">Tecnologías</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">Ordenadas</div>
                    <div class="stat-label">Alfabéticamente</div>
                </div>
            </div>

            <!-- Descripción -->
            <div class="section">
                <h2 class="section-title">Descripción del Curso</h2>
                <p class="description"><?= htmlspecialchars($curso->getDescription(), ENT_QUOTES, 'UTF-8'); ?></p>
            </div>

            <!-- Información del curso -->
            <div class="section">
                <h2 class="section-title">Información del Curso</h2>
                <div class="info-grid">
                    <div class="info-card">
                        <strong>Autor</strong>
                        <span class="value"><?= htmlspecialchars($curso->getAuthor(), ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                    <div class="info-card">
                        <strong>Fecha de Publicación</strong>
                        <span class="value"><?= htmlspecialchars($curso->getDate(), ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Tecnologías ordenadas -->
            <div class="section">
                <h2 class="section-title">Tecnologías y Herramientas (Ordenadas Alfabéticamente)</h2>
                <div class="tags-container">
                    <?php foreach($curso->getTags() as $tag): ?>
                        <span class="tag"><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></span>
                    <?php endforeach; ?>
                </div>
                
                <div class="success-box">
                    <strong>✓ Validación Automática:</strong> Los tags duplicados se filtran automáticamente y todos los tags se ordenan alfabéticamente.
                </div>
            </div>

            <!-- Ejemplo de código -->
            <div class="section">
                <h2 class="section-title">Ejemplo de Código - Clases Separadas</h2>
                <div class="code-example">
// Archivo: Curso.php<br>
class Curso {<br>
&nbsp;&nbsp;&nbsp;&nbsp;protected $tags;<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;public function addTag($tag): void {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Valida duplicados y vacíos<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(empty($tag) || in_array($tag, $this->tags)) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->tags[] = $tag;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->sortTags();<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;public function sortTags(): void {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sort($this->tags);<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
}<br>
<br>
// Archivo: order_class.php<br>
require_once 'Curso.php';<br>
$curso = new Curso(...);<br>
$curso->addTag("Python");<br>
$curso->sortTags();
                </div>
                
                <div class="info-box">
                    <strong>Conceptos de POO aplicados:</strong> Encapsulación (propiedades protected), Separación de responsabilidades (clase en archivo separado), Métodos públicos para interactuar con la clase, Validación de datos en métodos.
                </div>
            </div>
        </div>
    </div>
</body>
</html>