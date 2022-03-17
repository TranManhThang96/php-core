<?php

/**
 * có thể định nghĩa abstract trong trait. Và các lớp sử dụng nó phải định nghĩa body cho class này
 */

trait Hello {
    public function sayHelloWorld() {
        echo 'Hello'.$this->getWorld();
    }
    abstract public function getWorld();
}

class MyHelloWorld {
    private $world;
    use Hello;
    public function getWorld() {
        return $this->world;
    }
    public function setWorld($val) {
        $this->world = $val;
    }
}