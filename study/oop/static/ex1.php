<?php

/**
 * pseudo-variable $this is not available inside methods declared as static
 * có 3 cách truy cập static method
 * Static trong lập trình hướng đối tượng là 1 thành phần tĩnh (thuộc tính hoặc phương thức).
 * Phương thức static có thể truy cập mà không cần khởi tạo.
 * Trong phương thức static "không thể" gọi phương thức hoặc thuộc tính non-static.
 * Trong phương thức non-static "có thể" gọi phương thức hoặc thuộc tính static.
 * Phương thức static có thể gọi ngay cả khi chưa khởi tạo đối tượng
 * self và static có thể được sử dụng để truy cập các phương thức tĩnh và các biến từ bên trong 1 lớp xác định hoặc kế thừa chúng
 * self đại diện cho cho chính đối tượng khai báo đến nó. Nếu class A thừa kế class B thì có nghĩa rằng self đại diện cho class B
 * static thì lại đại diện cho chính đối tượng đang gọi đến nó
 */
class Foo {
    public static function aStaticMethod() {
        echo 'có 3 cách truy cập static method'.PHP_EOL;
    }
}

$test = new Foo();
$test::aStaticMethod();
$test->aStaticMethod();
Foo::aStaticMethod();
