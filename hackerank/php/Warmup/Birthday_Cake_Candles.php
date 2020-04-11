<?php
/*
 * Problem: https://www.hackerrank.com/challenges/birthday-cake-candles/problem
 * My solution: https://www.hackerrank.com/challenges/birthday-cake-candles/submissions/code/152442582
 *
 * Complete the birthdayCakeCandles function below.
 */

function birthdayCakeCandles($ar)
{
    $max = max($ar);
    $count = 0;
    for ($i = 0; $i <= count($ar) - 1; $i++) {
        if ($ar[$i] == $max) $count++;
    }
    return $count;

}
