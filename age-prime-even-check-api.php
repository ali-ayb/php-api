<?php

$birth_date = $_POST["birth_date"];
$birth_date = strtotime($birth_date);

$age = time() - $birth_date;

$age = floor($age / (60 * 60 * 24 * 365));

echo json_encode(['age' => $age]);
