<?php

class Fruit {
    
    private $name;
    private $color;

    // Setter for name
    public function set_name($name) {
        $this->name = $name;
    }

    // Setter for color
    public function set_color($color) {
        $this->color = $color;
    }

    // Getter for both name and color
    public function get_name_color() {
        echo "Name: " . $this->name . "<br>";
        echo "Color: " . $this->color . "<br>";
    }
}

// Create an object
$obj1 = new Fruit;
$obj1->set_name("Apple");
$obj1->set_color("Red");

// Output the details
$obj1->get_name_color();

// Optional: show full object structure for debugging
var_dump($obj1);

?>
