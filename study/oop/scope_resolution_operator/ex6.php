<?php

/**
 * self và static có thể được sử dụng để truy cập các phương thức tĩnh và các biến từ bên trong 1 lớp xác định hoặc kế thừa chúng
 * self đại diện cho cho chính đối tượng khai báo đến nó. Nếu class A thừa kế class B thì có nghĩa rằng self đại diện cho class B
 * static thì lại đại diện cho chính đối tượng đang gọi đến nó (nó giống this chỉ khác là truy cập được các phương thức tĩnh
 * và các biến thông qua ::)
 */
class A {
    const C = 'constA';
    public function m() {
        echo static::C;
//        echo self::C;
    }
}

class B extends A {
    const C = 'constB';
}

$b = new B();
$b->m(); // constB if static::C
         // constA if self::C