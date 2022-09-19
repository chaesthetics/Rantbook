<?php 
include "config.php";
$id = $_POST['id'];
$rant = $_POST['rant'];
$date = $_POST['date'];

$sql = "INSERT INTO ranttable(rantid, rant, rdate) VALUES('$id','$rant','$date')";
$result = mysqli_query($conn, $sql) or die("query unsucessful");


header("location:home.php")


?>