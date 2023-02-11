class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        // The time complexity of this code is O(n^2). This is because, in the loop, each element will undergo one query operation and one deletion operation. Both of these operations have a complexity of O(n), thus the total time complexity is O(n^2).
        // for ($i = 0; $i<=count($nums) - 1; $i++) {
        //     $result[$nums[$i]] += 1;
        //     if ($result[$nums[$i]] >= 2) {
        //         unset($result[$nums[$i]]);
        //     }
        // }

        // return $result;
        for ($i = 0; $i<=count($nums) - 1; $i++) {
            $result ^= $nums[$i];
        }
        return $result;
    }
}
