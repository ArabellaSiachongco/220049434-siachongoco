<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Form via Pizza Orders</title>
    <link rel="stylesheet" href="add.php">
    <style>
        /* Basic CSS grid styling */
        .result-grid {
            display: grid;
            grid-template-columns: 1fr 2fr; /* Two columns */
            gap: 10px; 
            margin-top: 20px;
            padding: 20px;
            background-color: #f7f7f7;
            border: 1px solid #ccc;
            width: 50%;
        }
        
        .result-grid div {
            padding: 10px;
            background-color: #eaeaea;
            border-radius: 5px;
        }

        .result-grid div.label {
            font-weight: bold;
            background-color: #ddd;
        }
    </style>
</head>
<body class="gray lighten-4">
<?php include 'header.php'; ?>

    <ul id="nav-mobile" class="center hide-on-small-and-down ">
        <li><a href="add.php" class="btn brand z-depth-0">Add Your Choice</a></li>
    </ul>

    <div class="center" style="display: flex; justify-content: center;">
    <?php
    if (isset($_POST['submit'])) {
        echo "<div class='result-grid'>";
        echo "<div class='label'>Email:</div><div>" . htmlspecialchars($_POST['email']) . "</div>";
        echo "<div class='label'>Title:</div><div>" . htmlspecialchars($_POST['title']) . "</div>";
        echo "<div class='label'>Ingredient:</div><div>" . htmlspecialchars($_POST['ingredient']) . "</div>";
        echo "</div>";
    }
    ?>
    </div>


</section>





</body>
</html>