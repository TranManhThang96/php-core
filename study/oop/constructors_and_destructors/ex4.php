<?php

class A
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
        echo "construct {$this->id}\n";
    }

    public function __destruct()
    {
        echo "destruct {$this->id}\n";
    }
}

$a = new A(1);
echo "-------------\n";
$aa = new A(2);
echo "=============\n";
