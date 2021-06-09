<?php
    require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php';

    $query = 'SELECT * FROM employees';
    if (isset($_GET['id'])) {
        $query = 'SELECT * FROM employees WHERE id = :identifiador';
    } elseif (isset($_GET['email'])) {
        $query = 'SELECT * FROM employees WHERE email = :correo';
    }
    
    $stm = $dbConnexion->prepare($query);

    if (isset($_GET['id'])) {
        $stm->bindParam(':identifiador', $_GET['id']);
    } elseif (isset($_GET['email'])) {
        $stm->bindParam(':correo', $_GET['email']);
    }

    $stm->execute();

    $people = $stm->fetchAll(PDO::FETCH_ASSOC);
?>
<?php

require $_SERVER['DOCUMENT_ROOT'] . '/employees_'.(isset($_GET['format']) && in_array($_GET['format'], ['json', 'xml']) ? $_GET['format'] : 'html').'.php';
