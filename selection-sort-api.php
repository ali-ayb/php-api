<?php

function selectionSort(&$arr)
{
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        $min_index = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$min_index]) {
                $min_index = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min_index];
        $arr[$min_index] = $temp;
    }
}

if (isset($_GET['numbers'])) {
    $numbers = $_GET['numbers'];

    $numbers_arr = explode(',', $numbers);

    $numbers_arr = array_map('intval', $numbers_arr);

    selectionSort($numbers_arr);

    echo json_encode(['numbers' => $numbers_arr]);
} else {
    echo json_encode(['error' => 'error']);
}
