<?php

/*
 * tạo instance ở lớp con
 * parent constructor ko được gọi nếu lớp con định nghĩa 1 constructor
 * parent constructor được gọi ngầm nếu lớp con không định nghĩa 1 constructor,
 * nó sẽ kế thừa constructor từ lớp cha giống như 1 phương thức bt (miễn là ko khai báo private ở lớp cha)
 * trường hợp cả lớp cha và lớp con đều định nghĩa constructor, nếu muốn gọi constructor ở lớp cha
 * thì sử dụng parent::__construct() ở lớp con;
 */

class ParentClass
{
    function __construct()
    {
        echo 'hàm tạo lớp cha';
    }
}

class ChildClass extends ParentClass
{
    public function __construct()
    {
        parent::__construct();
        echo 'hàm tạo lớp con';
    }
}

$instance = new ChildClass();