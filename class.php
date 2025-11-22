<?php
/**
 * Clase Autor
 * Representa la información de un autor del curso
 */
class Autor {
    public $nombre;
    public $email;
    public $bio;
    public $especialidad;
    public $redesSociales;

    public function __construct($nombre, $email, $bio, $especialidad, $redesSociales = array()) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->bio = $bio;
        $this->especialidad = $especialidad;
        $this->redesSociales = $redesSociales;
    }

    public function getNombreCompleto() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getBio() {
        return $this->bio;
    }
}

/**
 * Clase Curso
 * Representa un curso con toda su información
 */
class Curso {
    public $title;
    public $subtitle;
    public $description;
    public $author;
    public $date;
    public $tags;
    public $duration;
    public $level;
    public $price;

    public function __construct($title, $subtitle, $description, $author, $date, $tags, $duration = "", $level = "", $price = "") {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
        $this->author = $author;
        $this->date = $date;
        $this->tags = $tags;
        $this->duration = $duration;
        $this->level = $level;
        $this->price = $price;
    }

    public function getTotalTags() {
        return count($this->tags);
    }
}

// Crear instancia del Autor
$autor = new Autor(
    "Doniel Acosta",
    "doniel@example.com",
    "Desarrollador Full Stack con más de 10 años de experiencia en PHP, Laravel y tecnologías web modernas. Especialista en arquitectura de software y desarrollo de aplicaciones escalables.",
    "Desarrollo Web Full Stack",
    array(
        "GitHub" => "https://github.com/donielacosta",
        "LinkedIn" => "https://linkedin.com/in/donielacosta",
        "Twitter" => "https://twitter.com/donielacosta"
    )
);

// Crear instancia del Curso
$curso = new Curso(
    "Curso Profesional de PHP y Laravel",
    "Aprende a crear aplicaciones web profesionales con PHP y Laravel",
    "Domina PHP desde cero hasta nivel avanzado y aprende Laravel, el framework más popular de PHP. Construye aplicaciones web modernas, seguras y escalables. Este curso te llevará desde los fundamentos hasta conceptos avanzados de desarrollo web.",
    $autor,
    "2025-11-21",
    array("HTML", "CSS", "JavaScript", "PHP", "Laravel", "MySQL", "PostgreSQL", "MongoDB", "Redis"),
    "40 horas",
    "Intermedio",
    "$99.99"
);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($curso->description, ENT_QUOTES, 'UTF-8'); ?>">
    <title><?= htmlspecialchars($curso->title, ENT_QUOTES, 'UTF-8'); ?> - Programación Orientada a Objetos</title>
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
        .author-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            border: 2px solid #667eea;
        }
        .author-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .author-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2em;
            font-weight: bold;
            margin-right: 20px;
        }
        .author-info h3 {
            color: #667eea;
            font-size: 1.5em;
            margin-bottom: 5px;
        }
        .author-info .specialty {
            color: #666;
            font-size: 1em;
        }
        .author-bio {
            color: #555;
            line-height: 1.8;
            margin-bottom: 15px;
        }
        .author-contact {
            margin-top: 15px;
        }
        .author-contact a {
            color: #667eea;
            text-decoration: none;
            margin-right: 15px;
            font-weight: 600;
        }
        .author-contact a:hover {
            text-decoration: underline;
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
            .author-header {
                flex-direction: column;
                text-align: center;
            }
            .author-avatar {
                margin-right: 0;
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><?= htmlspecialchars($curso->title, ENT_QUOTES, 'UTF-8'); ?></h1>
            <p class="subtitle"><?= htmlspecialchars($curso->subtitle, ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        
        <div class="content">
            <!-- Estadísticas -->
            <div class="stats">
                <div class="stat-item">
                    <div class="stat-number"><?= $curso->getTotalTags(); ?></div>
                    <div class="stat-label">Tecnologías</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number"><?= htmlspecialchars($curso->duration, ENT_QUOTES, 'UTF-8'); ?></div>
                    <div class="stat-label">Duración</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number"><?= htmlspecialchars($curso->level, ENT_QUOTES, 'UTF-8'); ?></div>
                    <div class="stat-label">Nivel</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number"><?= htmlspecialchars($curso->price, ENT_QUOTES, 'UTF-8'); ?></div>
                    <div class="stat-label">Precio</div>
                </div>
            </div>

            <!-- Descripción -->
            <div class="section">
                <h2 class="section-title">Descripción del Curso</h2>
                <p class="description"><?= htmlspecialchars($curso->description, ENT_QUOTES, 'UTF-8'); ?></p>
            </div>

            <!-- Información del Autor -->
            <div class="section">
                <h2 class="section-title">Sobre el Autor</h2>
                <div class="author-card">
                    <div class="author-header">
                        <div class="author-avatar"><?= strtoupper(substr($curso->author->nombre, 0, 1)); ?></div>
                        <div class="author-info">
                            <h3><?= htmlspecialchars($curso->author->getNombreCompleto(), ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="specialty"><?= htmlspecialchars($curso->author->especialidad, ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                    </div>
                    <p class="author-bio"><?= htmlspecialchars($curso->author->getBio(), ENT_QUOTES, 'UTF-8'); ?></p>
                    <div class="author-contact">
                        <strong>Contacto:</strong>
                        <a href="mailto:<?= htmlspecialchars($curso->author->getEmail(), ENT_QUOTES, 'UTF-8'); ?>">
                            <?= htmlspecialchars($curso->author->getEmail(), ENT_QUOTES, 'UTF-8'); ?>
                        </a>
                    </div>
                    <?php if (!empty($curso->author->redesSociales)): ?>
                        <div class="author-contact">
                            <strong>Redes Sociales:</strong>
                            <?php foreach($curso->author->redesSociales as $red => $url): ?>
                                <a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>" target="_blank"><?= htmlspecialchars($red, ENT_QUOTES, 'UTF-8'); ?></a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Información del curso -->
            <div class="section">
                <h2 class="section-title">Información del Curso</h2>
                <div class="info-grid">
                    <div class="info-card">
                        <strong>Fecha de Publicación</strong>
                        <span class="value"><?= htmlspecialchars($curso->date, ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                    <div class="info-card">
                        <strong>Duración</strong>
                        <span class="value"><?= htmlspecialchars($curso->duration, ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                    <div class="info-card">
                        <strong>Nivel</strong>
                        <span class="value"><?= htmlspecialchars($curso->level, ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                    <div class="info-card">
                        <strong>Precio</strong>
                        <span class="value"><?= htmlspecialchars($curso->price, ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Tecnologías -->
            <div class="section">
                <h2 class="section-title">Tecnologías y Herramientas</h2>
                <div class="tags-container">
                    <?php foreach($curso->tags as $tag): ?>
                        <span class="tag"><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Ejemplo de código -->
            <div class="section">
                <h2 class="section-title">Ejemplo de Código - Clases</h2>
                <div class="code-example">
class Autor {<br>
&nbsp;&nbsp;&nbsp;&nbsp;public $nombre;<br>
&nbsp;&nbsp;&nbsp;&nbsp;public $email;<br>
&nbsp;&nbsp;&nbsp;&nbsp;public $bio;<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;public function __construct($nombre, $email, $bio) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->nombre = $nombre;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->email = $email;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->bio = $bio;<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
}<br>
<br>
class Curso {<br>
&nbsp;&nbsp;&nbsp;&nbsp;public $title;<br>
&nbsp;&nbsp;&nbsp;&nbsp;public $author;<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;public function __construct($title, $author) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->title = $title;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->author = $author;<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
}
                </div>
            </div>
        </div>
    </div>
</body>
</html>