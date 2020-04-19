<?php
/*
 * Problem: https://www.hackerrank.com/challenges/simple-array-sum/problem
 * My solution: https://www.hackerrank.com/challenges/simple-array-sum/submissions/code/152404220
 *
 * Complete the simpleArraySum function below.
 */
function simpleArraySum($ar)
{
    $sum = 0;
    foreach ($ar as $key => $value) {
        $sum += $value;
    }
    return $sum;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%d\n", $ar_count);
fscanf($stdin, "%[^\n]", $ar_temp);
$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));
$result = simpleArraySum($ar);
fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
