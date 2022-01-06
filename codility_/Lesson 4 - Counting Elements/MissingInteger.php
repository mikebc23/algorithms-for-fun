<?php
/* 
 * MissingInteger
 * Find the smallest positive integer that does not occur in a given sequence.
 * 
 * This is a demo task.
 * 
 * Write a function:
 * function solution($A);
 * that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.
 * 
 * For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.
 * 
 * Given A = [1, 2, 3], the function should return 4.
 * Given A = [−1, −3], the function should return 1.
 * 
 * Write an efficient algorithm for the following assumptions:
 * 
 * N is an integer within the range [1..100,000];
 * each element of array A is an integer within the range [−1,000,000..1,000,000].
 * 
 * 
 * Copyright 2009–2022 by Codility Limited. All Rights Reserved. 
 * Unauthorized copying, publication or disclosure prohibited.
 * 
 * Solution by Michael Barquero <@mikebc23>
 */

function solution($A) {
    $max = max($A);
    if ($max < 0) return (int) 1;
        
    $range = range(1,max($A));
    $diff = array_diff($range, $A);
    
    $result = array_values($diff);
    
    if(!$result) return (int) max($A)+1;
    else {
        $missingInteger = $result[0];
        return $missingInteger;
    }
}