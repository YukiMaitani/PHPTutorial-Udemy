<?php
$price = 1000;
function with_tax($base_price,$tax_rate = 0.1){
  $sum_price = $base_price * (1 + $tax_rate);
  $sum_price = round($sum_price);
  return $sum_price;
}
$price = "with_tax"($price,0.08);
echo "{$price}円です";