<?php 
include "config.php";
session_start();
$currentid = $_SESSION['currentid'];

$image_name = $_FILES["profilep"]["name"];
$image_temp = $_FILES["profilep"]["tmp_name"];
$exp = explode(".", $image_name);
$end = end($exp);
$name = $currentid.".".$end;
$path = "styles/images/uploads/profile/".$name;  
$allowed_ext = array("jpg", "jpeg", "gif", "png");

$image_name1 = $_FILES["coverp"]["name"];
$image_temp1 = $_FILES["coverp"]["tmp_name"];
$exp1 = explode(".", $image_name1);
$end1 = end($exp1);
$name1 = $currentid.".".$end1;
$path1 = "styles/images/uploads/cover/".$name1;  




$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];
$ph = password_hash($password, PASSWORD_DEFAULT);

$sql2="UPDATE users SET dfirstname='$firstname', dlastname='$lastname', dusername='$username',dpassword='$ph', daddress='$address',  dgender='$gender', dnumber='$number', demail='$email' WHERE did= $currentid";
$result2 = mysqli_query($conn, $sql2) or die("query unsucessful");

if(in_array($end, $allowed_ext)){
    if(move_uploaded_file($image_temp, $path)){
        $sql101 = "UPDATE users SET profilep='$path' WHERE did = $currentid";
        $result101 = mysqli_query($conn, $sql101) or die("query unsucessful");
        
     }
}

if(in_array($end1, $allowed_ext)){
    if(move_uploaded_file($image_temp1, $path1)){
        $sql102 = "UPDATE users SET coverp='$path1' WHERE did = $currentid";
        $result102 = mysqli_query($conn, $sql102) or die("query unsucessful");
     }
}
       

header("location:profile.php");

mysqli_close($conn);?>