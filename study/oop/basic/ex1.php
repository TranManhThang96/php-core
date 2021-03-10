<?php
/*
 * bắt đầu bằng từ khoá class
 * có thể đặt bất cứ tên gì (có nghĩa nhé) nhưng không phải là  PHP reserved word
 * Class names MUST be declared in StudlyCaps
 * $this (pseudo-variable hay còn gọi là biến giả) trỏ tới chính class đang được gọi
 * */

class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}

$instance = new SimpleClass();
$instance->displayVar();