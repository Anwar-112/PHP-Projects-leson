<?php 

 $data = file("file.txt");
// echo "<pre>";
// print_r($data);


foreach($data as $line){
   // echo $line . "<br>";

   
    list($name, $email) = $info = explode(" ", $line);
     echo "Name: $name" . " Email $email" . "<br>";

}



?>