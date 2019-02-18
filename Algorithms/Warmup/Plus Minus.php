<?php

// Complete the plusMinus function below.
function plusMinus($arr) {
    $positives = array_filter($arr, function ($item) {
        return $item > 0;
    });

    $negatives = array_filter($arr, function ($item) {
        return $item < 0;
    });

    $zeros = array_filter($arr, function ($item) {
        return $item === 0;
    });

    echo count($positives) / count($arr);
    echo "\r\n";
    echo count($negatives) / count($arr);
    echo "\r\n";
    echo count($zeros) / count($arr);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);
