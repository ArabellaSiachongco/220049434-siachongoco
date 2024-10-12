<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding the pizza ingredients</title>
    <link rel="stylesheet" href="header.php">
</head>
<body>

<!-- header  -->
<?php include 'header.php'; ?>

<!-- This is our form -->
<section class="container grey-text">
    <h4 class="center">Craving for You</h4>
    <form action="index.php" method="POST" class="form white">
        <label for="email">Email:</label>
        <input type="text" name="email"/>

        <label for="title">Pizza Name:</label>
        <input type="text" name="title">
        
        <label for="ingredient">Ingredients (comma seperated):</label>
        <input type="text" name="ingredient"/>

        <div class="center">
            <input class="btn brand z-depth-0" type="submit" name="submit" value="submit"/>
        </div>
    </form>
</section>

<!-- footer  -->
<?php include "footer.php" ;?>
</body>
</html>

<!-- GET send the data in th URL while POST sends the data to the one requesting  -->
<!-- We will use the php here to GET the request/message in our form  -->

<?php 
// GET 

    //   // if the get submit has a value then it will show that there is a value/message 
    // if (isset($_GET ['submit'])) {
    //     echo $_GET ['email'];
    //     echo $_GET ['title'];
    //     echo $_GET ['ingredient'];
    // // passing the key to the array form, called GLOBAL
    // }

// we will use POST 
        if (isset($_POST ['submit'])) {
            echo $_POST ['email'];
            echo $_POST ['title'];
            echo $_POST ['ingredient'];
        }
    
?>