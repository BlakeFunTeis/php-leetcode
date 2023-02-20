<?php
class Solution {

    /**
     * @param Integer[] $seats
     * @param Integer[] $students
     * @return Integer
     */
    function minMovesToSeat($seats, $students) {
        sort($seats);
        sort($students);
        $result = 0;
        foreach($seats as $k => $seat) {
            $result += abs($students[$k] - $seats[$k]);
        }
        return $result;
    }
}
