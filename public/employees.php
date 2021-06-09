<?php
    require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php';

    $query = 'SELECT * FROM employees';
    if (isset($_GET['id'])) {
        $query = 'SELECT * FROM employees WHERE id ='.$_GET['id'];
    } elseif (isset($_GET['email'])) {
        $query = 'SELECT * FROM employees WHERE email = "'.$_GET['email'].'"';
    }
    $stm = $dbConnexion->query($query);
    $people = $stm->fetchAll(PDO::FETCH_ASSOC);
?>
<?php

require $_SERVER['DOCUMENT_ROOT'] . '/employees_'.(isset($_GET['format']) && in_array($_GET['format'], ['json', 'xml']) ? $_GET['format'] : 'html').'.php';
