<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $length = strlen($x);
        $x = (string) $x;
        for ($i = 0; $i<$length; $i++) {
            if ($x[($length - 1) - $i] !== $x[$i]) {
                return false;
            }
        }

        return true;
    }
}
