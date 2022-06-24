<?php
$array = [
  'name' => 'Bob',
  'age' => 12,
  'sports' => ['baseball','swiming']
];
unset($array['name']);
echo $array['age'];
echo $array['sports'][1];