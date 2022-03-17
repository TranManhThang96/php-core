<?php

/**
 * Trait Hello
 * 1 lớp có thể sử dụng nhiều trait
 */
trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World';
    }
}

class MyHelloWorld {
    use Hello, World;   //1 lớp có thể sử dụng nhiều trait
    public function sayExclamationMark() {
        echo '!';
    }
}