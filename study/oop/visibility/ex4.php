<?php
abstract class base {
    public function inherited() {
        $this->overridden();
    }
    private function overridden() {
        echo 'base';
    }
}

class child extends base {
    private function overridden() {
        echo 'child';
    }
}

$test = new child();
$test->inherited(); // base: bởi vì phạm vi truy cập là private


abstract class base1 {
    public function inherited() {
        $this->overridden();
    }
    protected function overridden() {
        echo 'base';
    }
}

class child1 extends base1 {
    protected function overridden() {
        echo 'child';
    }
}

$test1 = new child1();
$test1->inherited(); // child: bởi vì lúc này phạm vi truy cập là protected
?>