<?php

/*
 * stdClass
 * stdClass is the default PHP object.
 * It does not support magic methods, and implements no interface
 * instance of
 * is_subclass_of
 * get_class
 * get_parent_class
 */

// ways of creating stdClass instances
$x = new stdClass;
$y = (object) null;        // same as above
$z = (object) 'a';         // creates property 'scalar' = 'a'
$a = (object) array('property1' => 1, 'property2' => 'b');

$x->newProperty = 'thangbeo';
var_dump($x);
var_dump($y);
var_dump($z);
var_dump($a);


/*
 * stdClass is NOT a base class! PHP classes do not automatically inherit from any class
 */

class CTest
{
    public $property1;
}

class CTestChild extends CTest
{

}

$t = new CTest;
$tc = new CTestChild();
//var_dump($t instanceof stdClass);            // false
//var_dump(is_subclass_of($t, 'stdClass'));    // false
//echo get_class($t) . "\n";                   // 'CTest'
//echo get_parent_class($t) . "\n";            // false (no parent)

var_dump(is_subclass_of($tc, 'CTest'));    // true
echo get_class($tc) . "\n";                   // 'CTestChild '
echo get_parent_class($tc) . "\n";            // CTest
