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