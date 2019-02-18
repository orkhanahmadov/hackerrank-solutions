<?php

// Complete the sockMerchant function below.
function sockMerchant($n, $ar) {
    $pairs = 0;
    $counts = array_count_values($ar);

    foreach ($counts as $count) {
        $pairs += floor($count / 2);
    }

    return $pairs;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = sockMerchant($n, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
