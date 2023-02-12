<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $count = count($nums);
        $max_num = $nums[0];
        $sum = 0;
        for ($i = 0; $i<=$count - 1; $i++) {
            if ($sum > 0) {
                $sum += $nums[$i];
            } else {
                $sum = $nums[$i];
            }
            $max_num = $sum > $max_num ? $sum : $max_num;
        }
        return $max_num;
    }
}
