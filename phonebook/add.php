<?php
include 'db.php';

$message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    if (!empty($name) && !empty($phone)) {
        $sql = "INSERT INTO contacts (name, phone) VALUES ('$name', '$phone')";

        if ($conn->query($sql) === TRUE) {
            $message = "New contact added successfully!";
        } else {
            $message = "Failed to add new contact.";
        }
    } else {
        $message = "Please fill up the blank fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phonebook</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 80%;
            max-width: 400px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        h4 {
            color: #7979ff;
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #7979ff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #6464db;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            color: #7979ff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #6464db;
        }

        .message {
            margin-top: 15px;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>My Contacts</h1>
        <h4>Add new contact</h4>
        
        <form method="post" action="add.php">
            <input type="text" name="name" placeholder="Your name"/>
            <input type="text" name="phone" placeholder="Your phone number"/>
            <input type="submit" value="Add Contact"/>
        </form>
        
        <?php if ($message): ?>
            <p class="message"><?php echo $message; ?></p>
        <?php endif; ?>
        
        <a href="index.php">See All Contacts</a>
    </div>
</body>
</html>
