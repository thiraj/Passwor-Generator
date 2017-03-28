<?php

require '../library/password.class.php';

$Data['password'] = $_POST['password'];
$Data['email'] = $_POST['email'];
$Data['domain'] = $_POST['domain'];
$Data['confirm'] = $_POST['confirm'];

$hash = new Password($Data);

$result = $hash->hsPassword();

echo json_encode($result);



