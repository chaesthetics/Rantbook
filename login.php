<?php 
include "config.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$error = "Incorrect username or password";
$sql = "SELECT * FROM users WHERE dusername='$username'";
$result = mysqli_query($conn, $sql) or die("query unsucessfull");
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
      $hash = $row['dpassword'];
      $verify = password_verify($password, $hash);
      if($verify){
        $_SESSION['currentuser'] = $row['dusername'];
        $_SESSION['currentid'] = $row['did'];
        $_SESSION['currentpass'] = $password;
        header("location:home.php");
          
      }
     else{
        $_SESSION['errol'] = "Incorrect password";
        header("location:index.php");
        

     }
    }
} 
else{
    
    $_SESSION['errol'] = "Username is unidentified";
    header("location:index.php");
}

   
?>

