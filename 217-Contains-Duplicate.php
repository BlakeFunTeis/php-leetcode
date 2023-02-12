<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        for($i = 0; $i <= count($nums) - 1; $i++) {
            if (!empty($result[$nums[$i]])) {
                return true;
            }
            if (empty($result[$nums[$i]])) {
                $result[$nums[$i]] = 1;
            }
        }
        return false;
    }
}
