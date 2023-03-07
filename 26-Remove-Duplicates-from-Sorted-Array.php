<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $count = count($nums);
        $j = 0;
        $temp = [];
        for ($i = 0; $i < $count; $i++) {
            if (empty($temp[$nums[$i]])) {
                $nums[$j] = $nums[$i];
                $j++;
            }
            $temp[$nums[$i]] = 1;
        }

        return $j;
    }
}
