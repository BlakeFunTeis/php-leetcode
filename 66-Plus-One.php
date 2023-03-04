<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $carry = 1;
        for ($i = count($digits) - 1; $i >= 0; $i--) {
            $sum = $digits[$i] + $carry;
            $digits[$i] = $sum % 10;
            $carry = intdiv($sum, 10);
            if ($carry == 0) break;
        }
        if ($carry > 0) array_unshift($digits, $carry);
        return $digits;
    }
}
