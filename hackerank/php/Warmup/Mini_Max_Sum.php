<?php

/*
 * Problem: https://www.hackerrank.com/challenges/mini-max-sum/problem
 * My solution: https://www.hackerrank.com/challenges/mini-max-sum/submissions/code/152442055
 *
 * Complete the miniMaxSum function below.
 */

function miniMaxSum($arr) {
    $min = min($arr);
    $max = max($arr);
    $sum = 0;
    for($i=0; $i <= count($arr)-1; $i++) {
        $sum += $arr[$i];
    }

    $display_max = $sum-$max;
    $display_min = $sum-$min;

    echo  "{$display_max} {$display_min}";
}
