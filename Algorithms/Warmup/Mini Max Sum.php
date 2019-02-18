<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    $arrayForMin = $arr;
    $arrayForMax = $arr;

    array_splice($arrayForMax, array_search(min($arr), $arr), 1);
    array_splice($arrayForMin, array_search(max($arr), $arr), 1);

    echo array_sum($arrayForMin) . ' ' . array_sum($arrayForMax);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
