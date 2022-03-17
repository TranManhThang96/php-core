<?php

/*
 * interface có thể extends interface
 */

interface a
{
    public function foo();
}

interface b extends a
{
    public function baz(Baz $baz);
}

// This will work vì b extends từ a nữa.
class c implements b
{
    public function foo()
    {
    }

    public function baz(Baz $baz)
    {
    }
}

// This will not work and result in a fatal error
class d implements b
{
    public function foo()
    {
    }

    public function baz(Foo $foo)
    {
    }
}