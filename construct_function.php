<?php

class person{
    public $name, $age;
    function __construct($n = "No name" , $a = 0)//here add default value for object
    {
        $this->name = $n;
        $this->age = $a;
    }
    function show(){
        echo $this->name." - ".$this->age."\n";
    }
}

$obj1 = new person();
$obj2 = new person("Apurba Kumar",20);
$obj3 = new person("Ram Kumar",27);
$obj1->show();
$obj2->show();
$obj3->show();
?>