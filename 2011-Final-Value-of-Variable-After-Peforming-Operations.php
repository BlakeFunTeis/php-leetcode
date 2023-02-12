<?php
class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    function finalValueAfterOperations($operations) {
        $array = [
            '--X' => -1,
            'X--' => -1,
            '++X' => 1,
            'X++' => 1
        ];

        $result = 0;
        foreach ($operations as $operation) {
            $result += $array[$operation];
        }
        
        return $result;
    }
}
