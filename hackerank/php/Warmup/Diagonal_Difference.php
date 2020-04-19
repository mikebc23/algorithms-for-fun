<?php

/*
 * Problem: https://www.hackerrank.com/challenges/diagonal-difference/problem
 * My Solution: https://www.hackerrank.com/challenges/diagonal-difference/submissions/code/152432739
 *
 *
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {

    //Getting the array dimension
    $dimension = count($arr);

    // Initialize sums of diagonals
    $left_to_right = 0; $right_to_left = 0;

    //Getting absolute difference between the sums of its diagonals
    for ($i = 0; $i < $dimension; $i++) {
        $left_to_right += $arr[$i][$i];
        $right_to_left += $arr[$i][$dimension-1-$i];
    }

    return abs($left_to_right - $right_to_left);
}
