<!DOCTYPE html>
<html lang="en">
<?php require 'partial/head.php'; ?>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/partial/header.php'; ?>
    <?php
    $weeekDays = [
        1 => 'lunes',
        2 => 'martes',
        3 => 'miércoles',
        4 => 'jueves',
        5 => 'viernes',
        6 => 'sábado',
        7 => 'domingo',
    ];
    ?>
    <!-- pre>
        $_GET: <?php //var_dump($_GET); ?>
        <br/>
        $_POST: <?php //print_r($_POST); ?>
        <br/>
        $_SERVER: <?php //print_r($_SERVER); ?>
        <br/>
    </pre -->
    <h1>Hola, <?= $_GET['name']; ?></h1>
    <p>Hoy es <strong><?= $weeekDays[date('N')]; ?></strong>. ¿Qué tal estás?</p>
    <?php require 'partial/footer.php'; ?>
</body>

</html>
