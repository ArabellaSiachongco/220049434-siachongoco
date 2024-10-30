<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search</title>
    <!-- <style> 
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }
        .container {
            text-align: center;
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #7979ff;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }
        input[type="submit"] {
            background-color: #7979ff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #5d5dff;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
            font-size: 18px;
        }
    </style> -->
</head>
<body>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $servername = "localhost:3306";
    $username = "root";  
    $password = "4869";  
    $dbname = "book_db"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection status
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if search query exists and remove the list in an empty search bar
    if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
        $searchQuery = $conn->real_escape_string(trim($_GET['search']));

        // SQL to search for books by title connected to the phpMyAdmin server
        $sql = "SELECT * FROM books WHERE title LIKE '%$searchQuery%'";
        $result = $conn->query($sql);

        // Results
        if ($result->num_rows > 0) {
            echo "<h2>Search Results:</h2><ul>";
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<li><strong>" . $row["title"] . "</strong> by " . $row["author"] . " (" . $row["year_published"] . ")</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No results found for <b>'$searchQuery'</b>.</p>";
        }
    } else {
        echo "<h1>Welcome to Book Wizard</h1>";
        echo "<p>What Book Do You Like?</p>";
    }

    $conn->close();
    ?>

    <form method="get" action="">
        <input type="text" name="search" placeholder="Enter book title">
        <input type="submit" value="Search">
    </form>
</body>