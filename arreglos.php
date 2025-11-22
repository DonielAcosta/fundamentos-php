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
        <strong>Primeras 3 etiquetas del curso:</strong>
        <ul>
            <li><?= $tags[0] ?></li>
            <li><?= $tags[1] ?></li>
            <li><?= $tags[2] ?></li>
        </ul>
    </p>
</body>
</html>