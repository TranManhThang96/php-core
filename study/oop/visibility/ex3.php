<?php

/**
 * các đối tượng cùng loại sẽ có quyền truy cập các thành phần private và protected của nhau mặc dù chúng ko cùng instances;
 * Objects of the same type will have access to each others private and protected members even though they are not the same instances.
 * Điều này là do các chi tiết cụ thể về triển khai đã được biết khi bên trong các đối tượng đó
 * This is because the implementation specific details are already known when inside those objects.
 *
 */
class Test
{
    private $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    private function bar()
    {
        echo 'Accessed the private method.';
    }

    public function baz(Test $other)
    {
        // We can change the private property:
        $other->foo = 'hello';
        var_dump($other->foo);

        // We can also call the private method:
        $other->bar();
    }
}

$test = new Test('test');

$test->baz(new Test('other'));   //string(5) "hello"
                                     // Accessed the private method.