<?php

// Complete the twoStrings function below.
function twoStrings($s1, $s2) {
    $matchingSubstring = 0;

    $s1Values = array_count_values(str_split($s1));
    $s2Values = array_count_values(str_split($s2));

    foreach (array_keys($s1Values) as $letter) {
        if (isset($s2Values[$letter])) {
            $matchingSubstring++;
        }
    }

    if ($matchingSubstring > 0)
        return 'YES';

    return 'NO';
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s1 = '';
    fscanf($stdin, "%[^\n]", $s1);

    $s2 = '';
    fscanf($stdin, "%[^\n]", $s2);

    $result = twoStrings($s1, $s2);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
