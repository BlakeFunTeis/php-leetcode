<?php
class Solution {

    /**
     * @param String[][] $items
     * @param String $ruleKey
     * @param String $ruleValue
     * @return Integer
     */
    function countMatches($items, $ruleKey, $ruleValue) {
        $ruleArray = [
            'type' => 0,
            'color' => 1,
            'name' => 2
        ];

        $key = $ruleArray[$ruleKey];
        $count = 0;
        foreach($items as $item) {
            if ($item[$key] == $ruleValue) {
                $count++;
            }
        }

        return $count;
    }
}
