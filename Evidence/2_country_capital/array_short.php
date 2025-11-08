<?php
    
    $country_list = array(
        "Bangladesh" => "Dhaka",
        "Turkiya" => "Ankara",
        "Pakistan" => "Islamabad",
        "India" => "Delhi",
        "Saudi" => "Jeddah"
    );


    // sort($country_list); // apply sorting on value
    ksort($country_list); // apply sorting on key

    // rsort($country_list); // descending short on value
    // krsort($country_list); //descending short on key

    // arsort($country_list); // decenging short by value

    // echo "<pre>";
    // print_r($country_list);

    foreach ($country_list as $key => $value) {
        echo "The capital of " . $key ." is ". $value ."<br>";
    }



?>