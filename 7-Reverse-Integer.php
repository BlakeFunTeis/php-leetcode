class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        if ($x < 0) {
            $x = '-'.substr(strrev($x), 0, -1);
        } else {
            $x = strrev($x);
        }

        return $x > 2147483647 || $x < -2147483647
            ? 0
            : (int)$x;
    }
}
