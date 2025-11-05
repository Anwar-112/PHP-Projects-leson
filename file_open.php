<?php 

$fh = fopen("student1.txt", "w");

// while(!feof($fh)){

//     echo fgets($fh) . "<br>";

// }
fwrite($fh, "Hello World !");

fclose($fh);

 

?>