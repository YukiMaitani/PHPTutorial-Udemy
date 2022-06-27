<?php
/**
 * 理解度チェック（クラス）
 * 
 * ファイル書き込みを行うためのクラスを定義してみましょう。
 * 
 * ヒント）PHP_EOL: 改行するための特殊な定数です。
 */
$content = 'Hello, Bob.'; // append
$content .= PHP_EOL; // newline
$content .= 'Bye, '; // append
$content .= 'Bob.'; // append
$content .= PHP_EOL; // newline

// commit
file_put_contents('sample.txt', $content);
$content = '';

$content = 'Good night, Bob.'; // append

// commit
file_put_contents('sample.txt', $content, FILE_APPEND);
$content = '';

class MyFileWriter {
    public $file;
    public $content = '';
    static public $APPEND;

    function __construct($file)
    {
        $this->name = $file;
    }

    function newline() {
        $this->content = $this->content . PHP_EOL;
    }

    function append($str) {
        $this->content = $this->content . $str;
    }

    function commit() {
        file_put_contents($this->file, $this->content);
        $this->content = '';
    }
}

/* クラスの呼び出し方は以下のようにするものとします。

$file = new MyFileWriter('sample.txt');
$file->append('Hello, Bob.')
    ->newline()
    ->append('Bye, ')
    ->append('Bob.')
    ->newline()
    ->commit()
    ->append('Good night, Bob.')
    ->commit(MyFileWriter::APPEND);

*/