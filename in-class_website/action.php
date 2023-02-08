<?php include"header.php"?>

<?php 
//using isset() function to look for different values for submit
// Variable for the inputs in variable.php, value = Submit
if (isset($_POST['Submit'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];

echo "<h3> Your name is $fname $lname</h3>";
}
// Variable for the inputs in controlflow.php
 elseif (isset($_POST['Submit1'])) {
$firstname = $_POST['firstname'];
$age = $_POST['age'];

echo $age >= 18 ? "$firstname, You are eligble for voting" : "$firstname, You are not eligble for voting";
 }
?>

<?php include"footer.php"?>