<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['name'])){
         echo $_GET['name'];
          echo "<br>";
        echo $_GET['age'];
        echo "<br>";
         echo $_GET['id'];
         exit;

        
    }

    
    ?>
    <a href="get_superglobal.php?name=Anwar Hossain&age=25&id=1293878">Click here</a>
</body>
</html>