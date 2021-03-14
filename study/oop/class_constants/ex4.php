<?php
class A {
    const MY_CONST = 10;
    public function my_const_self() {
        return self::MY_CONST;
    }
    public function my_const_static() {
        return static::MY_CONST;
    }
}

class B extends A {
    const MY_CONST = 20;
}

$b = new B();
echo $b->my_const_self(); // output: 10
echo $b->my_const_static(); // output: 20

class NewA {
    const CONST_INT = 10;

    public function getSelf(){
        return self::CONST_INT;
    }

    public function getThis(){
        return $this::CONST_INT;
    }
}

class NewB extends NewA {
    const CONST_INT = 20;

    public function getSelf(){
        return parent::getSelf();
    }

    public function getThis(){
        return parent::getThis();
    }
}

$b = new NewB();

print_r($b->getSelf());     //10
print_r($b->getThis());     //20
