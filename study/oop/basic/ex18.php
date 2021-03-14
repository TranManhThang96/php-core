<?php

/**
 * Class a
 * 1 instance vẫn có thể truy cập vào static function
 */
class a {

    public static $foo = 'I am foo';
    public $bar = 'I am bar';

    public static function getFoo() { echo self::$foo;    }
    public static function setFoo() { self::$foo = 'I am a new foo'; }
    public function getBar() { echo $this->bar;    }
}

$ob = new a();
a::getFoo();     // output: I am foo
$ob->getFoo();    // output: I am foo
//a::getBar();     // fatal error: using $this not in object context
$ob->getBar();    // output: I am bar
// If you keep $bar non static this will work
// but if bar was static, then var_dump($this->bar) will output null

// unset($ob);
a::setFoo();    // The same effect as if you called $ob->setFoo(); because $foo is static
$ob = new a();     // This will have no effects on $foo
$ob->getFoo();    // output: I am a new foo