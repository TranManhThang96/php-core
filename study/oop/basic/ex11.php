<?php

/*
 * ::class (className::class sẽ lấy ra đầy đủ cả namespace\className)
 * get_class được sử dụng tương tự (https://www.php.net/manual/en/function.get-class.php)
 */

namespace App\Oop\Basic;

class newApp
{
    public function show()
    {
        echo get_class($this);
    }
}

echo newApp::class;
$test = new newApp();
$test->show();