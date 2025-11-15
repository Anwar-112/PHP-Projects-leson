<?php 

  abstract class abstractclass{
    public $name;
    public $address;
    function __construct($name, $address)
    {
      echo $this->name = $name;
      echo $this->address = $address;
    }
    abstract function profile();
    }

    class childclass extends abstractclass{
        function profile(){
            $details = "";
            $details = "name:" . $this->name . "<br>";
            $details = "address:" . $this->address . "<br>";
            return $details;
        }

    }
    new childclass("Anwar", "Malibag");

?>