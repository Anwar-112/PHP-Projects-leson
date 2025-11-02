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
        $mynum = $_REQUEST['mynum'];
        $fact=1;
        for($i=1; $i<=mynum; $i++){
            $fact= $fact*$i;
        }
        echo $output;
    }
    ?>
    <h3>Factorial Number Check:</h3>
    <form action="">
    <input type="number" name="mynum" placeholder="Enter your number"> <br>
    <input type="submit" name=submit value=CHECK>
    </form>
</body>
</html>