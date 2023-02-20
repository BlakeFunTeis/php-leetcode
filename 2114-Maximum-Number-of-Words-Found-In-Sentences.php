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

//Although the time complexity of the first implementation is also O(n+m),
//its execution speed is faster than PHP code because it uses PHP built-in functions count and explode, which are written in C.
//
//On the other hand, the second implementation uses two nested loops.
//The outer loop traverses each sentence, and the inner loop iterates over each character of each sentence to look for separators and split the sentence into words.
//Due to the nested loops, this implementation requires more computations and may run slower than the first implementation.

class Solution2 {

    /**
     * @param String[] $sentences
     * @return Integer
     */
    function mostWordsFound($sentences) {
        $list = [];
        foreach($sentences as $key => $value){
            $list[] = count(explode(" ",$value));
        }

        return max($list);
    }
}
