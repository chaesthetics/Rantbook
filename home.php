<?php 
include "header.php";



?>


<head>
    <link rel="stylesheet" href="styles/CSS/home2.css">
    <style>
        .buttonsss li{
            display: inline-block;
            margin-right:109px;
        }
</style>
</head>

<?php 
$currentuserprofilepic = $_SESSION['currentuserpp'];
$currentusercoverpic = $_SESSION['currentusercp'];

$sql = "SELECT * FROM ranttable order by rdate desc";
   $result = mysqli_query($conn, $sql) or die("query unsucessful");
   if(mysqli_num_rows($result)>0){
       while($row = mysqli_fetch_assoc($result)){
    $postid = $row['rantid'];
    
    
    $sql1 = "SELECT * FROM users WHERE did = $postid";
    $result1 = mysqli_query($conn, $sql1) or die("query unsucessful");

    if(mysqli_num_rows($result)>0){
        while($row1= mysqli_fetch_assoc($result1)){

       
       
      
?>

<div class="main">
<div>
    <section>
        <table style="table-width:100%;table-layout:fixed;height:200px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">
        <tbody>
            <td><i class="fa fa-ellipsis-h" style="color:#565656;float:right;"></i><br>
              <div>
                  <div style="float:left;"><img src="<?php echo $row1['profilep'];?>" style="height:80px; width:80px; border-radius:50%;"></div>
                     <div style="float:left;"style="line-height:0.1cm;"><p style="line-height:0.1cm;margin-left:20px;"><br><br><?php echo $row1['dfirstname'];?> <a href="wall.php?id=<?php echo $postid;?>"><b><?php echo $row1['dusername']?></a></b> ' <?php echo $row['rdate'];?> <br>
                    
                    </div>
                    <p style="margin-left:100px;"><br><br>  <?php echo $row['rant'];?></p>
                    </p>
                    </div><br>
                    <ul class="buttonsss">
                   <li> <i class="fa fa-heart"></i></li>
                   <li> <i class="fa fa-comment"style="color:orange;"></i></li>
                   <li> <i class="fa fa-retweet"style="color:navyblue;"></i></li>
                </ul>
              </div>
                </td>
</tbody>
</table>
        </section>
<?php }  }   }
    }
