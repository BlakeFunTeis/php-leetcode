<?php
class Solution {

    /**
     * @param String $J
     * @param String $S
     * @return Integer
     */
    function numJewelsInStones($J, $S) {
        $count = 0;
        $S = str_split($S);
        $data = array_count_values($S);
        for($i=0; $i<=strlen($J); $i++) {
            $count += $data[$J[$i]];
        }
        return $count;
    }
}
