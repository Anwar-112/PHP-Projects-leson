<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Check</title>
</head>
<body>
   <style>
     table, th, td{
            border: 1px solid #000;
            border-collapse: collapse;
        }
        table{
            width: 60px;
            height: 30px;
            
            
        }

   </style>
     


    <h1>Form Validation Check</h1>

    <form action="" method="post">
        Name: <br>
        <input type="text" name="name" placeholder="Enter your name"> <br><br>
        E-mail: <br>
        <input type="text" name="email" placeholder="Enter your email"> <br><br>
        Favorite programming language: <br>
        <select name="languages[]" multiple="multiple">
            <option value="Python">Python</option>
            <option value="Java">Java</option>
            <option value="C#">C#</option>
            <option value="C++">C++</option>
            <option value="C">C</option>
        </select> <br><br>
        <button type="submit" name="Submit">Submit</button>
    </form>

     <?php 
    if(isset($_POST['Submit'])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $languages =  $_POST["languages"];

        $langs_output = "";

        foreach($languages as $lang){ 
            $langs_output .= $lang . ", ";
        }

        
    }
    ?>
        <table>
            <tr>
                <td>name:</td>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <td>email:</td>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <td>languages:</td>
                <td><?php echo $langs_output ?></td>
            </tr>
        </table>


</body>
</html>
