<?php
class Curso {
    public $title;
    public $subtitle;
    public $description;
    public $author;
    public $date;
    public $tags;

    public function __construct($title, $subtitle, $description, $author, $date, $tags) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
        $this->author = $author;
        $this->date = $date;
        $this->tags = $tags;
    }
}

$curso = new Curso(
    "Curso Profesional de PHP y Laravel",
    "Aprende a crear aplicaciones web profesionales con PHP y Laravel",
    "Aprende a crear aplicaciones web profesionales con PHP y Laravel",
    "Doniel Acosta",
    "2025-11-21",
    array("HTML", "CSS", "JavaScript", "PHP", "Laravel", "MySQL", "PostgreSQL", "MongoDB", "Redis")
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso->title; ?></title>
</head>
<body>
    <h1> Bienvenido al <?= $curso->title ?></h1>
    <h2><?= $curso->subtitle ?></h2>
    <p><?= $curso->description ?></p>
    <p>Autor: <?= $curso->author ?></p>
    <p>Fecha de publicación: <?= $curso->date ?></p>


    <p>
        <strong>Etiquetas del curso:</strong>
        <ul>
            <?php foreach($curso->tags as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        </ul>
    </p>
</body>
</html>