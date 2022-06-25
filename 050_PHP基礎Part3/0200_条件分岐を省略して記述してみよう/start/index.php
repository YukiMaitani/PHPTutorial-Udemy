<?php
$array = [
  'key' => 10
];
$array['key'] =  $array['key']*10 ?? 1 ;
// $array['key'] = isset($array['key']) ? $array['key'] * 10 : 1;

echo $array['key'];