<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countAsterisks($s) {
        $first = false;
        $two = false;
        $star = 0;
        $pipe = 0;
        for ($i = 0; $i <= strlen($s) - 1; $i++) {
            if ($s[$i] == '|') {
                $pipe++;
            }

            if ($pipe % 2 == 0 && $s[$i] == '*') {
                $star++;
            }
        }

        return $star;
    }
}
