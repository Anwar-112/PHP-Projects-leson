<?php 

ini_set('display_errors',0);

//$fh = fopen("file.txt" , "r");


try{
    $fh = fopen("file.txt","r");
    if(! $fh){

        throw new Expection("Could not open file!");
    }
    catch(Expection $e){
        
    }
}



?>