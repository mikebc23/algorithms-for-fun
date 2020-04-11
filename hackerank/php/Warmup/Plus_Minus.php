<?php

/*
 * Problem: https://www.hackerrank.com/challenges/plus-minus/problem
 * My solution: https://www.hackerrank.com/challenges/plus-minus/submissions/code/152433983
 *
 * Complete the plusMinus function below.
 */

function plusMinus($arr) {

    //Getting the array dimension
    $dimension = count($arr);

    // Initialize sums
    $positive = 0; $negative = 0; $zero = 0;

    //Getting values
    for ($i = 0; $i < $dimension; $i++) {
        switch (true){
            case $arr[$i] < 0:
                $negative++;
                break;
            case $arr[$i] > 0:
                $positive++;
                break;
            case $arr[$i] == 0:
                $zero ++;
                break;
        }
    }

    $positive = $positive/$dimension;
    $negative = $negative/$dimension;
    $zero = $zero/$dimension;

    print "$positive
$negative
$zero";

}
