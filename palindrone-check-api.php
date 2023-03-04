<?php

if (isset($_GET['word'])) {
    $word = $_GET['word'];

    $is_palindrome = ($word === strrev($word));

    echo json_encode(['is_palindrome' => $is_palindrome]);
} else {
    echo json_encode(['error' => 'error']);
}
