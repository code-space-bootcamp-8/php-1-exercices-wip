<?php

$body = file_get_contents('php://input');

$person = json_decode($body, true);

echo json_encode($person);

exit();