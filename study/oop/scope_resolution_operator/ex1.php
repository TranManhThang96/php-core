<?php

/**
 * :: là một mã token cho phép truy cập static, constant, và các properties ghi đè hoặc method của class
 * double colon is a token that allows access to static, constant, and overridden properties or methods of a class
 */

//:: from outside the class definition

class MyClass {
    const CONST_VALUE = 'A constant value';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE; //kk. vẫn dùng được cách này

echo MyClass::CONST_VALUE;