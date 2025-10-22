<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //   $_GET $_POST $_REQUEST

   if(isset($_GET['submit'])){
         $fullname = $_GET['fullname'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    echo "fullname: " . $fullname . "<br>";
    echo "email:" . $email . "<br>";
    echo "phone" . $phone . "<br>";
    }

    ?>
    <h3>Registration Form</h3>
    <form action="" method="get">
        <input type="text" name="fullname" placeholder="Enter your name"> <br>
        <input type="text" name="email" placeholder="Enter your email"> <br>
        <input type="text" name="phone" placeholder="Enter your Phone"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>
