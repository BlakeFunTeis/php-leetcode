<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];
        $data = [
            ')' => '(',
            ']' => '[',
            '}' => '{'
        ];
        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            if (array_key_exists($char, $data)) {
                $top = empty($stack) ? '#' : array_pop($stack);
                if ($top !== $data[$char]) {
                    return false;
                }
            } else {
                array_push($stack, $char);
            }
        }
        return empty($stack);
    }
}
