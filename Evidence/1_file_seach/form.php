<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Find Result</h3>
    <form action="" method="post">
        <input type="number" name="std_id" placeholder="Enter Your id"> <br>
        <input type="submit" name="search" value="Search"> 
    </form><br>

    <?php

        if(isset($_POST["search"])){
            $id = $_POST["std_id"];

            include "result_class.php";
            $std_obj = new student("result_sheet.txt");
            $result =  $std_obj -> result($id);
            echo $result;


            // $file = file("result_sheet.txt");
            
        }
    
    ?>
</body>
</html>