?>

        <!-- <section>
        <table style="table-width:100%;table-layout:fixed;height:200px;">
        <tbody>
            <td>
              <div>
                  <div style="float:left;"><img src="styles/images/uploads/profile.jpg" style="height:80px; width:80px; border-radius:50%;"></div>
                     <div style="float:left;"style="line-height:0.1cm;"><p style="line-height:0.1cm;margin-left:20px;"><br><br>assasa <b>@aurieljames11 </b>' 3h <i class="fa fa-ellipsis-h" style=" margin-left: 209px;"></i><br>
                    
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
        </section>
        <section>
        <table style="table-width:100%;table-layout:fixed;height:200px;">
        <tbody>
            <td>
              <div>
                  <div style="float:left;"><img src="styles/images/uploads/profile.jpg" style="height:80px; width:80px; border-radius:50%;"></div>
                     <div style="float:left;"style="line-height:0.1cm;"><p style="line-height:0.1cm;margin-left:20px;"><br><br>assasa <b>@aurieljames11 </b>' 3h <i class="fa fa-ellipsis-h" style=" margin-left: 209px;"></i><br>
                    
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
        </section>
        <section>
        <table style="table-width:100%;table-layout:fixed;height:200px;">
        <tbody>
            <td>
              <div>
                  <div style="float:left;"><img src="styles/images/uploads/profile.jpg" style="height:80px; width:80px; border-radius:50%;"></div>
                     <div style="float:left;"style="line-height:0.1cm;"><p style="line-height:0.1cm;margin-left:20px;"><br><br>assasa <b>@aurieljames11 </b>' 3h <i class="fa fa-ellipsis-h" style=" margin-left: 209px;"></i><br>
                    
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
        </section>
        <section>
        <table style="table-width:100%;table-layout:fixed;height:200px;">
        <tbody>
            <td>
              <div>
                  <div style="float:left;"><img src="styles/images/uploads/profile.jpg" style="height:80px; width:80px; border-radius:50%;"></div>
                     <div style="float:left;"style="line-height:0.1cm;"><p style="line-height:0.1cm;margin-left:20px;"><br><br>assasa <b>@aurieljames11 </b>' 3h <i class="fa fa-ellipsis-h" style=" margin-left: 209px;"></i><br>
                    
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
        </section> -->

       
    </div>
        

    <aside class="right">
        <h3 style="text-align:left; margin-left:30px;margin-top:10px; float:left"><b>Trends for you</b></h3><i class="fa fa-cog" style="color:#565656;font-size:24px; margin-left:50px;margin-top:16px; "></i><hr>
        <table style="margin-left:15px; width:310px;height:10px;">
            <tr>
            <td style="padding:10px;margin-left:20px;"><p style="margin-left:10px; float:left;color:grey;font-size:13px; line-height: 0.2cm;">trending in the Philippines</p>
        <p style="margin-left:10px; float:left;font-size:20px; line-height: 0.4cm;"><b>#USLCancelSLP</b><i class="fa fa-ellipsis-h" style="margin-left:90px;float:right;color:#565656;"></i></p>
        <p style="margin-left:10px;float:left;color:grey;font-size:13px; line-height: 0.0002cm;">3,310 Rants</p>
        <div style="clear:left;"></div>
        <hr style=absolute;>
    </td></tr>
    <tr>
            <td style="padding:10px;margin-left:20px;"><p style="margin-left:10px; float:left;color:grey;font-size:13px; line-height: 0.2cm;">pop - trending</p>
        <p style="margin-left:10px; float:left;font-size:20px; line-height: 0.4cm;"><b>#AdamLambert</b><i class="fa fa-ellipsis-h" style="margin-left:86px;float:right;color:#565656;"></i></p>
        <p style="margin-left:10px;float:left;color:grey;font-size:13px; line-height: 0.0002cm;">2,926 Rants</p>
        <div style="clear:left;"></div>
        <hr style=absolute;>
    </td></tr>
    <tr>
            <td style="padding:10px;margin-left:20px;"><p style="margin-left:10px; float:left;color:grey;font-size:13px; line-height: 0.2cm;">music - trending</p>
            <div style="clear:left;"></div> 
        <p style="margin-left:10px; float:left;font-size:20px; line-height: 0.4cm;"><b>#Jisoo</b><i class="fa fa-ellipsis-h" style="margin-left:172px;float:right;color:#565656;"></i></p>
        <p style="margin-left:10px;float:left;color:grey;font-size:13px; line-height: 0.0002cm;">2,423 Rants</p>
        <div style="clear:left;"></div>
        <hr style=absolute;>
    </td></tr>
    


<!-- </tr><tr>
<td style="padding:10px;margin-left:20px;"><p style="color:grey;font-size:13px; line-height: 0.2cm;">trending in the Philippines</p>
        <p style="font-size:20px; line-height: 0.2cm;"><b>#USLCancelSLP</b><i class="fa fa-ellipsis-h" style="float:right;color:#565656;"></i></p>
        <p style="color:grey;font-size:13px; line-height: 0.2cm;">1,923 Rants</p><hr>
    </td>
</tr>
<tr>
<td style="padding:10px;margin-left:20px;"><p style="color:grey;font-size:13px; line-height: 0.2cm;">Pop - Trending</p>
        <p style="font-size:20px; line-height: 0.2cm;"><b>#AdamLambert</b><i class="fa fa-ellipsis-h" style="float:right;color:#565656;"></i></p>
        <p style="color:grey;font-size:13px; line-height: 0.2cm;">1,773 Rants</p><hr>
    </td>
</tr>
<tr>
<td style="padding:10px;align-text:center;"><p style="color:grey;font-size:13px; line-height: 0.2cm;">Music - Trending</p>
        <p style="font-size:20px; line-height: 0.2cm;"><b>#Jisoo</b><i class="fa fa-ellipsis-h" style="float:right;color:#565656;"></i></p>
        <p style="color:grey;font-size:13px; line-height: 0.2cm;">735 Rants</p><hr>
    </td>
</tr> -->

<tr>
    <td><a href="#" style="position:absolute;top:450px;">Show more</a></td>
</tr>
</table>
    </aside> 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="styles/js/scripts.js" type="text/javascript"></script>


<?php 
include "footer.php";
?>