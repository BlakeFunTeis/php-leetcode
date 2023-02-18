<?php
class Solution {

    /**
     * @param String $key
     * @param String $message
     * @return String
     */
    function decodeMessage($key, $message) {
        $eng = 'abcdefghijklmnopqrstuvwxyz';
        $list[' '] = ' ';
        $kk = 0;
        for($i = 0; $i < strlen($key); $i++) {
            if (empty($list[$key[$i]]) && $key[$i] !== ' ') {
                $list[$key[$i]] = $eng[$kk];
                $kk++;
            }
            
        }

        $result = '';
        for ($i = 0; $i<=strlen($message) - 1; $i++) {
            $result .= $list[$message[$i]];
        }

        return $result;
    }
}
