<?php

// Complete the jumpingOnClouds function below.
function jumpingOnClouds($c) {
    $currentJump = 0;
    $requiredJumps = 0;

    while ($currentJump < count($c) - 1) {
        if (isset($c[$currentJump + 2]) && $c[$currentJump + 2] === 0) {
            $currentJump++;
        }

        $requiredJumps++;
        $currentJump++;
    }

    return $requiredJumps;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $c_temp);

$c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = jumpingOnClouds($c);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
