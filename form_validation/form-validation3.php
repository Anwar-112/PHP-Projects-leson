<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    

    <form action="" method="POST">
        Your Name: <br>
        <input type="text" name="name"> <br>
        Email Address: <br>
        <input type="text" name="email"> <br> <br>
        Favorite Programming Language:  <br>
        <select name="language[]" multiple="multiple"> <!-- [] for array -->  <!-- "multiple" for multiple selection beacause dropdown usually not work with multiple selection --> 
            <option value="html">HTML</option>
            <option value="c#">C#</option>
            <option value="java">JAVA</option>
            <option value="php">PHP</option>
            <option value="python">Python</option>
        </select> <br> <br>
        Course: <br>
        <input type="checkbox" name="course[]" value="Graphics"> Graphics <!-- [] for array (to get multiple value in php) -->
        <input type="checkbox" name="course[]" value="Programming"> Programming
        <input type="checkbox" name="course[]" value="Data Entry"> Data Entry
        <input type="checkbox" name="course[]" value="AI/Machine Learning"> AI/Machine Learning <br><br>
        <input type="submit" name="submit" value="Submit"> <br>
        
    </form>


    <?php

        if(isset($_POST["submit"])){ // end braket is in next php tag

            $errors = [];
            

            if(isset($_POST["name"]) && $_POST["name"] !== "" ){
                $name = $_POST["name"];
            }else{
                $errors[] = "You Must Enter Name";
                // $name = "Error name";
            }

            if(!isset($_POST["email"]) || $_POST["email"] == "" ){ // just tried oposide way
                $errors[] = "You Must Enter Email";
            }else{
                $email = $_POST["email"];
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $errors[] = "Email is not valid";
                }   
            }


            // for error handeling (if empty or not)
            if(isset($_POST["language"])){
                $languages = $_POST["language"];

                $languages_output = "";
                $language_last = array_key_last($languages); // return index num of last one

                        //    array   as   value
                // foreach($languages as $language){

                         // array as index => value
                foreach($languages as $index => $language){
                    if($index == $language_last){
                        $languages_output .= $language;
                    }else{
                        $languages_output .= $language .", ";
                    }
                }
            }else{
                $errors[] = "You must select One Language";
            }



            if(isset($_POST['course'])){
                $courses = $_POST["course"];

                $courses_output = "";
                $course_last = array_key_last($courses);

                foreach($courses as $index => $course){

                    if($index == $course_last){
                        $courses_output .= $course;
                    }else{
                        $courses_output .= $course .", ";
                    }
                }
            }else{
                $errors[] = "You must select One Course";
            }

            

            if(count($errors) > 0){
                echo "<ul>";
                foreach($errors as $err){
                    echo "<li>" . $err ."</li>";
                }
                echo "</ul>";
            }
            else{
    ?>

    <hr>
    <table>
        <tr>
            <td>Name: </td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Languages: </td>
            <td><?php echo $languages_output; ?></td>
        </tr>
        <tr>
            <td>Courses: </td>
            <td><?php echo $courses_output; ?></td>
        </tr>
    </table>


    <?php
        }
        } // end of if isset
    
    ?>



</body>
</html>