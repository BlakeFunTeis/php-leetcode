<?php
class Solution {

    /**
     * @param String $boxes
     * @return Integer[]
     */
    function minOperations($boxes) {
        $result = [];
        $boxes = str_split($boxes);
        foreach($boxes as $key => $value){
            $i = 0;
            foreach($boxes as $k => $val){
                if($val){
                    $i += abs($k - $key);
                }
            }
            $result[$key] = $i;
        }
        return $result;
    }
}
