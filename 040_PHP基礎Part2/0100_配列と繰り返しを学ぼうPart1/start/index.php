<?php 
$array = ['taro','hanako','jiro'];
$array[1] = 'sachiko';
$array[] = 'sburo';

for($i = 0; $i < count($array); $i++) {
  echo '<div>'.$array[$i]. '</div>';
}

foreach($array as $i => $v) {
  echo '<div>'. $i,$v.'</div>';
}