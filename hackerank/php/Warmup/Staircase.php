<?php
/*
 * Problem: https://www.hackerrank.com/challenges/staircase/problem
 * My solution: https://www.hackerrank.com/challenges/staircase/submissions/code/152441339
 *
 * Complete the staircase function below.
 */

function staircase($n) {

    $stair = 1;
    for($i=1; $i <= $n; $i++) {
        echo str_repeat (" " , $n - $i );
        echo str_repeat ("#" , $stair ) . "\n";
        $stair++;
    }

}
