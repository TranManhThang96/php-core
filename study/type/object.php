<?php

class foo{
    function do_foo()
    {
        echo "Doing foo";
    }
}

$a = new foo;
var_dump($a->do_foo());