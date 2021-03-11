<?php

/*
 * override methods:
 * phải định nghĩa đầy đủ tham số
 * kiểu dữ liệu của tham số phải đồng nhất (ko thể ở trên đặt là int mà ở dưới lại là string)
 */

class Base
{
    public function foo(int $a = 5)
    {
        echo $a;
    }
}

class Extend extends Base
{
    public function foo()
    {
        parent::foo(5);
    }
}

$test = new Extend;
$test->foo();