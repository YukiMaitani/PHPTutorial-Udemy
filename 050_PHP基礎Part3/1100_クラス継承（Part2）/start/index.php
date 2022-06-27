<?php

use animal\Japanese as AnimalJapanese;
use Japanese as GlobalJapanese;

/**
 * クラス継承
 */
abstract class Person
{
    public $name;
    public $age;
    public const WHERE = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    abstract function hello();

    static function bye() {
        echo 'bye';
    }
}

class Japanese extends Person {
    public static $WHERE = '日本';

    function hello() {
        echo 'こんにちは, ' . $this->name;
        return $this;
    }

    function jusho() {
        echo '住所は'. static::$WHERE.'です。';
    }
}

$bob = new Japanese('Bob', 18);
$bob->hello();