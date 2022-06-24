<?php
$char = '1ZAabd12_sscc';
if(preg_match("/.{2,}/i",$char,$result)) {
  echo '検索成功';
  print_r($result);
} else {
  echo '検索失敗';
}