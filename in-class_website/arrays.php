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
        echo $courses4[$i] . "<br>";
    }
?>

<br>
<hr>
<h5>5. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h5>
<?php

?>

<br>
<hr>
<h5>6. </h5>

<br>
<hr>
<h5>Extra, calculator</h5>
<form action="" method="get">
  <div class="row">
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