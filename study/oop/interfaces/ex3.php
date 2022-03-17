<?php

/*
 * 1 interface có thể extends 1 hoặc nhiều interface khác
 * 1 class có thể implements 1 hoặc nhiều interface
 */

interface a
{
    public function foo();
}

interface b
{
    public function bar();
}

interface c extends a, b
{
    public function baz();
}

class d implements c
{
    public function foo()
    {
    }

    public function bar()
    {
    }

    public function baz()
    {

    }
}

class e implements a, b
{
    public function foo()
    {
    }

    public function bar()
    {
    }

    public function baz()
    {

    }
}
