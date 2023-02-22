<?php
class Solution1 {

    /**
     * @param String $J
     * @param String $S
     * @return Integer
     */
    function numJewelsInStones($J, $S) {
        $count = 0;
        $S = str_split($S);
        $data = array_count_values($S);
        for($i=0; $i<=strlen($J); $i++) {
            $count += $data[$J[$i]];
        }
        return $count;
    }
}

class Solution2 {

    /**
     * @param String $jewels
     * @param String $stones
     * @return Integer
     */
    function numJewelsInStones($jewels, $stones) {
        $jewels = count_chars($jewels, 1);
        $stones = count_chars($stones, 1);
        $result = 0;
        foreach($stones as $stoneNumber => $count) {
            if (!empty($jewels[$stoneNumber])) {
                $result += $count;
            }
        }

        return $result;
    }
}
