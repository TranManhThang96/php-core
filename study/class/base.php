<?php
namespace ClassTest;

class ParentClass
{
    public static $a = 'abcd';
    public function test()
    {
        echo 'class parent';
    }
}

class ChildClass extends ParentClass
{
    public function test()
    {
        parent::test();
        echo parent::$a;
        echo 'haha';
    }
}

echo ParentClas::class;