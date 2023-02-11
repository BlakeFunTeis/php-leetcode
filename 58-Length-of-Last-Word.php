class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $result = 0;
        for($i = strlen($s) - 1; $i >= 0; $i--) {
            if ($s[$i] == ' ') {
                if ($result > 0) {
                    break;
                }
            } else {
                $result++;
            }
        }

        return $result;
    }
}
