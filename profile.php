<?php 
include "config.php";
include "header.php";
$currentuserprofilepic = $_SESSION['currentuserpp'];
$currentusercoverpic = $_SESSION['currentusercp'];
$currentid = $_SESSION['currentid'];
$sqlprof = "SELECT * FROM users WHERE did = '$currentid'";
$resultprof = mysqli_query($conn, $sqlprof) or die("query unsucessfull");
if(mysqli_num_rows($resultprof)>0){
    while($rowprof = mysqli_fetch_assoc($resultprof)){



?>
<head>
    <style>
        .main{
            background: #fff;
            height: 548px;
            margin: auto auto;
            margin-top:20px;
            width:600px;
            display: table;
        }
        .editprofile{
            height:40px;
            width: 120px;
            color: purple;
            border-radius:20px;
            border: 1px solid grey;
        }
        .buttonsss li{
            display:inline-block;
            margin-right: 120px;
        }
    </style>
</head>
<div class="main" style="position:relative;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">
<img class="cover" src="<?php echo $currentusercoverpic?>" style="position: relative;margin-top:10px;width:580px;height:250px;">
<img class="profile" src="<?php echo $currentuserprofilepic;?>" style="border: 3px solid white;top:210px;left:20px; border-radius:50%;position:absolute;width:120px; height:120px;">
<a href="editprofile.php"type="button" class="editprofile"style="margin-top:22px;margin-left:385px;color: #fff; background-color:darkslategray;"><p style="margin-top:6px;"><b>Edit Profile</b></p></a><br><br><br>
<p style="float:left;margin-left:20px;line-height:0.01cm"><br><?php echo $rowprof['dfirstname'];?> <?php echo $rowprof['dlastname'];?></p>
<div style="clear:left;"></div>
<p style="float:left;margin-left:20px; line-height:0.2cm;"><b><?php echo $rowprof['dusername'];?></b></p>
<div style="clear:left;"></div>
<p style="float:left;line-height:.01cm;font-size:14px;margin-left:25px;margin-top:20px;"><i class="fa fa-map-marker" aria-hidden="true"style="font-size:18px"></i> <?php echo $rowprof['daddress'];?></p>
<div style="clear:left;"></div>
<p style="float:left;margin-left:20px;line-height:0.01cm;font-size:14px;"><i class="fa fa-venus-mars" style="font-size:18px;"></i> <?php echo $rowprof['dgender'];?></p>
<div style="clear:left;"></div>
<p style="float:left;margin-left:23px;line-height:0.01cm;font-size:14px;"><i class="fa fa-phone" aria-hidden="true" style="font-size=18px;"></i> <?php echo $rowprof['dnumber'];?></p>
<div style="clear:left"></div>
<p style="float:left;margin-left:22px;line-height:0.01cm;font-size:14px;"><i class="fa fa-envelope" aria-hidden="true" style="font-size=18px;"></i> <?php echo $rowprof['demail'];?></p>
<br>
<hr>
<?php 
    $firstname="";
    $username="";
    $picsource="";

    $sqlinfo = "SELECT * FROM users WHERE did= $currentid";
    $resultinfo = mysqli_query($conn, $sqlinfo) or die("query unsucessfull");
    if(mysqli_num_rows($resultinfo)>0){
        while($rowinfo = mysqli_fetch_assoc($resultinfo)){
            $firstname = $rowinfo['dfirstname'];
            $username = $rowinfo['dusername'];
            $picsource = $rowinfo['profilep'];
            $namelength = strlen($rowinfo['dfirstname']);
            $userlength = strlen($username);
            $allnamelength = $namelength +$userlength;
            $sidebutton = 200 - $allnamelength;
        }



    }

   
    $sqlrant = "SELECT * FROM ranttable WHERE rantid=$currentid ";
    $resultrant = mysqli_query($conn, $sqlrant) or die("query unsucessfull");
    if(mysqli_num_rows($resultrant)>0){
        while($rowrant = mysqli_fetch_assoc($resultrant)){
        

?>
<div class="fortable" styles="position:fixed;">
<table style="width:600px;height:200px;background:#fff;">
        <tbody>
            <td>
    <!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="dropdown"style="float:right;margin-right:10px;">
<form method="post" action="delete.php"> 
<input type="text" hidden name="date" value="<?php echo $rowrant['rdate'];?>">
<button class="btn" style="">
      
    <i class="fa fa-trash"style="color:red;"></i>
  </button>
        </form>
  </div>
</div>
  </div>
              <div>
           
                  <div style="float:left;"><img src="<?php echo $picsource;?>" style="margin-left:10px;height:90px; width:90px; border-radius:50%;margin-top:10px;"></div>
                     <div style="float:left;"style="line-height:0.1cm;"><p style="line-height:0.1cm;margin-left:10px;"><br><br><b><?php echo $firstname;?></b> <b style="color: dodgerblue;"><?php echo $username?></b> · <?php echo $rowrant['rdate'];?> <br>
                    
                    </div>
                    
                    <p style="position:absolute;margin-left: 110px; color:	dimgray"><br><br><?php echo $rowrant['rant'];?></p>
                    </p>
                    <div style="clear:left"></div>
                    </div><br>
                    <ul class="buttonsss">
                   <li> <i class="fa fa-heart"style="color:black;"></i></li>
                   <li> <i class="fa fa-comment"style="color:orange;"></i></li>
                   <li> <i class="fa fa-retweet"style="color:navyblue;"></i></li>
                </ul>
              </div><div style="clear:left"></div>
              <hr>
                </td>
</tbody>
</table>

        </div>



<?php }} ?>
        </div>
 <?php }  }
 include "footer.php";
