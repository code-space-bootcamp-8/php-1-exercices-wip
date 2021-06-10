<!DOCTYPE html>
<html lang="en">
<?php require 'partial/head.php'; ?>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/partial/header.php'; ?>

    <?php if(isset($_GET['message'])) :?>
        <p><?= $_GET['message']; ?></p>
    <?php endif; ?>

    <hr/>
    <table border="1">
        <thead>
            <tr>
                <th>Id.</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Localidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($people as $person): ?>
                <tr>
                    <td><a href="/employees.php?id=<?= $person['id'] ?>"><?= $person['id'] ?></a></td>
                    <td><?= $person['name'] ?></td>
                    <td><a href="/employees.php?email=<?= $person['email'] ?>"><?= $person['email'] ?></a></td>
                    <td><?= $person['city'] ?></td>
                    <td><button class="employees-delete-button" value="Eliminar" data-person='<?= json_encode($person); ?>'>Eliminar</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <hr/>

    <form method="POST" action="/employees_add.php" enctype="multipart/form-data">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required/>
        <br/>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required/>
        <br/>
        <label for="age">Edad</label>
        <input type="number" id="age" name="age" required/>
        <br/>
        <label for="city">Ciudad</label>
        <input type="text" id="city" name="city" />
        <br/>
        <label for="archivo">Archivo</label>
        <input type="file" id="archivo" name="archivo" />
        <hr/>
        <input type="submit" value="Enviar"/>
    </form>

    <?php require 'partial/footer.php'; ?>
</body>

</html>