<?php 
include "config.php";
session_start();
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$address = $_POST['address'];
$birthday = $_POST['birthday'];
$gender = $_POST['txtGender'];
$number = $_POST['number'];
$email = $_POST['email'];

$ph = password_hash($password, PASSWORD_DEFAULT);


$defaultpp = "styles/images/uploads/profile/default3.jpg";
$defaultcp =  "styles/images/uploads/cover/default1.jpg";
$sql = "SELECT * FROM users WHERE dusername = '$username'";
$result = mysqli_query($conn, $sql) or die("query unsucessful");
if(mysqli_num_rows($result)>0){

    $error =  "username is already taken";
    $_SESSION['error'] = $error;
    header("location:index.php");
    
}
else{
    if($password == $cpassword){
    
    $sql1="INSERT INTO users(dfirstname,dlastname,dusername,dpassword,daddress,dgender,dnumber,demail,profilep,coverp) values('$firstname','$lastname','$username','$ph','$address','$gender','$number','$email','$defaultpp','$defaultcp')"; 
    $result1 = mysqli_query($conn, $sql1);
    echo "registered successfully";
    header("location:index.php");
    }
    else{
        
        $error =  "Password do not match";
        $_SESSION['error'] = $error;
        header("location:index.php");
    }
}

?>