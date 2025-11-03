<?php 


class fruit {
    
    public $name;
    public $color;

    function __construct($name){
        echo "Hello " . $name;
    }

    function __destruct(){
        echo " ! Bye Bye......";
    }

}

new fruit("Anwar");

?>