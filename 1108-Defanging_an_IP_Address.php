<?php
class Solution1 {

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address) {
        $address = explode(".", $address);
        return $address[0] . '[.]' . $address[1] . '[.]' . $address[2] . '[.]' . $address[3];
    }
}

class Solution2 {

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address) {
        $length = strlen($address);
        $result = '';
        for ($i = 0; $i<=$length - 1; $i++) {
            if ($address[$i] == '.') {
                $result .= '[' . $address[$i] . ']';
            } else {
                $result .= $address[$i];
            }
        }

        return $result;
    }
}
