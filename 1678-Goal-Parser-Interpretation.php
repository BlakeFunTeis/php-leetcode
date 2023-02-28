<?php

class Solution {

    /**
     * @param String $command
     * @return String
     */
    function interpret($command) {
        $temp = [
            ')' => ['text' => 'o', 'i' => 0],
            'a' => ['text' => 'al', 'i' => 2],
            
        ];
        $result = '';
        for ($i = 0; $i<strlen($command); $i++) {
            if ($command[$i] == '(') {
                continue;
            }

            if ($command[$i] == 'G') {
                $result .= 'G';
                continue;
            }

            if (!empty($temp[$command[$i]])) {
                $result .= $temp[$command[$i]]['text'];
                $i += $temp[$command[$i]]['i'];
            }
        }
        return $result;
    }
}
