<!DOCTYPE html>
<html>
<head>
    <title>Confirm Password!</title>
    <link rel="stylesheet" type="text/css" href="forgot_page.css">
</head>





<?php 
		include "dbconnect.php";
   
    $q = $_POST['question'];
    $a = $_POST['answer'];
    $e = $_POST['email'];
   



    $sql="SELECT * FROM `owner_reg` WHERE email='$e'";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_assoc($result);
    if($row['question']==$q && $row['answer']==$a){
      // header("location:reset.php");
    ?>  

    
       <body>
       <form class="login" action="reset.php" method="POST" name="f3">
       <h2 class="text-center">Enter Your New Password!!</h2>
      <input class="em" type="password" name="password" placeholder="New Password" required>
      <input  type="hidden" name="user_id" class="em" value='<?php echo $row['user_id'];?>'/>
  
  
      <button name="fsub" value='UPDATE' >UPDATE</button>
     </form>

        
        
  <?php
   }     
    ?>
  </html>