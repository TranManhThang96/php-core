<?php

/*
 * override: ghi đè thể hiện ở tính đa hình, lớp con kế thừa lớp cha và mở rộng.
 * Nói dễ hiểu lớp con có 1 hoặc nhiều phương thức giống lớp cha thì nó sẽ là ghi đè. Lớp này sẽ mở rộng và kế thừa từ lớp cha.
 * Quy tắc ghi đè (override)
 * Danh sách tham số phải trùng nhau, kiểu giá trị trả về phải tương thích
 * Phương thức đè không được giảm quyền truy nhập so với phiên bản của lớp cha.
 * Nói cách khác, quyền truy nhập mà phiên bản của lớp con cho phép phải bằng hoặc rộng hơn phiên bản của lớp cha.
 * Ta không thể cài đè một phương thức public bằng một phiên bản private
 * Các phương thức final, static, private không thể cài đè
 *
 * Overload (nạp chồng)
 * Nạp chồng phương thức đơn giản là có vài phương thức "trùng tên" nhưng khác nhau về "đối số" trong cùng 1 class
 * Tất cả các phương thức nạp chồng phải là "public"
 * Overloading properties via the __get(), __set(), __isset() and __unset() methods
 * Overloading methods via the __call() and __callStatic() methods
 */

class Test
{
    public function __call($name, $args)
    {
        if ($name === 'sum') {
            return $this->getSum($args);
        }
    }

    public function getSum($args)
    {
        $sum = 0;
        foreach ($args as $arg) {
            $sum = $sum + $arg;
        }
        return $sum;
    }

    public function test1(...$args)
    {
        return $this->getSum($args);
    }
}

$instance = new Test();
echo $instance->test1(4);
echo $instance->test1(4, 5, 6);