<?php
/**
 * @author yuki
 * @since 1
 */

/**
 * 税込金額を取得する関数
 * 
 * @param int $base_price 価格
 * @param float $tax_rate 税率
 * 
 * @return int 税込金額
 * @see 
 */

function with_tax($base_price, $tax_rate = 0.1) {
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}
