<?php 
include "config.php";
session_start();



if(!isset($_SESSION['currentuser'])){
    header("location:index.php");
}
else{

    
  // $sql1 = "SELECT profilep FROM users WHERE did= $currentid";
  // $result1 = mysqli_query($conn, $sql) or die("query unsucessfulls");
  // if(mysqli_num_rows($result1)>0){

  //   while($row1= mysqli_fetch_assoc($result1)){
  //     $_SESSION['currentuserpp'] = $row1['profilep'];
  //   }
  // }
  $currentid = $_SESSION['currentid'];


  $sql = "SELECT * FROM users WHERE did = $currentid";
  $result  = mysqli_query($conn, $sql) or die("query unsucessfull");
  while($row = mysqli_fetch_assoc($result)){
      $_SESSION['currentuserpp']  = $row['profilep'];
  }

  $sql5 = "SELECT * FROM users WHERE did = $currentid";
  $result5  = mysqli_query($conn, $sql5) or die("query unsucessfull");
  while($row5 = mysqli_fetch_assoc($result5)){
      $_SESSION['currentusercp']  = $row5['coverp'];
  } 


 
  

  
  
  ?>

    <head> 
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
  
</style>
<title>
    Rantbook
</title>
<link rel="shortcut icon" href="styles/images/logo.png"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    

}
body{
    margin:0;
    text-align: center;
    background: oldlace;
    padding:0; 
}
form{
    margin-left:140px;
    
}
.navbar-brand{
    margin-left: 150px;
}
.form-control, button{
    height: 30px;
}
ul{
    margin-left:150px;
}
.nav-item{
    width:70px;

}
.bfso{
  border: none;
  }

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f3f3f3;
  width: 180px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  right:1;
  top:35;
  
}

.dropdown-content a {
  color: black;
  padding:none;
  text-decoration: none;
  width:180px;
  
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #fff;}
.nav-item ul, li:hover{
  background-color:#ddd;
  max-width: 160px;
  color: #fff;

}

#header{
  width: 100%;
  height: 0vh;
  position: relative;
  background-color: #333;
  position: relative;
}
h1{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 5rem;
  color: #fff;
  font-family:'Lato', halvetica, sans-serif;
  letter-spacing: 3px;
  margin-right: -3px;
  font-weight: 100; 
  text-transform:uppercase;
}
.navbar{
  width: 100%; 
  height: 3rem;
  line-height: 3rem;

}
.fixed{
  position: fixed;
  width: 100%;
  top: 0; 
  z-index: 20;

}
.dropdown-contentsearc {

position: absolute;
min-width: 200px;
top:1px;
border: 0px solid #ddd;
z-index: 1;
border-radius:2px;
margin-top:40px;

}

.dropdown-contentsearc td {
color: black;
padding: 12px 14px;
text-decoration: none;
display: block;
text-align:left;
}

.dropdownsearc td:hover {background-color: #ddd;}
</style>

</head>
<header id="header">
</header>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php" style="font-size:23px; color:purple;"><b>🆁🅰🅽🆃🅱🅾🅾🅺</b></a>
  


  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <form class="form-inline my-2 my-lg-0"action="search.php" method="GET">
      <input class="form-control mr-sm-2" type="search" name="k" placeholder="Enter a Username" autocomplete="on">  
      <button class="btn btn-outline-danger"type="submit"><i class="fa fa-search"></i></button>
    </form><ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="home.php"><i class="fa fa-home" style="font-size:25px; color:maroon"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php"><i class="fa fa-user" style="font-size:23px; color:maroon" ></i></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="rant.php"><i class="fa fa-pencil" style="font-size:23px; color:maroon"></i></a>
      </li>
            <li class="nav-item">
            <div class="dropdown">
  <a class="nav-item"><i class="fa fa-chevron-circle-down" style="font-size:23px; color:maroon; margin-top:7px;" ></i></a>
  <div class="dropdown-content">
    <p style="color:grey;margin-left:3px;margin-top:-3px; float:left;line-height:.5cm;"><b>Welcome: 
    </b style="float-right;"><?php echo $_SESSION['currentuser'];?></p>
    <div style="clear:left;"></div>
    <a href="logout.php" style="color:#565656;position:relative;font-size:16px;float:right;"><i class="fa fa-sign-out" style="margin-bot:20px;font-size:20px; color:#565656;"></i><b> Sign out</b></a>
  </div>

      </li>
    </ul>           
  </div>
</nav>
<?php }?><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="styles/js/scripts.js" type="text/javascript"></script>
