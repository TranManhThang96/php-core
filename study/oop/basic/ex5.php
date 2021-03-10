<?php
#5 Creating new objects

class Test
{
    static public function getNew()
    {
        return new static;
    }
}

class Child extends Test
{}

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);  //bool

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);   //bool

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);   //bool
