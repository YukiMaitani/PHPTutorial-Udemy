<?php

use Person as GlobalPerson;

/**
 * クラス継承
 */
class Person
{
    protected $name;
    public $age;
    public static $WHERE = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
        return $this;
    }

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
$bob->jusho();
// $bob->hello()->bye();

// $tim = new Person('Tim', 32);
// $tim->hello();