
<?php
include "header.php";
// CHECK TO SEE IF THE KEYWORDS WERE PROVIDED	
?>   <?php
if (isset($_GET['k']) && $_GET['k'] != ''){
    
  //SAVE THE KEYWORDS FROM THE URL
  $k = trim($_GET['k']);
  $query_username = "SELECT * FROM users WHERE ";
  $display_words = "";

						//separate each of the keywords
						$keywords = explode(' ', $k);
						foreach($keywords as $word){
              $query_username .= "dusername LIKE '%".$word."%' OR ";
							$display_words .= $word."";
						}
           
            $query_username = substr($query_username, 0, strlen($query_username) -3);
            $query = mysqli_query($conn, $query_username) or die("query unsucessfoul"); //process the query
						$result_count = mysqli_num_rows($query);//result of the query
            if ($result_count > 0){

            ?>
    <h4 style="margin-top:20px;margin-right:80px;">Search Result<h4>

   <?php   while ($rowsearch = mysqli_fetch_assoc($query)){ ?> 
    <div class="dropdownsearc" style="margin-left:300px;margin-top:0px;width:70px;border-radius:2%;">
    <div class="dropdown-contentsearc" style="margin-top:100px;">
    <table style="margin-left:39px; border:none;width:600px;background:#f6f6f6;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">

<td> <div><img src="<?php echo $rowsearch['profilep'];?>" style="height:100px; width:100px;border-radius:50%;">
  <div style="float:right;margin-top:22px;margin-right:350px;"> <a href="wall.php?id=<?php echo $rowsearch['did'];?>"style="float:left;margin-left:0px;position:absolute;"><button style=";margin-left:-240;position:inherit;height:120;width:600px;margin-top:-28px;opacity:0;"></button><?php echo $rowsearch['dusername'];?></a><p style="float:left;position:absolute;margin-top:25px;"><b><?php echo $rowsearch['dfirstname'];?> <?php echo $rowsearch['dlastname'];?></b></p>
</td></div>
  
  <br>
   
   <?php } ?> 
  
   
   </table> </div>
          </div>
           
           
           <?php 
            }
            else{ ?>
             <h3 style="color:grey;margin-top:200px;">No Result.</h3>
            <?php }  }
          ?> 
         
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="styles/js/scripts.js" type="text/javascript"></script>
