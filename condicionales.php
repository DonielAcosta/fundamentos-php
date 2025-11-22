<?php
    $curso = "Curso  Profesional de PHP y Laravel";
    $archivado = true;
    $status = $archivado ? "archivado" : "no archivado";
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
    <?php if($archivado): ?>
        <p>El curso está archivado</p>
    <?php else: ?>
        <p>El curso no está archivado</p>
    <?php endif; ?>

    <p>El curso está <?= $status ?></p>
</body>
</html>