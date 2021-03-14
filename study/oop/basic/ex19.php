<?php

/*
 * không thể định nghĩa 2 phương thức cùng tên mà khác tham số được
 */

class Test
{
    public int $age = 25;

    public function show()
    {
        echo $this->age;
    }

    public function show(string $name): string
    {
        echo $name;
        return $name;
    }
}


$instance = new Test;
$instance->show();
$instance->show('thangbeo');