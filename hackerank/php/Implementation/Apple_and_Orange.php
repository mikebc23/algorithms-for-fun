<?php
/*
 * Problem: https://www.hackerrank.com/challenges/apple-and-orange/problem
 * My solution: https://www.hackerrank.com/challenges/apple-and-orange/submissions/code/152607976
 *
 * Complete the countApplesAndOranges function below.
 */
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    // A negative value of  means the fruit fell  units to the tree's left
    // Positive value of  means it falls units to the tree's right.
    $apples_fall_on_house = $oranges_fall_on_house = 0;

    //Let's check the apples. The apple tree is to the left of the house.
    foreach ($apples as $key => $value){
        $fall_pos = $value + $a;
        if(($fall_pos >= $s) && ($fall_pos <= $t)) {
            $apples_fall_on_house++;
        }
    }

    //Let's check the oranges. The orange tree is to the right of the house.
    foreach ($oranges as $key => $value){
        $fall_pos = $value + $b;
        if(($fall_pos >= $s) && ($fall_pos <= $t)) {
            $oranges_fall_on_house++;
        }
    }

    //Result
    echo "$apples_fall_on_house
$oranges_fall_on_house";
}