<?php
class Solution {

    /**
     * @param String $sentence
     * @return Boolean
     */
    function checkIfPangram($sentence) {
        $length = count_chars($sentence, 1);
        return count($length) == 26;
    }
}
