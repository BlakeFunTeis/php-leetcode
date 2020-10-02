<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $tempValue = 0;
        $tempKey = 0;
        foreach($nums as $k => $num) {
            $result[$num]++;
            if ($result[$num] > $tempValue) {
                $tempValue = $result[$num];
                $tempKey = $num;
            }
        }
        return $tempKey;
    }
}
