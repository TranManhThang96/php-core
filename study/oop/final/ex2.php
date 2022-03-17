<?php

/*
 * tương tự final class cũng ko thể kế thừa
 */
final class BaseClass
{
    public function test()
    {
        echo "BaseClass::test() called\n";
    }

// As the class is already final, the final keyword is redundant
    final public function moreTesting()
    {
        echo "BaseClass::moreTesting() called\n";
    }
}

// Results in Fatal error: Class ChildClass may not inherit from final class (BaseClass)
class ChildClass extends BaseClass
{
}