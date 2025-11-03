<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File Upload Using PHP Procedural Coding</h3>

    <?php 
    if(isset($_POST['upload'])){
        // echo "<pre>";
        // print_r($_FILES);

        $filename = $_FILES['myfile']['name'];
        $destination = "files/" . $filename;

        $temFile = $_FILES['myfile']['tmp_name'];
        $filesize = $_FILES['myfile']['size'];
        $maxSize = 1048576; //1MB


        echo $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        $allowedType = ["jpg","jpeg","png"];
        $errors = array();

        if($filesize>$maxSize){
            $errors[] = "<h1>File is too large</h1>";

        }

        if(!in_array($ext,$allowedType)){
            $errors[] = "<h1>jpg, png and jpeg is allowed</h1>";
        }
        if(count($errors)>0){

            foreach($errors as $error){
                echo $error . "<br>";
            }
        }
         else{
            move_uploaded_file($temFile, $destination);
            echo " <h1>Upload is Successfull! </h1>";
        }


        // echo $_FILES['myfile']['name'];
        // echo "<br>";
        // echo $_FILES['myfile']['size'];
        // echo "<br>";

        $temFile = $_FILES['myfile']['tmp_name'];
        move_uploaded_file($temFile, $destination);

    }
    
    
    
    ?>
    <form action=""  method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" Value="UPLOAD" name="upload">

    </form>
</body>
</html>