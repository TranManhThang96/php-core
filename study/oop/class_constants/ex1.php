<?php
/**
 * Class MyClass
 * $classname = "MyClass";
 * echo $classname::CONSTANT . "\n";
 * chú ý có cách sử dụng này nữa
 */

class MyClass
{
    const CONSTANT = 'constant value';

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}

echo MyClass::CONSTANT . "\n";

$classname = "MyClass";
echo $classname::CONSTANT . "\n";

$class = new MyClass();
$class->showConstant();

echo $class::CONSTANT."\n";