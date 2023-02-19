<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function differenceOfSum($nums) {
        $result = 0;
        
        foreach ($nums as $num) {
            $mul = 1;
            $temp = $num;
            while ($temp) {
                $mod = $temp % 10;
                $result += $mod * ($mul - 1);
                $temp = ($temp - $mod) /10;
                $mul *= 10;
            }
        }
        
        return $result;
    }
}
