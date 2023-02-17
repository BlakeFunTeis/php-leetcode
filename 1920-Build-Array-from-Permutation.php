<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function buildArray($nums) {
        for($i = 0; $i<count($nums); $i++) {
            $result[] = $nums[$nums[$i]];
        }
        return $result;
    }
}
