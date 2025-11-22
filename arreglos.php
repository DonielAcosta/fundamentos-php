<?php
    $curso = "Curso  Profesional de PHP y Laravel";

 
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso; ?></title>
</head>
<body>
    <h1> Bienvenido al <?= $curso ?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati consequuntur veritatis, unde omnis vel numquam, amet sed molestias sit repellat perspiciatis ullam assumenda voluptatem dolore. Obcaecati quisquam corporis repudiandae eos!</p>

    <p>
        <strong>Etiquetas del curso:</strong>
        <ul>
            <?php foreach($tags as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        </ul>
    </p>
</body>
</html>