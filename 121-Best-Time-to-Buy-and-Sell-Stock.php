class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $minPrice = $prices[0];
        $maxPrice = $prices[0];
        $coin = 0;
        foreach($prices as $day => $price) {
            if ($price <= $minPrice) {
                $minPrice = $price;
                $maxPrice = 0;
            }
            if ($price >= $maxPrice) {
                $maxPrice = $price;
            }
            if ($maxPrice > $minPrice &&  $maxPrice - $minPrice >= $coin) {
                $coin = $maxPrice - $minPrice;
            }
        }
        return $coin;
    }
}
