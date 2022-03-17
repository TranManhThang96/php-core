<?php

/*
 * final ngăn các lớp con ghi đè lên một phương thức của lớp cha
 * method mà bản thân nó đang được định nghĩa là final thì ko thể ghi đè
 */

class BaseClass {
    public function test() {
        echo "BaseClass::test() called\n";
    }

    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
}

class ChildClass extends BaseClass {
    //// Results in Fatal error: Cannot override final method BaseClass::moreTesting()\
    /// bở vì lớp moreTesting đã được định nghĩa là final nên lớp con ko thể kế thừa
    public function moreTesting() {
        echo "ChildClass::moreTesting() called\n";
    }
}