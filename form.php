<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //   $_Get $_Post $_Request

   // echo "<pre>";                                                       
    //print_r($_POST);
    //echo "</pre>";
    if(isset($_GET['submit'])){
         $fullname = $_GET['fullname'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    }
       


    
    ?>
    <h3>Registration Form</h3>
    <form action="" method="post">
        <input type="text" name="fullname" placeholder="Enter your name"> <br>
        <input type="text" name="email" placeholder=" Enter your email"> <br>
        <input type="text" name = "phone" placeholder="Enter your Phone"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>