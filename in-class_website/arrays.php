<?php
$title = "Exercise 5";
include"header.php" ?>

<br>
<hr>
<h5>1. Write a php script to display courses as list.</h5>
<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
$index = count($courses);

    for ($i = 0; $i < $index; $i++) {
        echo "<li>$i) $courses[$i] <br>";
    }
?>

<br>
<hr>
<h5>2. The unset() function is used to remove element from the array.</h5>
<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
var_dump($courses1);
echo "<br> Deleting one element from the array.<br>";
// deleting one element in arrray
unset($courses1['3']);
var_dump($courses1);
?>
<br>
<hr>
<h5>3. Sort the following array.</h5>
<?php

$courses3=array("cs1" => "PHP", "cs2" => "HTML", "cs3" => "JavaScript", "cs4" => "CMS", "cs5" => "Project");

// ascending by value
asort($courses3);

    foreach ($courses3 as $key => $value) {
        echo "A) $key = $value <br>";
    }
echo "<br>";
// ascending by key
ksort($courses3);

    foreach ($courses3 as $key => $value) {
        echo "B) $key = $value <br>";
    }
echo "<br>";
// descending by value
arsort($courses3);

    foreach ($courses3 as $key => $value) {
        echo "C) $key = $value <br>";
    }
echo "<br>";    
// descending by key
Krsort($courses3);

    foreach ($courses3 as $key => $value) {
        echo "D) $key = $value <br>";
    }
?>  




<br>
<hr>
<h5>4. Change the following array's all values to upper case.</h5>
<?php
    $courses4=array("php", "html", "javascript", "cms", "project");
    var_dump($courses4);

    for($i = 0; $i < count($courses4); $i++) {
        $courses4[$i] = strtoupper($courses4[$i]);
        echo "<li>" . $courses4[$i] . "<br>";
    }
?>

<br>
<hr>
<h5>5. List all your favorite colors and their hexadecimal equivalents.</h5>
<?php
    $fav_color = array('Black' => '#000000 ', 'White' => '#FFFFFF', 'Khaki' => '#C3B091');
    foreach ($fav_color as $key => $hex) {
    echo "<li>My favourite colors are $key: $hex <br> ";
    }
?>

<br>
<hr>
<h5>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h5>  
<?php
    echo "<h4> Calculation average temperature: </h4>";
    $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
/*
A built-in function that splits a string into different strings.
While splitting the string we use separator for e.g. " " or "," that splits the string wherever the separator parameter occurs. 
This function returns an array of strings as a result of splitting the original string.
There is no need to parse/change value type.
So in this code we use separator "," from $month_temp.
*/
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
/*
Counts all elements in an array when used with an array. 
Here count() counts all the elements inside $temp_array that we defined previously
*/
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
/*
Sorts array in place by values in ascending order. To sort otherways we use
for example rsort(), Krsort() etc.
*/
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
/*
We use for loop to loop through the array and printing our five highest array values. 
So here we assign for $i $temp_array_length - 5 in order to get the total values of an array except the last 5. 
This allows as to loop through the remaining 5 when $i < $temp_array_length. 
This could also be done that after five lowest temperature loop we use rsort($temp_array) and loop through 
the list where $i = 0 etc. 
*/
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>

<br>
<hr>
<h5>Extra, calculator</h5>
<form action="" method="get">
  <div class="row" style="color: black;">
        <div class="col">
            <input class="form-control" type="number" step="any" placeholder="Enter your first number" name="num1" required><br>
        </div>
        <div class="col">
            <input class="form-control" type="number" step="any" placeholder="Enter your second number" name="num2" required><br>
        </div>
    </div>
    <select name="operator" style="margin-bottom: 16px;">
        <option name="" value="add">Add</option>
        <option name="" value="sub">Subtract</option>
        <option name="" value="mul">Multiply</option>
        <option name="" value="div">Divide</option>
    </select>
    <div class="row">
        <input class="form-control" type="submit" value="Calculate" name="cal" onclick="submitAlert()">
    </div>
</form>

<?php
    if(isset($_GET["cal"])) {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];

        switch($operator) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'sub':
                $result = $num1 - $num2;
                break;
            case 'mul':
                $result = $num1 * $num2;
                break;
            case 'div':
                $result = $num1 / $num2;
                break;
            default:
                echo "404";
                break;
        }
    }
    if(isset($result)){
    echo "<h4> Result: $result </h4>";
    }
?>

<script>
function submitAlert() {
  alert("Submit successfully sent!");
}
</script>


<?php include "footer.php" ?>