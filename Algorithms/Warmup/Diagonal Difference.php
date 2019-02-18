<?php

// Complete the diagonalDifference function below.
function diagonalDifference($arr) {
    $count = count($arr[0]);

    $leftToRight = 0;
    $rightToLeft = 0;

    for ($i = 0; $i < $count; $i++) {
        $leftToRight += $arr[$i][$i];
        $rightToLeft += $arr[$i][$count - $i - 1];
    }

    return abs($leftToRight - $rightToLeft);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$arr = array();

for ($i = 0; $i < $n; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
