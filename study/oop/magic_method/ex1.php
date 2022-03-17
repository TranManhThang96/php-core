<?php

/*
 * Magic methods are special methods which override PHP's default's action when certain actions are performed on an object.
 * magic method là các phương thức đặc biệt, nó ghi đè hành động mặc định của PHP khi một số hành động nhất định được thực hiện trên một đối tượng
 * Các phương thức đó là: __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(),
 * __sleep(), __wakeup(), __serialize(), __unserialize(), __toString(), __invoke(), __set_state(), __clone(), and __debugInfo().
 *
 * Tất các các magic method đều phải khai báo __ và là phương thức public
 */

class Test
{
    public $nonMagicVar = 'test';


    public function __set($name, $value)
    {
        $this->name = $value;
    }

    public function __get($name)
    {
        return 'magic method '.$name;
    }
}

$instance = new Test;
$instance->new = 2;
echo $instance->new; //magic method 2