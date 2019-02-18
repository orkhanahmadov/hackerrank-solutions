<?php

// Complete the staircase function below.
function staircase($n) {
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat(' ', $n - $i);
        echo str_repeat('#', $i);
        echo "\r\n";
    }
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);
