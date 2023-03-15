<?php
class Solution {

    /**
     * @param Integer[][] $points
     * @param Integer[][] $queries
     * @return Integer[]
     */
    function countPoints($points, $queries) {
        $res = array();
        foreach ($queries as $q) {
            $xq = $q[0];
            $yq = $q[1];
            $r = $q[2];
            $cnt = 0;
            foreach ($points as $p) {
                $xp = $p[0];
                $yp = $p[1];
                if (hypot($xp - $xq, $yp - $yq) <= $r) {
                    $cnt++;
                }
            }
            array_push($res, $cnt);
        }
        return $res;
    }
}
