<?php
class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function minimumSum($num) {
        $nums = str_split($num);
        sort($nums);
        $num1 = $nums[0] . $nums[3];
        $num2 = $nums[1] . $nums[2];
        return $num1 + $num2;
    }
}
