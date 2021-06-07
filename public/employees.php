<?php

$people = [
    ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 20, 'city' => 'Benalmádena'],
    ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'age' => 15, 'city' => 'Fuengirola'],
    ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 17, 'city' => 'Torremolinos'],
    ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 18, 'city' => 'Málaga'],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Exercice</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/partial/header.php'; ?>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Localidad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($people as $person): ?>
                <tr>
                    <td><?= $person['name'] ?></td>
                    <td><?= $person['email'] ?></td>
                    <td><?= $person['city'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>