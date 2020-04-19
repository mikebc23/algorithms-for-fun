<?php
/*
 * Problem: https://www.hackerrank.com/challenges/compare-the-triplets/problem
 * My solution: https://www.hackerrank.com/challenges/compare-the-triplets/submissions/code/152406253
 *
 * Complete the compareTriplets function below.
 */

function compareTriplets($a, $b) {

    #Initialize final score
    $score_a = 0;
    $score_b = 0;
    $array_max_length = $a;

    switch(count($a) <=> count($b)) {
        case 1:
            $array_max_length = $b;
            break;
        case -1:
            $array_max_length = $a;
            break;
    }

    for($i=0;$i<=count($array_max_length)-1; $i++) {
        switch($a[$i] <=> $b[$i]){
            case 0:
                continue 2;
                break;
            case 1:
                $score_a++;
                break;
            case -1:
                $score_b++;
                break;
        }
    }

    return [$score_a, $score_b];

}
