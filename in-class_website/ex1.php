<?php
$title = "Exercise 1";
include"header.php" ?>
    <h1>My very simple php script</h1>
<?php
// Task 3.1
echo "JF Koskinen <br>";
echo "BBCAP22";
?>
<!-- Task 3.2 -->
<h1>Write PHP code to display the following message</h1>
<!-- Task 3.2.1 -->
<?php
echo "Hello world! My name is \"David\"";
?>
<!-- Task 3.3 -->
<h1>Current Date</h1>
<?php
echo date("d.m.Y");
?>
<!-- Task 3.4 -->
<h1>
<?php
$title = "PHP is interesting";
echo $title;
?>
</h1>
<!-- Task 3.5 -->
<!-- First create table -->
<h3>Table</h3>
<table style="">
<?php
// setting up three variables
$g1 = 5;
$g2 = 4;
$g3 = 5;
//
?>
<tr>
    <th>S.N</th>
    <th>Name</th>
    <th>Grade</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Pekka</td>
    <td><?php echo $g1?></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Johanna</td>
    <td><?php echo $g2?></td>
  </tr>
  <tr>
    <td>3</td>
    <td>John</td>
    <td><?php echo $g3?></td>
  </tr>
</table> <!-- End of table -->
<!-- Task 4, image -->
<h3>Image</h3>
<img src="../images/DevEnv.png" alt="picture of development enviroment" style="width: 75%; height: auto;">
<?php include "footer.php" ?>
