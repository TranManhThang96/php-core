<?php

trait TestTrait
{
    public function show(...$arr)
    {
        if (count($arr) > 0) {
            foreach($arr as $a) {
                echo "{$a}";
            }
        }
    }
}

class Test
{
    use TestTrait;
    public static $a = 1;
    public static $b = 2;
}
$t = new Test;
$t->show(Test::$a, Test::$b);