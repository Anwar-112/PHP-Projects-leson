<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Max & Min Value Find:</h3>
    <form action="" method="post">

    <input type="text" name="numbers" placeholder="Enter numbers(1,2,...)">
    <button type="submit">Check</button>
    </form>
    <?php 
    
    if(isset($_POST["numbers"])){
        $inp = $_POST["numbers"];
        $num = explode(",",$inp);
        $num1 = array_map("intval",$num);
        $lar = max($num1);
        $low = min($num1);
        echo "Largest Value is: ",$lar ,"<br>";
        echo "Lowest Value is: ", $low;

    }
    
    
    ?>
</body>
</html>