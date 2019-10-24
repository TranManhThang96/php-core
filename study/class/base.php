<?php

class ParentTest
{
    public function __construct()
    {
        echo 'hihi';
    }

    public function __destruct()
    {
        exit();
    }
}

$a = new ParentTest();
unset($a);

