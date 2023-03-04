<?php

$email = $_POST['email'];
$password = $_POST['password'];

$emailPattern = "/^[^\s@]+@[^\s@]+\.[^\s@]+$/";
$passwordPattern = "/^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{8,}$/";

$emailValid = preg_match($emailPattern, $email);
$passwordValid = preg_match($passwordPattern, $password);

$response = [
    "valid" => $emailValid && $passwordValid
];

echo json_encode([$response]);
