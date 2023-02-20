<?php
class Solution {

    /**
     * @param Integer[] $ranks
     * @param String[] $suits
     * @return String
     */
    function bestHand($ranks, $suits) {
        $isCheckFlush = array_count_values($suits);
        if (count($isCheckFlush) == 1) {
            return "Flush";
        }

        $temp = 0;
        foreach($ranks as $rank) {
            $result[$rank] += 1;
            $temp = $temp > $result[$rank] ? $temp : $result[$rank];
        }

        if ($temp >= 3) {
            return "Three of a Kind";
        } else if ($temp == 2) {
            return "Pair";
        } else if ($temp == 1) {
            return "High Card";
        }
    }
}
