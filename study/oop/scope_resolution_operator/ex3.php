<?php
/**
 * Class A
 * A class constant, class property (static), and class function (static)
 * can all share the same name and be accessed using the double-colon
 */

class A {

    public static $B = '1'; # Static class variable.

    const B = '2'; # Class constant.

    public static function B() { # Static class function.
        return '3';
    }

}

echo A::$B;
echo A::B;
echo A::B();  // truy cập phương thức