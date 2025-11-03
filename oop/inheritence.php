<?php 

class fruit1{

    public $name;
    public $color;

    function __construct($name, $color){

    $this->name = $name;
    $this->color = $color;
    }

    function info(){
        echo "Name" . $this->name . "color" . $this->color;
    }
}
 class Grape extends fruit1{
    function message(){
        echo " I am Function inside Grape class";
    }
 }
 $obj1 = new fruit1(" Apple", " Green" ."<br>");
 $obj1->info();

 $obj2 = new  Grape(" Orange", " Yellow" . "<br>");
 $obj2->info();
 $obj2->message();

?>