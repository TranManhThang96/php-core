<?php

error_reporting(E_ALL | E_STRICT | E_ERROR | E_WARNING | E_PARSE | E_COMPILE_ERROR);

class A
{
    private $private = 1;
    public $public = 1;

    function get()
    {
        return "A: $this->private , $this->public\n";
    }

}

class B extends A
{

    function __construct()
    {
        $this->private = 2;
        $this->public = 2;
    }

    function set()
    {
        $this->private = 3;
        $this->public = 3;
    }

    function get()
    {
        return parent::get() . "B: $this->private , $this->public\n";
    }

}

$B = new B;

echo $B->get();  // return A: 1, 2    B: 2, 2
echo $B->set();
echo $B->get(); // return A: 1, 3   B: 3, 3