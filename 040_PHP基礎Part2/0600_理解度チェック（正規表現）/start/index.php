<?php
// 正規表現を使って形式が正しいかチェックしてみよう。
/**
 * よく使う表現
 * . 任意の一文字
 * * 0回以上の繰り返し
 * + 1回以上の繰り返し
 * {n} n回の繰り返し
 * [] 文字クラスの作成
 * [abc] aまたはbまたはc
 * [^abc] aまたはbまたはc以外
 * [0-9] 0~9まで
 * [a-z] a~zまで
 * $ 終端一致
 * ^ 先頭一致
 * \w 半角英数字とアンダースコア
 * \d 数値
 * \ エスケープ
 */


/**
 * 郵便番号
 * 
 * 001-0012 -> OK
 * 001-001 -> NG
 * 2.2-3042 -> NG
 * wd3-2132 -> NG
 * 124-56789 -> NG
 */

$posnum = '001-001';
if(preg_match("/[0-2-]{8}/",$posnum,$result)) {
  echo 'OK';
  print_r($result);
} else {
  echo 'NG';
}


/**
 * Email
 * . _ - と半角英数字が可能
 * 
 * example000@gmail.com -> OK
 * example-0.00@gmail.com -> OK
 * example-0.00@ex.co.jp -> OK
 * example/0.00@ex.co.jp -> NG
 */

$email = 'example-0.00@gmail.com';
if(preg_match("/^[a-z0-9.\-]+@/",$email,$result)) {
  echo 'OK';
  print_r($result);
} else {
  echo 'NG';
}


/**
 * HTML
 * 見出しタグ(h1~h6)の中身のみ取得してみよう。
 *
 */


$html = '<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>見出し１</h1>    
    <h2>見出し２</h2>    
    <h3>見出し３</h3>    
    <header>ヘッダー</header>
</body>
</html>';
if(preg_match_all("/<h[1-6]>(.+)<\/h[1-6]>/",$html,$result)) {
  echo 'OK';
  print_r($result[count($result) - 1]);
} else {
  echo 'NG';
}
