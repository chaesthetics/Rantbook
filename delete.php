<?php 
include "config.php";
session_start();
$id = $_SESSION['currentid'];
$date = $_POST['date'];

$sql  = "DELETE FROM ranttable WHERE rantid ='$id' && rdate = '$date'";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");
header("location:profile.php");



?>