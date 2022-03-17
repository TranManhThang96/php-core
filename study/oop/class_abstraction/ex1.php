<?php

/**
 * Class AbstractClass
 * Class abstract ko được khởi tạo (ko có instance) thông qua new.
 * Nó tạo ra để các lớp khác kế thừa. Vì vậy nó không thể khởi tạo qua new.
 * Mọi class abstract chứ "it nhất" một abstract method
 * class abstract có thể bao gồm cả method thường (common method) lẫn method abstract.
 * method abstract chỉ định nghĩa tên phương thức và ko có body.
 * Khi kế thừa lớp abstract. Tất cả các method abstract ở lớp cha phải được khai báo ở lớp con.
 *
 * Bổ sung
 * bản chất của interface và AbstractClass có nét giống nhau. Nếu AbstractClass chỉ định nghĩa các method AbstractClass thì nó sẽ giống interface
 * Buộc các lớp kế thừa (abstract) hoặc implement(interface) phải định nghĩa các method abstract hoặc method được định nghĩa trong interface.
 * Ngoài ra AbstractClass còn có các method thường (common method)
 * https://viblo.asia/p/huong-doi-tuong-va-the-hien-trong-lap-trinh-php-chapter-1-bJzKmg6Xl9N#_3-phan-biet-abstract-class-va-interface-6
 */
abstract class AbstractClass
{
    public $var1 = 'test';

    static $testStatic = 'test static';

    abstract public function abstractMethodParent();

    protected function funMethod()
    {
        echo 'abstract class bao gồm cả method thường';
    }
}

class BasicClass extends AbstractClass
{
    function abstractMethodParent()
    {
        echo 'phải khai báo tất cả các phương thức abstract ở lớp cha';

    }
}