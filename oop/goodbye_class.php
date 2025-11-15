<?php 

class goodByeClass{

    const MYmsg = "Hi, i am anwar ";
    const MYmsg1 = "i am learning PHP ";

    function Info(){
        echo self::MYmsg1;
    }
    
}
echo goodByeClass::MYmsg;
echo "<br>";

$obj1 = new goodByeClass;
$obj1->Info();


?>