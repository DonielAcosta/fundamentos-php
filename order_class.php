<?php
// Incluir la clase Curso
require_once 'Curso.php';

$curso = new Curso(
    "Curso Profesional de PHP y Laravel",
    "Aprende a crear aplicaciones web profesionales con PHP y Laravel",
    "Aprende a crear aplicaciones web profesionales con PHP y Laravel",
    "Doniel Acosta",
    "2025-11-21",
    array("HTML", "CSS", "JavaScript", "PHP", "Laravel", "MySQL", "PostgreSQL", "MongoDB", "Redis")
);

$curso->addTag("Python");
$curso->addTag("JavaScript");
$curso->addTag("React");
$curso->addTag("Node.js");
$curso->addTag("Express");
$curso->addTag("MongoDB");
$curso->addTag("PostgreSQL");

// Asegurar que los tags estén ordenados alfabéticamente
$curso->sortTags();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso->getTitle(); ?></title>
</head>
<body>
    <h1> Bienvenido al <?= $curso->getTitle() ?></h1>
    <h2><?= $curso->getSubtitle() ?></h2>
    <p><?= $curso->getDescription() ?></p>
    <p>Autor: <?= $curso->getAuthor() ?></p>
    <p>Fecha de publicación: <?= $curso->getDate() ?></p>


    <p>
        <strong>Etiquetas del curso:</strong>
        <ul>
            <?php foreach($curso->getTags()  as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        </ul>
    </p>
</body>
</html>