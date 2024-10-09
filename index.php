<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1</title>
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
</body>
</html>