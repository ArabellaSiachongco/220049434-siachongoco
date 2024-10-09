<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2</title>
</head>
<body>
    
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