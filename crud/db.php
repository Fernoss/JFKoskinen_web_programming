<?php
$servername = "4406ee2700b7";
$username = "capp1";
$password = "Kiss4os44sout44!?";
$dbname = "capp1";
// creating connection
$conn = new mysqli ($servername, $username, $password, $dbname);

//checking the connection
if ($conn -> connect_error) {
    die("connection failed: " . $conn->connect_error);
}

?>