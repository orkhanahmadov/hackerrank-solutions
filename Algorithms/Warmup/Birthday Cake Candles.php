<?php

// Complete the birthdayCakeCandles function below.
function birthdayCakeCandles($ar) {
    $values = array_count_values($ar);

    return $values[max($ar)];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
