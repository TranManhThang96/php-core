<?php
class toop {
    public $i = "1234";
    public function setv($a) {
        $this->i = $a;
    }
    public function returnthis() {
        return $this;
    }
}
$ob = new toop();
$ob1 = new toop();
$obthis = $ob->returnthis();
echo $ob->i."\n";     //1234
$ob->setv("\$ob set");
echo $ob->i."\n";     //$ob set
$obthis->setv("\$obthis set");
echo $ob->i."\n";     //$obthis set
$ob1->setv('$ob1 set');
echo $ob->i."\n";    //$obthis set
?>