<?php
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isStrictlyPalindromic($n) {
        for ($base = 2; $base <= $n - 2; $base++) {
            $num = $n;
            $str = "";
            while ($num > 0) {
                $str = ($num % $base) . $str;
                $num = (int)($num / $base);
            }

            $length = strlen($str);
            $is_palindrome = true;
            for ($i = 0; $i < $length / 2; $i++) {
                if ($str[$i] != $str[$length - $i - 1]) {
                    $is_palindrome = false;
                    break;
                }
            }

            if (!$is_palindrome) {
                return false;
            }
        }
        return true;
    }
}
