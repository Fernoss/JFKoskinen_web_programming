<?php
$title = "Simple CRUD app";
include"../in-class_website/header.php" ?>

<form action="" method="post">
    <input type="text" name="fname" placeholder="First Name" required><br>
    <input type="text" name="lname" placeholder="Last Name" required><br>
    <input type="text" name="city" placeholder="City" required><br>
    <select name="groupid">
        <option value="BBCAP22"> BBCAP22</option>
        <option value="BBCAP21"> BBCAP21</option>
        <option value="BBCAP20"> BBCAP20</option>
    </select>
    <br><input type="submit" name="submit" value="Submit">
</form>

<?php
    if(isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $city = $_POST['city'];
        $groupid = $_POST['groupid'];
        include 'db.php';
        $sql = "insert into studentinfo (fname, lname, city, groupid)
        values('$fname','$lname','$city', '$groupid')";

        if($conn -> query($sql) === true){
            echo "Your information is added successfully!";
        }
        else{
            echo "Error: " . $conn -> error;
        }
    }

?>

<?php include "../in-class_website/footer.php" ?>