?>

<!-- <table style="table-width:100%;table-layout:fixed;height:200px;">
        <tbody>
            <td>
              <div>
                  <div style="float:left;"><img src="styles/images/uploads/profile.jpg" style="height:80px; width:80px; border-radius:50%;"></div>
                     <div style="float:left;"style="line-height:0.1cm;"><p style="line-height:0.1cm;margin-left:20px;"><br><br>assasa <b>@aurieljames11 </b>' 3h <i class="fa fa-ellipsis-h" style=" margin-left: 240px;"></i><br>
                    
                    </div>
                    <p style="margin-left:100px;">fiwenfiwefniwenwecniewnfiwnciwedw
                deieifwenfefewfefwefwefwefwwegewjvewcunifuqidwdv        
            ewfewfeffwefwefefwfefwfewfewfewfwefewfewfewfefewfweffwfe
    fwffwfwefewfeWwdqdw
fefwefefewfwefefwfwfef</p>
                    </p>
                    </div><br>
                    <ul class="buttonsss">
                   <li> <i class="fa fa-heart"></i></li>
                   <li> <i class="fa fa-comment"></i></li>
                   <li> <i class="fa fa-retweet"></i></li>
                </ul>
              </div>
                </td>
</tbody>
</table>
<table style="table-width:100%;table-layout:fixed;height:200px;">
        <tbody>
            <td>
              <div>
                  <div style="float:left;"><img src="styles/images/uploads/profile.jpg" style="height:80px; width:80px; border-radius:50%;"></div>
                     <div style="float:left;"style="line-height:0.1cm;"><p style="line-height:0.1cm;margin-left:20px;"><br><br>assasa <b>@aurieljames11 </b>' 3h <i class="fa fa-ellipsis-h" style=" margin-left: 240px;"></i><br>
                    
                    </div>
                    <p style="margin-left:100px;">fiwenfiwefniwenwecniewnfiwnciwedw
                deieifwenfefewfefwefwefwefwwegewjvewcunifuqidwdv        
            ewfewfeffwefwefefwfefwfewfewfewfwefewfewfewfefewfweffwfe
    fwffwfwefewfeWwdqdw
fefwefefewfwefefwfwfef</p>
                    </p>
                    </div><br>
                    <ul class="buttonsss">
                   <li> <i class="fa fa-heart"></i></li>
                   <li> <i class="fa fa-comment"></i></li>
                   <li> <i class="fa fa-retweet"></i></li>
                </ul>
              </div>
                </td>
</tbody>
</table>
<table style="table-width:100%;table-layout:fixed;height:200px;">
        <tbody>
            <td>
              <div>
                  <div style="float:left;"><img src="styles/images/uploads/profile.jpg" style="height:80px; width:80px; border-radius:50%;"></div>
                     <div style="float:left;"style="line-height:0.1cm;"><p style="line-height:0.1cm;margin-left:20px;"><br><br>assasa <b>@aurieljames11 </b>' 3h <i class="fa fa-ellipsis-h" style=" margin-left: 240px;"></i><br>
                    
                    </div>
                    <p style="margin-left:100px;">fiwenfiwefniwenwecniewnfiwnciwedw
                deieifwenfefewfefwefwefwefwwegewjvewcunifuqidwdv        
            ewfewfeffwefwefefwfefwfewfewfewfwefewfewfewfefewfweffwfe
    fwffwfwefewfeWwdqdw
fefwefefewfwefefwfwfef</p>
                    </p>
                    </div><br>
                    <ul class="buttonsss">
                   <li> <i class="fa fa-heart"></i></li>
                   <li> <i class="fa fa-comment"></i></li>
                   <li> <i class="fa fa-retweet"></i></li>
                </ul>
              </div>
                </td> -->

 
 