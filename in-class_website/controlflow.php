<?php
$title = "Exercise 4";
include"header.php" ?>

<br>
<hr>
<h5>1. Use IF statement with strpos function to print the name of the browser.</h5>
<?php
$month = date('F');
echo $month == "Aug" ? "It's August, so it's still holiday" : "Not August, this is $month so I don't have any holidays";
?>

<br>
<hr>
<h5>2. Assign colour red to a variable name $color and check to print one the following responses.</h5>
<?php
$colour = "red";
echo $colour == "red" ? "The colour is red." : "The color is not red";
?>

<br>
<hr>
<h5>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score.</h5>
<?php
    $score = 65;

    if ($score > 80) {
    echo "Excellent";
    }
    elseif ($score > 70 or $score <= 80) {
        echo "Great";
    }
    elseif ($score > 60 or $score <= 70) {
        echo "Good";
    }
    elseif ($score > 50 or $score <= 60) {
        echo "Pass";
    }
    else {
    echo "Fail";
    }
?>

<br>
<hr>
<h5>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting.</h5>
<form action="action.php" method="post">
  <div class="row">
    <div class="col">
      <input class="form-control" type="text" placeholder="First Name" name="firstname" required><br>
    </div>
    <div class="col">
      <input class="form-control" type="number" placeholder="Age" name="age" required><br>
    </div>
  </div>
  <div class="row">
    <input class="form-control" type="submit" value="Submit" name="Submit1" >
  </div>
</form>


<br>
<hr>
<h5>5. Use IF statement with strops function to print the name of the browser.</h5>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
 echo $user_agent;
// strpos() = function of string position
// if (strpos($user_agent, 'Chrome') == true) {
//     echo "<br> You are using Google Chrome";
// }
// else {
//     echo "<br> You are using something else";
// }
// Using switch statement instead of if-elseif
switch (true) {
    case strpos($user_agent, 'Edg'):
        echo "<br>";
        echo "You are using Microsoft Edge";
        break;
    case strpos($user_agent, 'Chrome'):
        echo "<br>";
        echo "Your are using Google Chrome";
        break;
    case strpos($user_agent, 'Firefox'):
        echo "<br>";
        echo "You are using Mozilla Firefox";
        break;
    case strpos($user_agent, 'Safari'):
        echo "<br>";
        echo "You are using Safari";
        break;
    default:
        echo "<br>";
        echo "Browser can not be defined";
        break;
}
?>



<?php include "footer.php" ?>