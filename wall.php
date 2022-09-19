<?php 
include "config.php";
include "header.php";

$stu_id= $_GET['id'];
$currentuserprofilepic = $_SESSION['currentuserpp'];
$currentusercoverpic = $_SESSION['currentusercp'];
$currentid = $_SESSION['currentid'];
$sqlprof = "SELECT * FROM users WHERE did = '$stu_id'";
$resultprof = mysqli_query($conn, $sqlprof) or die("query unsucessfull");
if(mysqli_num_rows($resultprof)>0){
    while($rowprof = mysqli_fetch_assoc($resultprof)){



?>
<head>
    <style>
        .main{
            background: #F3f0fb;
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
<img class="cover" src="<?php echo $rowprof['coverp'];?>" style="position: relative;margin-top:10px;width:580px;height:250px;">
<img class="profile" src="<?php echo $rowprof['profilep'];?>" style="border: 3px solid white;top:210px;left:20px; border-radius:50%;position:absolute;width:120px; height:120px;">
<a href="home.php"type="button" class="editprofile"style="margin-top:15px;margin-left:380px;"><p style="margin-top:6px;"><b>Back</b></p></a><br><br><br>
<p style="float:left;margin-left:10px;line-height:0.01cm"><br><?php echo $rowprof['dfirstname'];?> <?php echo $rowprof['dlastname'];?></p>
<div style="clear:left;"></div>
<p style="float:left;margin-left:10px; line-height:0.2cm;"><b><?php echo $rowprof['dusername'];?></b></p>
<div style="clear:left;"></div>
<p style="float:left;line-height:.01cm;font-size:14px;margin-left:10px;margin-top:20px;"><i class="fa fa-map-marker" aria-hidden="true"style="font-size:18px"></i> <?php echo $rowprof['daddress'];?></p>
<div style="clear:left;"></div>
<p style="float:left;margin-left:10px;line-height:0.01cm;font-size:14px;"><i class="fa fa-venus-mars" style="font-size:18px;"></i> <?php echo $rowprof['dgender'];?></p>
<div style="clear:left;"></div>
<p style="float:left;margin-left:10px;line-height:0.01cm;font-size:14px;"><i class="fa fa-phone" aria-hidden="true" style="font-size=18px;"></i> <?php echo $rowprof['dnumber'];?></p>
<div style="clear:left"></div>
<p style="float:left;margin-left:10px;line-height:0.01cm;font-size:14px;"><i class="fa fa-envelope" aria-hidden="true" style="font-size=18px;"></i> <?php echo $rowprof['demail'];?></p>
<br><hr>
<?php 
    $firstname="";
    $username="";
    $picsource="";

    $sqlinfo = "SELECT * FROM users WHERE did='$stu_id'";
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

   
    $sqlrant = "SELECT * FROM ranttable  WHERE rantid='$stu_id'";
    $resultrant = mysqli_query($conn, $sqlrant) or die("query unsucessfull");
    if(mysqli_num_rows($resultrant)>0){
        while($rowrant = mysqli_fetch_assoc($resultrant)){
        

?>
<div class="fortable" styles="position:fixed;">
<table style="width:600px;height:200px;">
        <tbody>
            <td>
            <i class="fa fa-ellipsis-h" 
                     style="position:sticky;margin-left:570px;"></i>
              <div>
           
                  <div style="float:left;"><img src="<?php echo $picsource;?>" style="height:90px; width:90px; border-radius:50%;margin-top:10px;"></div>
                     <div style="float:left;"style="line-height:0.1cm;"><p style="line-height:0.1cm;margin-left:10px;"><br><br><?php echo $row;?> <b><?php echo $username?></b> ' <?php echo $rowrant['rdate'];?> <br>
                    
                    </div>
                    
                    <p style="position:absolute;margin-left: 100px;"><br><br><?php echo $rowrant['rant'];?></p>
                    </p>
                    <div style="clear:left"></div>
                    </div><br>
                    <ul class="buttonsss">
                   <li> <i class="fa fa-heart"></i></li>
                   <li> <i class="fa fa-comment"></i></li>
                   <li> <i class="fa fa-retweet"></i></li>
                </ul>
              </div><div style="clear:left"></div>
                </td>
</tbody>

</table>
        </div>

<hr>

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

 
 