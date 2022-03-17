<?php

/**
 * Class ParentClass
 * self::who() will always output ‘parent’,
 * $this->who() sẽ phụ thuộc vào lớp mà đối tượng có
 * while $this->who() will depend on what class the object has
 * self refers đến class mà nó được gọi, trong khi $this refers đến class hiện tại của object.
 * Now we can see that self refers to the class in which it is called, while $this refers to the class of the current object.
 * Vì vậy chỉ sử dụng selft khi $this ko khả dụng, hoặc khi bạn không muốn lớp con ghi đè lên các phương thức hiện tại.
 * So, you should use self only when $this is not available, or when you don’t want to allow descendant classes to overwrite the current method
 */

class ParentClass {
    function test() {
        self::who();    // will output 'parent'
        $this->who();    // will output 'child'
    }

    function who() {
        echo 'parent';
    }
}

class ChildClass extends ParentClass {
    function who() {
        echo 'child';
    }
}

$obj = new ChildClass();
$obj->test();