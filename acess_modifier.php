<?php


// //public access modifier could  access by itself , outside of class and derive class
// class base{
//     public $name;
//     function __construct($n)
//     {
//         $this->name = $n;
//     }
//     function display(){
//         echo "Name is: " . $this->name."\n";
//     }
// }
// class derived extends base{
    
//     function display()
//     {
//         echo "Name from derived class:" . $this->name;
//     }
// }

// $obj = new base("Apurba Kumar");

// $obj->display();

// $obj1 = new derived("Mr. Apurba Kumar \n");
// $obj1->display();
// $obj1->name = "Apurba Kumar Mondol";
// $obj1->display();




// //Protected access modifier could by access itself and derived class

// class base{
  
//     protected $fname;
   
//     function __construct($n)
//     {
//         $this->fname = $n;
//     }
//     function display(){
//         echo "Name is: " . $this->fname."\n";
//     }
// }
// class derived extends base{
    
//     function display()
//     {
//         echo "Name from derived class:" . $this->fname;
//     }
// }

// $obj = new base("Apurba Kumar");

// $obj->display();

// $obj1 = new derived("Mr. Apurba Kumar");

// $obj1->display();

// // $obj1->fname = "Apurba Kumar Mondol";//Cannot access protected property
// // $obj1->display();



//private access modifier could accces by itself.

class base{
    private $name;
    function __construct($n)
    {
        $this->name = $n;
    }
    function display(){
        echo "Name is: " . $this->name."\n";
    }
}
class derived extends base{
    
    function display()
    {
        echo "Name from derived class:" . $this->name;//cannot access private property from base class
    }
}

$obj = new base("Apurba Kumar");

$obj->display();

// $obj1 = new derived("Mr. Apurba Kumar \n");//cannot access private property by derived class
// $obj1->display();
// $obj1->name = "Apurba Kumar Mondol";//cannot access private property outside of a class
// $obj1->display();

// $obj1 = new derived("Apurba");//we cannot access private property from derived class
// $obj1->name = "Mr Apurba Kumar";//but we can change value through derived class
// $obj1->display();
?>