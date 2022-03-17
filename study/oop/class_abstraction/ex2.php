<?php

/**
 * Class AbstractClass
 * abstract class chỉ cần định nghĩa tên phương thức và params arguments, ko định nghĩa body
 * lớp con có thể định nghĩa thêm optional arguments, nhưng bắt buộc phải có arguments ở cha.
 */
abstract class AbstractClass
{
    // Our abstract method only needs to define the required arguments
    abstract protected function prefixName($name);

}

class ConcreteClass extends AbstractClass
{

    // Our child class may define optional arguments not in the parent's signature
    public function prefixName($name, $separator = ".") {
        if ($name == "Pacman") {
            $prefix = "Mr";
        } elseif ($name == "Pacwoman") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        return "{$prefix}{$separator} {$name}";
    }
}

$class = new ConcreteClass;
echo $class->prefixName("Pacman"), "\n";
echo $class->prefixName("Pacwoman"), "\n";
