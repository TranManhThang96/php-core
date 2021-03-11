<?php
/**
 * PHP kế thừa (inherited) qua từ khoá extends
 * PHP chỉ hỗ trợ đơn kế thừa (1 class chỉ có thể kế thừa duy nhất từ 1 class khác)
 * constants, methods, and properties can be overridden
 * Tuy nhiên nếu lớp cha định nghĩa method final thì lớp con không thể overridden
 * Có thể truy cập methods hoặc thuộc tính static (static properties) của lớp cha bằng parent::
 * Còn lại truy cập properties của lớp cha bằng $this->property
 * self thay cho this, nếu truy cập static property trong class của mình.
 */

class Person
{
    public $name = 'thang';
    private $age = 24;
    public static $type = 'nguoi';

    public function show()
    {
        echo $this->name.'-'.$this->age;
        echo self::$type;
    }
}

class Student extends Person
{
    public function show()
    {
        parent::show();
        echo PHP_EOL;
        $this->name = 'thangbeo';
        echo $this->name;
        echo PHP_EOL;
        echo parent::$type;
        echo PHP_EOL;
        echo 'ahihi';
    }
}

$thang = new Student();
$thang->show();