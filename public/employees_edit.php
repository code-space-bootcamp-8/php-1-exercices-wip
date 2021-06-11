<?php

// Confirmar que la ruta sea la vuestra.
require $_SERVER["DOCUMENT_ROOT"] . "/lib/app.php";

$query = "UPDATE employees SET name=:nombre, email=:correo, age=:edad, city=:ciudad WHERE id=:id"; 

$params = [
    ":id" => $_POST["id"],
    ":nombre" => $_POST["name"],
    ":correo" => $_POST["email"],
    ":edad" => $_POST["age"],
    ":ciudad" => $_POST["city"]
];

// Confirmar que el nombre la conexión sea el vuestro propio.
$stm = $dbConnexion->prepare($query);


$stm->execute($params);

// Confirmar que la ruta para la redirección y el parámetro asociado sean los vuetros.
header('Location: /employees.php?message=' . urlencode('El usuario '.$_POST['name'].' se ha modificado.'));