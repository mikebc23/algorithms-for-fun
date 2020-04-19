<?php

/*
 * Problem: https://www.hackerrank.com/challenges/time-conversion/problem
 * My solution: https://www.hackerrank.com/challenges/time-conversion/submissions/code/152444685
 *
 * Complete the timeConversion function below.
 */

function timeConversion($s) {

    $hour = substr($s,0, 2);
    $type = substr($s, -2);

    switch ($type){
        case "PM":
            if($hour>12) $hour-=12;
            elseif($hour<12) $hour+=12;
            break;
        case "AM":
            if($hour>12) $hour+=12;
            if($hour==12) $hour="00";
            break;
    }

    if($hour==24) $hour = "00";

    return $hour . ":" . substr($s,3,5);
}
