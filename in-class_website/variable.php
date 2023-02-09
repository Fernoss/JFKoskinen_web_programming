<?php
$title = "Exercise 3";
include"header.php" ?>

<h3 style="padding-bottom: 1em;">Exercise 3. In-class Task Variable & Operators (variable.php)</h3>

<h5>1. Create a simple html form to get Firstname and Lastname from the user and use echo statement to print it out.</h5>

<form action="action.php" method="post">
  <div class="row">
    <div class="col" style="">
      <input class="form-control" type="text" placeholder="First Name" name="fname" required><br>
    </div>
    <div class="col">
      <input class="form-control" type="text" placeholder="Last Name" name="lname" required><br>
    </div>
  </div>
  
  <!--<label for="date">Date:</label><br>
  <input type="date" name="date" value="DD.MM.YYYY"><br> -->
  <div class="row">
    <input class="form-control" type="submit" value="Submit" name="">
  </div>
  
</form>
<br>
<hr>
<h5>3. Prepare a simple html table.</h5>

<h3>Table</h3>
<table class="table table-dark">
<?php
// setting up three variables
$g1 = 5;
$g2 = 4;
$g3 = 5;
//
?>
  <tr>
    <th scope="col">S.N</th>
    <th scope="col">Name</th>
    <th scope="col">Grade</th>
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

<br>
<hr>
<h5>4. Write a PHP script with two string variables.</h5>
<?php
$text1 = "Popular Linux distributions[18][19][20] include Debian, Fedora Linux, and Ubuntu, the latter of which itself consists of many different distributions and modifications, including Lubuntu and Xubuntu. Commercial distributions include Red Hat Enterprise Linux and SUSE Linux Enterprise.";
$text2 = "Desktop Linux distributions include a windowing system such as X11 or Wayland, and a desktop environment such as GNOME or KDE Plasma. Distributions intended for servers may omit graphics altogether, or include a solution stack such as LAMP. Because Linux is freely redistributable, anyone may create a distribution for any purpose.";
$text3 = $text1 . $text2;
echo strlen($text3);
?>
<br>
<hr>
<h5>5. Write a script to add up the numbers: 298, 234, 46.</h5>

<?php 
$num1 = 298;
$num2 = 234;
$num3 = 46;
$total = $num1 + $num2 + $num3;

echo "\nNumbers: 298, 234 and 46, total = $total";

?>
<br>
<hr>
<h5>6. Write a PHP script to detect the browser being used to view your pages.</h5>

<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

// $browser = get_browser(null, true);
// print_r($browser);
?>

<br>
<hr>
<h5>7. Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file.</h5>

<?php include "footer.php" ?>