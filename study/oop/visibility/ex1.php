<?php
/**
 * Define MyClass
 * var $myPublicVar = 'thắng béo'; như một property public nếu có var ở trước (If declared using var, the property will be defined as public.)
 * Hằng số nếu ko khai báo visibility thì mặc định là public. Constants declared without any explicit visibility keyword are defined as public.
 */
class MyClass
{
    // Declare a public constant
    public const MY_PUBLIC = 'public';

    // Constants declared without any explicit visibility keyword are defined as public.

    const MY_CONST_PUBLIC = 'public';
    // Declare a protected constant
    protected const MY_PROTECTED = 'protected';

    // Declare a private constant
    private const MY_PRIVATE = 'private';

    var $myPublicVar = 'thắng béo';

    public function foo()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE;
        echo $this->myPublicVar;
    }
}

$myclass = new MyClass();
MyClass::MY_PUBLIC; // Works
var_dump(MyClass::MY_PUBLIC);
MyClass::MY_PROTECTED; // Fatal Error
MyClass::MY_PRIVATE; // Fatal Error
$myclass->foo(); // Public, Protected and Private work

/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // This is public
    function foo2()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE; // Fatal Error
    }
}

$myclass2 = new MyClass2;
echo MyClass2::MY_PUBLIC; // Works
$myclass2->foo2(); // Public and Protected work, not Private