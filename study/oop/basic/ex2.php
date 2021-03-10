<?php
class A
{
    static function show()
    {
        echo 'thangbeo';
    }

    function foo()
    {
        echo 'vẫn chạy vào hàm này';
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$a = new A();
$a->foo();

A::show();

$b = new B();
$b->bar();

B::bar();
