<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function leftRigthDifference($nums) {
        $count = count($nums);
        $leftSum = array_fill(0, $count, 0);
        $rightSum = array_fill(0, $count, 0);

        for ($i = 1; $i < $count; $i++) {
            $leftSum[$i] = $leftSum[$i-1] + $nums[$i-1];
        }

        for ($i = $count-2; $i >= 0; $i--) {
            $rightSum[$i] = $rightSum[$i+1] + $nums[$i+1];
        }

        $answer = array_fill(0, $count, 0);
        for ($i = 0; $i < $count; $i++) {
            $answer[$i] = abs($leftSum[$i] - $rightSum[$i]);
        }

        return $answer;
    }
}
