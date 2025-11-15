<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Check</title>
    <style>
        table, th, td {
            border: 1px solid #000;
            border-collapse: collapse;
        }
        table {
            width: 300px; /* Adjusted width for better display */
            height: auto; 
            margin-top: 20px;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    // Define variables and set to empty values
    $name = $email = $langs_output = "";
    $nameErr = $emailErr = $languagesErr = "";
    $valid = true;

    if (isset($_POST['Submit'])) {
        // --- 1. Sanitize and Validate Name ---
        if (empty($_POST["name"])) {
            $nameErr = "You must fillup the name feild";
            $valid = false;
        } else {
            // Trim whitespace and remove potentially harmful characters
            $name = test_input($_POST["name"]);
            // Check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
                $valid = false;
            }
        }

        // --- 2. Sanitize and Validate E-mail ---
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
            $valid = false;
        } else {
            // Trim whitespace
            $email = test_input($_POST["email"]);
            // Check if e-mail address is well-formed using PHP's built-in filter
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                $valid = false;
            }
        }

        // --- 3. Validate Languages (multiple select) ---
        if (empty($_POST["languages"])) {
            $languagesErr = "Please select at least one language";
            $valid = false;
        } else {
            $languages = $_POST["languages"];
            // Prepare output for display (Sanitization is less critical for select box values you control)
            $langs_output = implode(", ", $languages);
        }

        // If all fields are valid, you would typically process the data (e.g., save to DB, send email)
        if ($valid) {
            // Data is safe to use/store
            // For this example, we just display the table below
            $message = "<div style='color: green; font-weight: bold;'>Form submitted successfully!</div>";
        }
    }

    // Function to sanitize input data (remove tags, trim whitespace, remove slashes)
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h1>Form Validation Check</h1>

    <?php echo isset($message) ? $message : ''; ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Name: <span class="error">* <?php echo $nameErr;?></span><br>
        <input type="text" name="name" placeholder="Enter your name" 
               value="<?php echo htmlspecialchars($name); ?>"> <br><br>
        
        E-mail: <span class="error">* <?php echo $emailErr;?></span><br>
        <input type="text" name="email" placeholder="Enter your email"
               value="<?php echo htmlspecialchars($email); ?>"> <br><br>
        
        Favorite programming language: <span class="error">* <?php echo $languagesErr;?></span><br>
        <select name="languages[]" multiple="multiple">
            <?php
            $options = ["Python", "Java", "C#", "C++", "C"];
            foreach ($options as $opt) {
                $selected = (isset($languages) && in_array($opt, $languages)) ? 'selected' : '';
                echo "<option value=\"$opt\" $selected>$opt</option>";
            }
            ?>
        </select> <br><br>
        <button type="submit" name="Submit">Submit</button>
    </form>

    <?php 
    // Only display the table if the form has been submitted and all validation passed
    if (isset($_POST['Submit']) && $valid): ?>
        <h2>Submitted Data:</h2>
        <table>
            <tr>
                <td>Name:</td>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <td>Languages:</td>
                <td><?php echo $langs_output ?></td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>