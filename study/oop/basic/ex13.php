<?php

class A {
    public function test($foo, $bar)
    {
        echo $foo . "-". $bar;
    }
}

class B extends A {
    public function test($a, $b)
    {
        parent::test($a, $b);
    }
}

$obj = new B;

// Pass parameters according to A::test() contract
// $obj->test(foo: "foo", bar: "bar"); // ERROR!
$obj->test("foo", "bar");