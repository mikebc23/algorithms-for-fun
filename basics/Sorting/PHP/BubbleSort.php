<?php
/*
 * Basic example of Bubble Sort
 *
 * Sample array: 23, 8, 15, 17, 4, 40, 11, 31
 * Complexity: O (2^n)
 */

function bubbleSort($array) {

    for($i=count($array)-1; $i>=0;$i--) {
        for($j=0; $j < count($array)-1; $j++) {
            if($array[$j] > $array[$j+1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
            }
        }
        //echo "Current state: " . json_encode($array) . "\n" ;
    }

    return $array;
}

$array = [23, 8, 15, 17, 4, 40, 11, 31];
$result = bubbleSort($array);

echo "Result: " . json_encode($result);