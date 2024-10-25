<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review ng php</title>
</head>
<body>
<h1>PHP VARIABLE REVIEW</h1>

    <!-- so . yung pag dugtong ng salita -->
<?php
    $_name="El";
    $_age="22";
    $_height= "1.52";
    $_student= "true";

    echo "I am " .$_name . ". <br>" .$_age . " years old, <br> " .$_height . " meters. <br> I am a student = ".$_student;
?>
<br><hr>

<!-- dapat hindi ito string  -->
<?php
    $_year="2024";
    $_birth_year="2002";
    $_ageToday= $_year - $_birth_year;
    
    echo "my age today is " . $_ageToday
?>
<br><hr>

<?php
 $_name="El";
 $_age= "22";

 echo "hello my name is " .$_name . " and I am " . $_age . " years old";
?>
<br><hr>
<!-- Array  -->
<?php
// wala na yung term na array 
// 0,1,2,3,4 yan yung bilang ng array
    $_name_of_friends = ['Arabella','Ella','Ara','El','Bella'];

    echo "my 2 best friends are " .$_name_of_friends[1] . " and " .$_name_of_friends[3];
?>
<!-- nice nice  -->
<br><hr>
<!-- ang associative ung may arrow =>  -->
<?php
    $_myself = ['name' => 'Arabella', 'Age' => '22', 'Favorite Color' => 'Violet'];

    echo "My name is " .$_myself['name'] . " and I am " .$_myself['Age'] . " my favorite color in today's video is " .$_myself['Favorite Color'];
?>
<br><hr><br>
<h1>PHP Conditional Statements</h1>
<?php
    // gagawa ng variable to store the data 
    $_age = 45;
    if ($_age == 30){
        echo "I am still alive";
    }elseif ($_age >= 25){
        echo 'better to be dead';
    };
?>
<br><hr>
<!-- // grade ko -->
<?php
    $final_grade= 2;

    if ($final_grade >= 90){
        echo 'are you a supper human?';
    } elseif($final_grade >= 75){
        echo 'you can do better';
    }else{
        echo 'try harder in your next life';
    }
?>
<br><hr>
<?php
    $_examday='tuesday';

    switch($_examday){
        case 'monday':
            echo 'Start of the hell week';
            break;
        case 'tuesday':
            echo 'another day, another hell';
            break;
        case 'wenesday':
            echo 'yes! 2 more days to go';
            break;
        case 'thursday':
            echo 'hays! i want to have a vacation';
            break;
        case 'friday':
            echo 'Finally! tommorrow is saturday';
            echo ' that means rest day!';
            break;
        case 'saturday':
            echo 'its sleeping time';
            break;
        case 'sunday':
            echo 'Tommorow is monday!! AGAIN!';
            break;
    }
?>
<br><hr>
<!-- //ternary operator  -->
<?php
    $_vam_age = 35;
    echo ($_vam_age <= 25) ? 'he is eligible for me. ^-^' : 'we are not meant to be. -_-';
    // kung 25 pababa, not eligible 
    // kung 25 pataas eligible 
    // : use colon to compare 
?>

<br><hr>

<?php
// kapag di niya nakita ung user papalitan niya ng guest kasi un ung naging default 
// ?? taga subtitue ng default

    $username = $_GET['user'] ?? 'Arabella';
    echo "Hello, " . $username;
    
?>
<br><hr><br>
<h1>PHP Loops</h1>
<?php
// kailangan pala ng counter ++ 
   $_number = 1;
   while($_number <= 10){
    echo $_number . '';
    $_number++;
   }
?>
<br><hr>
<?php
    $number = 2;
    while($number <= 20){
        echo $number . '';
        $number+=2;
    }
?>
<br><hr>
<?php
    $pass = 'Arabella';
    $message = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_input = $_POST['password'];

    if ($user_input === $pass){
        $message = ' Good job! ';
    }else{
    $message = 'tssk!';
    }
}
?>

<form method="POST" action="">
<label for="password">Please enter the password:</label><br>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="Submit">
</form>
<p><?php echo $message; ?></p>

<br><hr>

<?php
    $number = 7;

for($i = 1; $i <= 10; $i++) {
    $result = $number * $i;
    // gagawa ng bagong variable tapos ung number at i ipag times 
    echo "$number x $i = $result <br>";
    // br para mag hiwahiwalay sila 
}
?>
<br><hr>
<?php
// di na lalagyan ng variable 

    for($i = 1; $i<=10; $i++){
        if($i == 5){
            continue;
        } if ($i == 9 ){
            break;
        }
        echo $i . '';
    }
?>
<br><hr>




</body>
</html>
