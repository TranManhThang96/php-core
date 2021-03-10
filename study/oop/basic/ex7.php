<?php

/*
 * có thể trùng tên biến và tên phương thức bởi vì chúng nằm trong không gian tên riêng biệt (Class properties and methods live in separate "namespaces")
 * tuỳ thuộc vào ngữ cảnh chúng là biến, hay phương thức thì biến hoặc phương thức sẽ được gọi
 */

class Foo
{
    public $bar = 'property';

    public function bar() {
        return 'method';
    }
}

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;