<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {
        $result = [];
        $num1Result = [];
        foreach($nums1 as $value) {
            $num1Result[$value] += 1;
        }

        foreach ($nums2 as $value) {
            if (isset($num1Result[$value]) && $num1Result[$value] > 0) {
                $result[] = $value;
                $num1Result[$value]--;
            }
        }
        return $result;
    }
}
