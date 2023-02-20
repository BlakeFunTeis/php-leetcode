<?php
class Solution1 {

    /**
     * @param String[] $sentences
     * @return Integer
     */
    function mostWordsFound($sentences) {
        $total = 0;
        $temp = 1;
        foreach($sentences as $k => $sentence) {
            $strlen = strlen($sentence);
            for($i = 0; $i <= $strlen - 1; $i++) {
                if ($sentence[$i] == ' ') {
                    $temp++;
                }
            }
            $total = $temp > $total ? $temp : $total;
            $temp = 1;
        }

        return $total;
    }
}