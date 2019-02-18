<?php

// Complete the countingValleys function below.
function countingValleys($n, $s) {
    $level = 0;
    $valleys = 0;

    foreach (str_split($s) as $step) {
        if ($step === 'D') {
            $level--;
        } else {
            $level++;

            if ($level === 0) {
                $valleys++;
            }
        }
    }

    return $valleys;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = countingValleys($n, $s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
