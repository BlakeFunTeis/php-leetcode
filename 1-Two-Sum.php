<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $length = count($nums);
        if ($length == 2) {
            return [0, 1];
        }
        $map = [];
        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i];
            if (array_key_exists($complement, $map)) {
                return [$map[$complement], $i];
            }
            $map[$nums[$i]] = $i;
        }
        return $map;
    }
}
