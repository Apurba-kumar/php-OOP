<?php
class calculation 
{
    public $a=0, $b = 0, $c = 0;//here set default value for a b and c
    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }

}

$add = new calculation();
$add->a = 30;
$add->b = 20;
echo $add->sum()."\n";

$subtaction = new calculation();
$subtaction->a = 30;
$subtaction->b = 20;
echo $subtaction->sub();

?>