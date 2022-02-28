<?php
// Một ví dụ hết sức hại não, vấn đề mở rộng của ex4.php
// https://www.php.net/manual/en/language.oop5.basic.php#79856
class ObjectClass
{
    public $foo = "bar";
    public $test = "thắng";
};

$objectVar = new ObjectClass();
$reference = &$objectVar;
$assignment = $objectVar;

$objectVar->foo = "quix";
$assignment->test = "thắng béo";
var_dump($objectVar);
var_dump($reference);
var_dump($assignment);
