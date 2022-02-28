<?php 

class Test
{
    public $var1 = 'ManhThang';

    public function __construct()
    {
        echo "__construct";
    }

    public function __destruct()
    {
        echo "__destruct";
    }
}
//có thể sử dụng unset để test destructor
//nó sẽ tự động gọi vào destructor khi unset
$instance = new Test();
unset($instance);