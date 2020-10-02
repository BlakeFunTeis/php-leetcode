<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $result = [];
        $temp = 0;
        foreach($nums as $num) {
            $temp += $num;
            $result[] = $temp;
        }
        return $result;
    }
}
