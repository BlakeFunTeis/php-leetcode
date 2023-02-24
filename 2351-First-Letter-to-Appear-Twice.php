<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function repeatedCharacter($s) {
        $length = strlen($s);
        $temp = [];
        for($i = 0; $i<$length; $i++) {
            if (!empty($temp[$s[$i]])) {
                return $s[$i];
            } else {
                $temp[$s[$i]] = 1;
            }
        }
    }
}
