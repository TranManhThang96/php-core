<?php

class SimpleClass
{

}

$instance = new SimpleClass();

$assigned   =  $instance;
$reference  =& $instance;

$instance->var = '$assigned will have this value';

$instance = null; // $instance and $reference become null

var_dump($instance);  // NULL vì instance được gán = null
var_dump($reference); // NULL vì tham chiếu với instance
var_dump($assigned);  //  object(SimpleClass) vì $assigned là biến tham trị
