<?php
class Solution {

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address) {
        $address = explode(".", $address);
        return $address[0] . '[.]' . $address[1] . '[.]' . $address[2] . '[.]' . $address[3];
    }
}
