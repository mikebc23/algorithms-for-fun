<?php
/*
 * Problem: https://www.hackerrank.com/challenges/grading/problem
 * My solution: https://www.hackerrank.com/challenges/grading/submissions/code/152562393
 *
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {

    $return = [];

    //Round up grades
    foreach($grades as $key => $value) {
        $grade = intval($value);
        if($grade >= 38){
            $roundup = ceil($grade/5) * 5;
            if(($roundup-$grade)<3)
                $return[] = $roundup;
            else
                $return[] = $grade;
        }else {
            $return[] = $grade;
        }
    }

    return $return;
}
