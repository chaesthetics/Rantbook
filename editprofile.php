<?php 
include "config.php";
include "header.php";
$currentid = $_SESSION['currentid'];
$password = $_SESSION['currentpass'];
$sqlprof = "SELECT * FROM users WHERE did = '$currentid'";
$resultprof = mysqli_query($conn, $sqlprof) or die("query unsucessfull");
if(mysqli_num_rows($resultprof)>0){
    while($rowprof = mysqli_fetch_assoc($resultprof)){

  

?>
<link href="styles/CSS/EP1.css" type="text/css" rel="stylesheet">
<head>
    <style>
        .main{
            background: #fff;
            height: 880px;
            margin: auto auto;
            margin-top:20px;
            width:600px;
           
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
            margin-right: 100px;
        }
        /* Video Explanation - https://youtu.be/3AK3vspZvvM */




.custom-field {
  position: relative;
  font-size: 14px;
  border-top: 20px solid transparent;
  margin-bottom: 5px;
  --field-padding: 12px;
}

.custom-field input {
  border: none;
  -webkit-appearance: none;
  -ms-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background: #f2f2f2;
  padding: var(--field-padding);
  border-radius: 3px;
  width: 250px;
  outline: none;
  font-size: 14px;
}

.custom-field .placeholder {
  position: absolute;
  left: var(--field-padding);
  width: calc(100% - (var(--field-padding) * 2));
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  top: 22px;
  line-height: 100%;
  transform: translateY(-50%);
  color: #aaa;
  transition: 
    top 0.3s ease,
    color 0.3s ease,
    font-size 0.3s ease;
}

.custom-field input.dirty + .placeholder,
.custom-field input:focus + .placeholder,
.custom-field input:not(:placeholder-shown) + .placeholder {
  top: -10px;
  font-size: 10px;
  color: #222;
}

.custom-field .error-message {
  width: 100%;
  display: flex;
  align-items: center;
  padding: 0 8px;
  font-size: 12px;
  background: #d30909;
  color: #fff;
  height: 24px;
}

.custom-field .error-message:empty {
  opacity: 0;
}

/* ONE */
.custom-field.one input {
  background: none;
  border: 2px solid #ddd;
  transition: border-color 0.3s ease;
}

.custom-field.one input + .placeholder {
  left: 8px;
  padding: 0 5px;
}

.custom-field.one input.dirty,
.custom-field.one input:not(:placeholder-shown),
.custom-field.one input:focus {
  border-color: #222;
  transition-delay: 0.1s
}

.custom-field.one input.dirty + .placeholder,
.custom-field.one input:not(:placeholder-shown) + .placeholder,
.custom-field.one input:focus + .placeholder {
  top: 0;
  font-size: 10px;
  color: #222;
  background: #F3f0fb;
  width: auto
}

/* TWO */

       
    </style>
</head>

<div class="main" style="position:relative;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">
<form style="position:relative;margin-left:1px;" action="EPs.php" method="post" enctype="multipart/form-data"> 
<div class="coverpdiv"><img id="photo1" src="<?php echo $_SESSION['currentusercp'];?>" style="position: relative;border:3px solid white;margin-top:10px;width:580px;height:250px;">
<input type="file" id="file1"name="coverp">
<label for="file1" id="uploadBtn1"><i style="margin-top:30px;"class="fa fa-image"></i></label>
</div>


<div class="profilepdiv" style="background:black; height:120px;width:120px;position:absolute;top:200;left:20;border-radius:50%;overflow:hidden;border:2px solid white;"><img id="photo"src="<?php echo $_SESSION['currentuserpp'];?>" style=";top:0; left:0;position:absolute;width:120px; height:120px;">
<input type="file" id="file" name="profilep">
<label for="file" id="uploadBtn"><i style="margin-top:8px;"class="fa fa-image"></i></label>  
</div>

<div style="clear:left;"></div><br><br><br><br>

<label class="custom-field one" style="float:left;margin-left:40px">
<input type="text"  name="firstname" placeholder=" " value ="<?php echo $rowprof['dfirstname'];?>" required /><span class="placeholder">Firstname</span>
</label>
<label class="custom-field one" style ="float:right;margin-right:40px;">
<input type="text" name="lastname" placeholder=" "  value="<?php echo $rowprof['dlastname'];?>" required /> <span class="placeholder">Lastname</span>
</label>
<div style="clear:left;"></div>
<label class="custom-field one" style="float:left; margin-left:25px">
<input type="text" name="username" placeholder=" "  value="<?php echo $rowprof['dusername'];?>" required /> <span class="placeholder">Username</span>
<label class="custom-field one" style ="float:right;margin-right:40px;top:-20;">
<input type="password" name="password" value="<?php echo $password;?>"placeholder=" " /> <span class="placeholder">Password</span>
</label>

<i class="fa fa-map-marker" aria-hidden="true"style="font-size:25px; float:left;margin-left:30px;margin-top:55px;"></i>
<label class="custom-field one"style="float:left;margin-left:9px;"><input type="text" name="address" placeholder=" " value="<?php echo $rowprof['daddress'];?>"><span class="placeholder">Address</span>
</label><div style="clear:left;">
</div>
<i class="fa fa-venus-mars" aria-hidden="true"style="font-size:25px; float:left;margin-left:15px;margin-top:30px;"></i>
<label class="custom-field one"style="float:left;margin-left:9px;"><input type="text" name="gender" placeholder=" " value="<?php echo $rowprof['dgender'];?>"><span class="placeholder">Gender</span>
</label><div style="clear:left;">
</div>
<i class="fa fa-phone" aria-hidden="true"style="font-size:25px; float:left;margin-left:23px;margin-top:30px;"></i>
<label class="custom-field one"style="float:left;margin-left:9px;"><input type="text" name="number" placeholder=" " value="<?php echo $rowprof['dnumber'];?>"><span class="placeholder">Phone number</span>
</label><div style="clear:left;">
</div>
<i class="fa fa-envelope" aria-hidden="true"style="font-size:25px; float:left;margin-left:20px;margin-top:30px;"></i>
<label class="custom-field one"style="float:left;margin-left:9px;"><input type="text" name="email" placeholder=" " value="<?php echo $rowprof['demail'];?>"><span class="placeholder">E-mail</span>
</label><div style="clear:left;">
</div>
<!-- <i class="fa fa-venus-mars" style="font-size:25px; float:left;margin-left:10px;"></i>
<input type="text" name="gender" placeholder="Gender"style="margin-left:10px;text-align:center;width:300px;height:30px;border-radius:8px;border:1px solid grey;margin-right:377px;"value="<?php echo $rowprof['dgender'];?>">
<div style="clear:left;"></div>
<i class="fa fa-phone" style="font-size:25px; float:left;margin-left:12px;"></i>
<input type="text" name="number" placeholder="Number"style="margin-left:10px;text-align:center;width:300px;height:30px;border-radius:8px;border:1px solid grey;margin-right:368px;" value="<?php echo $rowprof['dnumber'];?>">
<div style="clear:left;"></div>
<i class="fa fa-envelope" style="font-size:22px; float:left;margin-left:12px;"></i>
<input type="text" name="email" placeholder="Email"style="margin-left:10px;text-align:center;width:300px;height:30px;border-radius:8px;border:1px solid grey;margin-right:372px;" value="<?php echo $rowprof['demail'];?>">
<div style="clear:left;"></div>  -->
<!-- <p style="float:left;margin-left:10px;line-height:0.01cm"><br><?php echo $rowprof['dfirstname'];?> <?php echo $rowprof['dlastname'];?></p>
<div style="clear:left;"></div>
<p style="float:left;margin-left:10px; line-height:0.2cm;"><b><?php echo $rowprof['dusername'];?></b></p>
<div style="clear:left;"></div>
<p style="float:left;line-height:.01cm;font-size:14px;margin-left:10px;margin-top:20px;"><i class="fa fa-map-marker" aria-hidden="true"style="font-size:18px"></i> <?php echo $rowprof['daddress'];?></p>
<div style="clear:left;"></div>
<p style="float:left;margin-left:10px;line-height:0.01cm;font-size:14px;"><i class="fa fa-venus-mars" style="font-size:18px;"></i> <?php echo $rowprof['dgender'];?></p>
<div style="clear:left;"></div>
<p style="float:left;margin-left:10px;line-height:0.01cm;font-size:14px;"><i class="fa fa-phone" aria-hidden="true" style="font-size=18px;"></i> <?php echo $rowprof['dnumber'];?></p>
<div style="clear:left"></div>
<p style="float:left;margin-left:10px;line-height:0.01cm;font-size:14px;"><i class="fa fa-envelope" aria-hidden="true" style="font-size=18px;"></i> <?php echo $rowprof['demail'];?></p> -->
<button class="editprofile"style="margin-top:15px;margin-left:380px;"><p style="margin-top:6px;"><b>Save</b></p></button>
    </form></div>
    <script src="styles/js/app.js"></script> 
    <script src="styles/js/app1.js"></script>
<?php }}?>