<?php
class Solution {

    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices) {
        $result = '';
        foreach($indices as $k => $indlce) {
            $result[$indlce] = $s[$k];
        }
        return $result;
    }
}
