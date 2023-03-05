<?php

$birth_date = $_POST["birth_date"];
$birth_date = strtotime($birth_date);

$age = time() - $birth_date;

$age = floor($age / (60 * 60 * 24 * 365));

function primeCheck($number)
{
    if ($number == 1)
        return false;
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0)
            return false;
    }
    return true;
}
$is_prime = primeCheck($age);
echo json_encode(['age' => $age, 'is_prime' => $is_prime]);
