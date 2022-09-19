<?php 
include "config.php";
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles/CSS/layout.css">
<title>
    Rantbook 
</title>
<link rel="shortcut icon" href="styles/images/logo.png"/>
<link rel="stylesheet" type="text/css" href="styles/CSS/bootstrap.css" />
</head>
<body>
<div class="container1">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6 login-left"><br><br>
        <p style="font-size:50px; color:purple;"><b>🆁🅰🅽🆃🅱🅾🅾🅺</b></p>
        <p style="font-size:30px;">Express your feeling and rant with friends around you on Rantbook. </p> 
    </div>  

    <div class="col-md-3.5 login-right">
        <form action="login.php" method="post">
        <?php if(isset($_SESSION['errol'])){?>
            <p  style="background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    width: 100%;
    border-radius: 5px;
    text-align: center;  margin-left: auto; margin-right:auto;"><?php echo $_SESSION['errol'];?></p>
            <?php }?>
        <div class="form-group">
           
            <input style="height: 50px;" type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
    
        <div class="form-group">
            <input style="height: 50px;" type="password" name="password" placeholder="Password" class="form-control" required>
        </div>  
        <button type="submit" class="btn btn-primary" style=" border-radius: 6px; background-color:purple;border-color:purple; margin-left:auto; margin-right:auto; display:block; width: 310px; height: 50px;font-size:20px;"><b> Login </b></button>
        <a href="message.php" style="text-align:center; color:blue; font-size:13px; font-size:14px;margin-left:120px;">Forgot password?</a>  <hr>
    </form>
        <button type="button" data-toggle="modal" data-target="#form_modal" class="btn btn-primary" style="text-align: center;border-color:green; background-color:green; margin-left:auto; margin-right:auto; display:block; height: 50px;font-size:15px; border-radius: 6px;"><b>Create new account</b></button> 
    </div>  
</div><br><br><br>
<p style="margin-left:500px;">Don't just <b>cry</b>, <b>Create</b> and read rants now.</p>
</div>
</div> 


<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="registration.php">
				<div class="modal-header">
					<h1 style="color:black; margin-left:80px"><b>Sign Up</b></h1><br></div>
          <?php if(isset($_SESSION['error'])){?>
            <p class="error1" style="background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    width: 100%;
    border-radius: 5px;
    text-align: center;  margin-left: auto; margin-right:auto;"><?php echo $_SESSION['error'];?></p>
            <?php }?>
				
				<div class="modal-body">
                    
					<div class="col-md-12">
                   
                      <div class="">
                        <input type="text" style="height:40px;" name="firstname" class="form-control" required="required" placeholder="Firstname"><br>
                      </div>
     
                    
                      <div class="">
                       
                        <input type="text" style="height:40px;" name="lastname" class="form-control" required="required"placeholder="Lastname"><br>
                      </div>
					
						<div class="">
							
							<input style="height:40px; "type="text" class="form-control" name="username" required="required"placeholder="Username"/><br>
						</div>
                        <div class="col-md-6">
                      <div class="">
                      
                        <input style="height:40px;"type="password"  name="password" class="form-control" required="required" placeholder="Password">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="  ">
                     
                        <input style= "height:40px;"type="password"  name="cpassword" class="form-control" required="required"placeholder="Confirm Password"><br>
                      </div>
                    </div>
                    <div class="">
							
							<input style="height:40px; width:300px;"type="text" class="form-control" name="address" required="required"placeholder="Address"/>
                            <span style="color:#a6a6a6; font-size:12px; float:left;height:40px; width:300px;">(e.g: North Gate, South Gate, Abiola, Akinkedo)</span>
						</div>
                        <div class="">
                      <div class="  ">
                     
                        <input style= "height:40px; "type="date"  name="birthday" class="form-control" required="required"placeholder="birthday">
                      </div>
                    </div>
                    <div class="form-group">
                                   <br> <label for="txtGender"style= " ">Gender:</label><br>
                                    <div class="radio">
                                        <label class="radio-inline"style= " margin-left:25px;"><input type="radio" name="txtGender"  <?php if (isset($txtGender) && $txtGender == 'male') echo 'checked'; ?> required value="male" >Male</label><br>
                                    </div>
                                    <div class="radio">
                                        <label class="radio-inline"style= " margin-left:25px;"><input type="radio" name="txtGender" <?php if (isset($txtGender) && $txtGender == 'male') echo 'checked'; ?> required value="female">Female</label><br>
                                    </div>
                                </div><br>
                                <div class="col-md-6">
                      <div class="">
                        <input type="text" style="height:40px;" name="number" class="form-control" required="required" placeholder="Phone Number">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="">
                       
                        <input type="text" style="height:40px;" name="email" class="form-control" required="required"placeholder="Email"><br>
                      </div>
					</div>
                            
           



				</div>
				<br style="clear:both;"/>
				<div class="modal-footer"><br><br><br>
					<button class="btn btn-primary" style="font-size:17px;background-color:green;height:50px;float:left;position:absolute;left:75px;width:350px;"><b>Sign Up</b></button>
				</div>
			</form>
		</div>
</div>
	</div>
</div>
	
<script src="styles/js/jquery-3.2.1.min.js"></script>	
<script src="styles/js/bootstrap.js"></script>	
    
</body>
<div class="footer">
    

<hr>

<footer style="text-align:center;"><b>Created by:</b> <i>@aurieljames11</i></footer>
<br>
</div>





</html>