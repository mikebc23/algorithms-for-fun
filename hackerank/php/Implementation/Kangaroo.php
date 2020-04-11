<?php
/*
 * Problem: https://www.hackerrank.com/challenges/kangaroo/problem
 * My solution: https://www.hackerrank.com/challenges/kangaroo/submissions/code/152612451
 *
 * Complete the kangaroo function below.
 */

function kangaroo($x1, $v1, $x2, $v2) {
    $kangaroo1 = $x1;
    $kangaroo2 = $x2;

    for($jump=1; $jump<=10000; $jump++) {

        $kangaroo1+=$v1;
        $kangaroo2+=$v2;

        if($kangaroo1 == $kangaroo2) return "YES";
    }

    return "NO";
}