<?php

/**
 * Conflict Resolution
 * trường hợp các trait có tên phương thức sẽ xảy ra fatal error
 * Để giải quyết việc này có 2 cách: sử dụng insteadof hoặc alias
 */
trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class AliasedTalker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}

$talker1 = new Talker();
$talker1->smallTalk();  // b
$talker1->bigTalk();    // A

$alias = new AliasedTalker();
$alias->talk();  //B