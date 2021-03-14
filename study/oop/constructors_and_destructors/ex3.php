<?php

class Test
{
    public $a = 'thang';
    public function show()
    {
        echo $this->a;
    }

    public function __destruct()
    {
        echo 'destruct';
        // TODO: Implement __destruct() method.
    }
}

$instance = new Test();
$instance->show();
echo (string)$instance->a;