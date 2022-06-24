<?php 
$arry = [
  ['table',1000],
  ['bed',1000],
  ['chair',1000],
  ['chair',1000],
  ['chair',1000]
];

array_splice($arry,2,2,['replace']);


foreach($arry as $val) {
  echo "{$val[0]}は{$val[1]}円です。";
}