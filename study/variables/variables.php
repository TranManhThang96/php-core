<?php
function test()
{
    return 25;
}

$bar = &test();

$bar = 20;
var_dump(test());