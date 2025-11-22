<?php
/**
 * Order Class - Demostración de Programación Orientada a Objetos
 * Uso de clases separadas, encapsulación y métodos
 */

require __DIR__ . '/vendor/autoload.php';

use App\Curso;
use App\CursoType;
// Crear instancia del curso con tags iniciales
$curso = new Curso(
    "Curso Profesional de PHP y Laravel",
    "Aprende a crear aplicaciones web profesionales con PHP y Laravel",
    "Domina PHP desde cero hasta nivel avanzado y aprende Laravel, el framework más popular de PHP. Construye aplicaciones web modernas, seguras y escalables.",
    "Doniel Acosta",
    "2025-11-21",
    array("HTML", "CSS", "JavaScript", "PHP", "Laravel", "MySQL", "PostgreSQL", "MongoDB", "Redis"),
    CursoType::FREE
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
    <h1><?= $curso?></h1>
</body>
</html>