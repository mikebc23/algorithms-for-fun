<?php
/*
 * Problem: https://leetcode.com/problems/two-sum/
 * My solution: https://leetcode.com/submissions/detail/319335085/
 */

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        foreach ($nums as $key => $value) {
            unset($nums[$key]);
            $leftover = array_search($target - $value, $nums);
            if($leftover) {
                return [$key, $leftover];
            }
        }
    }
}

//Usage
$solution = new Solution();

print json_encode($solution->twoSum([3,1,3],6));
print json_encode($solution->twoSum([9,1,3,2,8,4],6));
print json_encode($solution->twoSum([9,81,15,6,5,1],6));