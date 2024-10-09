<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
<h1>Activity 1: Number Counter</h1>
<p>Write a PHP script that prints the numbers from 1 to 10 using a while loop.</p>
<p>Answer:
    <?php
    $counter = 1;
    while ($counter <= 10) {
        echo $counter . " ";
        $counter++;
    }
    ?>
</p>
<p>Modify the script to print only even numbers between 1 and 20.</p>
<p>Answer:
    <?php
    $counter = 2;
    while ($counter <= 20) {    
        echo $counter . " ";
        $counter += 2; 
    }
    ?>
</p>
<br>
<h1>Activity 2: Password Validator</h1>
<p>Write a PHP script that asks the user to input a password.</p>
<p>Answer:
    <?php
    // Correct password
    $correct_password = "password123";
    $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_input = $_POST['password'];

        if ($user_input === $correct_password) {
            $message = "Access Granted.";
        } else {
            $message = "Incorrect password.";
        }
    }
    ?>
<!-- getting the password using POST -->
    <form method="POST" action="">
        <label for="password">Please enter the password:</label><br>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
    <p><?php echo $message; ?></p>
</p>


</body>
</html>