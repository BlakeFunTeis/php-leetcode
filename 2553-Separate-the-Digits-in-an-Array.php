<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function separateDigits($nums) {
        $result = [];
        for($i = 0; $i<count($nums); $i++) {
            $digits = str_split($nums[$i], 1);
            foreach ($digits as $digit) {
                $result[] = $digit;
            }
        }

        return $result;
    }
}
