<?php
class employee{
   public $name;
   public $age;
   public $salary;
   function __construct($n, $a, $s)
   {
       $this->name = $n;
       $this->age = $a;
       $this->salary = $s;
   }
   function info(){
        echo "Employee profile \n";
        echo "Employee Name: " . $this->name . "\n";
        echo "Employee age: " . $this->age . "\n";
        echo "Employee salary: " . $this->salary . "\n";
   }
}

class manager extends employee{
    public $ta = 1000;
    public $phonebill = 500;
    public $totalsalary;
    function info(){
        $this->totalsalary = $this->salary + $this->ta + $this->phonebill;
        echo "Manager profile \n";
        echo "Employee Name: " . $this->name . "\n";
        echo "Employee age: " . $this->age . "\n";
        echo "Employee salary: " . $this->totalsalary . "\n";
   }

}
$employ = new manager("Apurba Kumar",27,60000);
$employ1 = new employee("Apu Kumar",25,50000);

$employ->info();
$employ1->info();


?>