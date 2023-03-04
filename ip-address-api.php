<?php

$ip_address = $_SERVER['REMOTE_ADDR'];
echo json_encode(array('ip_address' => $ip_address));
