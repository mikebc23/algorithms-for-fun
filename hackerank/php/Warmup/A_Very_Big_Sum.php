<?php

/*
 * Problem: https://www.hackerrank.com/challenges/a-very-big-sum/problem
 * My solution: https://www.hackerrank.com/challenges/a-very-big-sum/submissions/code/152406699
 *
 * Complete the aVeryBigSum function below
 */


function aVeryBigSum($ar) {
    $result = 0;

    foreach ($ar as $key => $value) {
        $result += $value;
    }

    return $result;
}
