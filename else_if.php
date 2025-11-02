<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
$x = 20;
$y = 10;
$z = 5;
$a =8;
$b=3;
if($x>$y){
    echo $x . " X is a Big Number";
}else if($y>$z){
    echo $y . " Y is Big Number";
    
}
else if($z>$a){
    echo $z . "Z is a Big Number";
}else if($z>$a){
    echo $a . "a is big Number";
}else if($a>$b){
    echo $b . "b is big Number";
}
?>
<h3>Biggest Value Find</h3>
<form action="">
    <input type="number" name="mynum" placeholder="Enter your 1st Num:"> <br>
    <input type="number" name="mynum" placeholder="Enter your 2nd Num:"> <br>
    <input type="number" name="mynum" placeholder="Enter your 3rd Num:"> <br>
    <input type="number" name="mynum" placeholder="Enter your 4th Num:"> <br>
    <input type="number" name="mynum" placeholder="Enter your 5th Num:"><br>
    <input type="submit" name="submit" Value="CHECK">
</form>



</body>
</html>
