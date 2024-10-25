    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<p>Siachongco Arabella <br> CIT17 - 3F</p>
<br><hr>

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
<br><hr>
<h1>Activity 2: Password Validator</h1>
<p>Write a PHP script that asks the user to input a password.</p>
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
<br><hr>
<h1>Activity 3: Multiplication Table</h1>
<p>Write a PHP script using a for loop to display the multiplication table of 7.</p>
    <?php
    $number = 7;
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i; 
        echo "$number x $i = $result<br>"; // Display the result
    }
    ?>
<br><hr>
<h1>Activity 4: Loop Control with break and continue</h1>
<p>Create a PHP script that uses a for loop to print numbers from 1 to 10.</p>
<p>Answer:
    <?php
    for ($i = 1; $i <= 10; $i++) {
        // Use continue to skip number 5
        if ($i == 5) {
            continue;
        }
        // Use break to stop the loop at 8
        if ($i == 9) {
            break; // Exit the loop when $i is 8
        }
        echo $i . " ";
    }
    ?>
</p>
<br><hr>
<h1>Activity 5: Sum of Numbers</h1>
<p>Write a PHP script that calculates the sum of all numbers from 1 to 100 using a while loop.</p>
    <?php
    $sum = 0;
    $number = 1; // Starting point
    while ($number <= 100) {
        $sum += $number; // Add the current number to the sum
        $number++; // Increment the number
    }
    echo "The sum of numbers from 1 to 100 is: $sum";
    ?>
<br><hr>
<h1>Activity 6: Array Iteration with foreach</h1>
<p>Create an array of at least 5 favorite movies.</p>
    <?php
    // array
    $favorite_movies = [
        "Detective Conan",
        "High Potential",
        "Brave",
        "Unforgettable",
        "Solo Levelling"
    ];
    foreach ($favorite_movies as $index => $movie) {
        echo ($index + 1) . ". " . $movie . "<br>";
    }
    ?>
<br><hr>
<h1>Activity 7: Key-Value Pairs with foreach</h1>
<p>Create an associative array containing a student's information (name, age, grade, city).</p>
    <?php
    // array of student information
    $student_info = [
        "Name" => "Arabella",
        "Age" => 20,
        "Grade" => "S++",
        "City" => "Baguio City"
    ];
    foreach ($student_info as $key => $value) {
        echo "$key: $value<br>";
    }
    ?>
<br><hr>
<h1>Activity 8: Factorial Calculator</h1>
<p>Write a PHP script that calculates the factorial of a given number using a for loop.</p>
    <?php
    $number = 5;
    $factorial = 1;
    for ($i = $number; $i > 0; $i--) {
        $factorial *= $i;
    }
    echo "Factorial of $number is: $factorial";
    ?>
<br><hr>
<h1>Activity 9: FizzBuzz Challenge</h1>
<p>1. Write a PHP script that prints numbers from 1 to 50 using a for loop. <br>
2. For multiples of 3, print "Fizz" instead of the number.<br>
3. For multiples of 5, print "Buzz". <br>
4. For multiples of both 3 and 5, print "FizzBuzz"</p>
    <?php
    // Loop from 1 to 50
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz "; //for multiples of both 3 and 5
        } elseif ($i % 3 == 0) {
            echo "Fizz "; // for multiples of 3
        } elseif ($i % 5 == 0) {
            echo "Buzz "; // for multiples of 5
        } else {
            echo $i . " "; // if not a multiple of 3 or 5
        }
    }
    ?>
<br><hr>
<h1>Activity 10: Prime Number Checker</h1>
<p>Use loops to check for prime numbers.</p>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number from the user input
        $number = intval($_POST["number"]);
        $is_prime = true;
        if ($number < 2) {
            $is_prime = false;
        } else {
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    $is_prime = false;
                    break;
                }
            }
        }
        if ($is_prime) {
            echo "$number is a prime number.";
        } else {
            echo "$number is not a prime number.";
        }
    }
    ?>
<br><hr>
<h1>Activity 11: Fibonacci Sequence</h1>
<p>Write a PHP script that generates the first 10 numbers of the Fibonacci sequence using a while loop.</p>
<p>Answer: 
    <?php
    $fib1 = 0;
    $fib2 = 1;
    $count = 0; //for the loop

    echo "$fib1 $fib2 ";
    while ($count < 8) {
        $next_fib = $fib1 + $fib2; 
        echo "$next_fib ";
        $fib1 = $fib2;
        $fib2 = $next_fib;
        $count++; 
    }
    ?>
</p>
<br><hr>
<h1>Activity 12: Reverse a String</h1>
<p>Write a PHP script that takes a string and reverses it using a for loop.</p>
    <form method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <input type="submit" value="Reverse">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST['inputString'];

        //empty string to hold the reversed string
        $reversedString = '';
        // Get the length
        $length = strlen($inputString);

        for ($i = $length - 1; $i >= 0; $i--) {
            $reversedString .= $inputString[$i];
        }
        echo "<br>";
        echo "Input: \"$inputString\"<br>";
        echo "Output: \"$reversedString\"";
        echo "</br>";
    }
    ?>
<br><hr>
<p>The End</p>
</body>
</html>