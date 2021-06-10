<?php

require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php';

$body = file_get_contents('php://input');

$person = json_decode($body, true);

$query = 'DELETE FROM employees WHERE id = :identificador';

$stm = $dbConnexion->prepare($query);
$stm->bindParam(':identificador', $person['id']);
$stm->execute();

$result = $stm->rowCount();

$response = [
    'status' => $result === 0 ? 'error' : 'success',
    'message' => $result === 0 ? 'No hemos eliminado a nadie' : 'He elimado '.$result.' fila',
];

echo json_encode($response);
