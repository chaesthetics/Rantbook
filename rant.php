<?php 
include "config.php";
include "header.php";
$date = date('m/d/Y h:i:s a', time());
$currentid = $_SESSION['currentid'];
?>
<head>

<style>
    .main{
        height:370px;
        width:750px;
        background: #fff;
        margin: auto auto;
        margin-top: 50px;
        border-radius:50px;
        
    }
</style>
</head>


<h4 style="position:relative;margin-left: -800px;0px;margin-top:30px;">Create new rant post</h4>
<div class="main"style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">

<img src="<?php echo $_SESSION['currentuserpp'];?>"style="height:100px; width:100px;border-radius:60px;border:3px solid white;float:left;margin-top:90px;margin-left:20px;">
<form method="post"action="rants.php">
<input type="text" name="id" value="<?php echo $currentid;?>"hidden>
<input type="text" name="date" value="<?php echo $date;?>" hidden>
<textarea style="float:left;margin-top:100px;height:150px;width:550px;margin-left:-2px;"placeholder=" What's Happening in Rantbook? " name="rant"></textarea>
<button type="submit" style="border:none;height:50px; width:120px;border-radius:50px;margin-top:30px;margin-left:380px;background:#9428b9;color: #fff;"><b>Rant</b></button>
</form>

</div>
<br><br><br><br><br><br><br><br>
<?php include "footer.php";?> 
