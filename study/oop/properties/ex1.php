<?php

/*
 * có thể định nghĩa kiểu dữ liệu trước
 * ?string là có thể là string hoặc không.
 */

class User
{
    public int $id;
    public ?string $name;

    public function __construct(int $id, ?string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

$user = new User(1234, null);

var_dump($user->id);
var_dump($user->name);

?>