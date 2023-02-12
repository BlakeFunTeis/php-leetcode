<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        for ($i = $m + $n - 1; $i >= 0; $i--) {
            if ($m > 0 && $n > 0) {
                if ($nums1[$m - 1] > $nums2[$n - 1]) {
                    $nums1[$i] = $nums1[$m - 1];
                    $m--;
                } else {
                    $nums1[$i] = $nums2[$n - 1];
                    $n--;
                }
            } elseif ($m > 0) {
                $nums1[$i] = $nums1[$m - 1];
                $m--;
            } else {
                $nums1[$i] = $nums2[$n - 1];
                $n--;
            }
        }
    }
}
