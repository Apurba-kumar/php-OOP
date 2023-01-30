<?php
class base{
    public $name = "Parent Class";
    public function calc($a, $b){
        return $a * $b;
    }
}

class derived extends base{
    public $name = "Child class";
    public function calc($a, $b){
        return $a + $b;
    }
}

$test = new base();
echo $test->name."\n";
echo $test->calc(20, 30)."\n";

$test1 = new derived();
echo $test1->name."\n";
echo $test1->calc(20, 30);

?>