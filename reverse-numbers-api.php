<?php


$string = $_GET['string'];

$numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
$temp_arr = [];

for ($index = 0; $index < strlen($string); $index++) {
    if (in_array($string[$index], $numbers)) {
        array_push($temp_arr, $string[$index]);
    }
}

$temp_arr = array_reverse($temp_arr);

for ($index = 0; $index < strlen($string); $index++) {
    if (in_array($string[$index], $numbers)) {
        $string[$index] = array_shift($temp_arr);
    }
}

echo json_encode(['string' => $string]);
