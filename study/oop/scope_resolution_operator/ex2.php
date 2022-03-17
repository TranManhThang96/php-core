<?php

/**
 * Class MyClass
 * biến static có thể truy cập bằng self::$var (trong class) hoặc class::$var từ ngoài class
 *
 */
class MyClass {
    const CONST_VALUE = 'A constant value';
}

class OtherClass extends MyClass
{
    public static $my_static = 'static var';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
}

$classname = 'OtherClass';
$classname::doubleColon();

OtherClass::doubleColon();
echo OtherClass::$my_static;
echo $classname::$my_static;
