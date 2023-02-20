<?php
class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $temp = 0;
        foreach($accounts as $account) {
            $money = array_sum($account);
            $temp = $temp > $money ? $temp : $money;
        }
        return $temp;
    }
}
