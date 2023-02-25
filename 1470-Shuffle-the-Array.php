<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $count = count($nums);
        $mid = $count / 2;
        for($i = 0; $i < $mid; $i++) {
            $temp[$mid + $i] = $nums[$i];
            $temp[$i] = $nums[$mid + $i];
        }

        return $temp;
    }
}
