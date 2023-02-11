<?php
class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        if ($num <= 9) {
            return $num;
        }
        $result = $num % 9;
        if ($result == 0) {
            return 9;
        }
        return $result;
    }
}
