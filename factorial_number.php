<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php
if(isset($_REQUEST['submit'])){
    $num = $_REQUEST['num'];
    $fact = 1;

    

    for($i = 1; $i <= $num; $i++){
        $fact = $fact * $i;
    }

    echo "Factorial of $num is: <strong>$fact</strong>";
}
?>
    
    
    
    
    

    <h3>Factorial Number Check:</h3>
    <form action="">
    <input type="number" name="num" placeholder="Enter your number"> <br>
    <input type="submit" name=submit value=CHECK>
    </form>
</body>
</html>