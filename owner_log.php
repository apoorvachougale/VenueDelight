<?php
include 'dbconnect.php';
 session_start();
if(isset($_POST['subm2'])){
       
       $email=$_POST['email'];
       $password=$_POST['password'];
       

      

      $sql="SELECT * from owner_reg where email ='$email' and password='$password'";
      $result=mysqli_query($con,$sql);
      if (mysqli_num_rows($result)>0) 
      {
        
        $row=mysqli_fetch_assoc($result);
        
        if ($row['email']== $email  && $row['password'] == $password)
         {
          $_SESSION['id']=$email;
// die($_SESSION['id']);
          $_SESSION['owner_id'] = $row['owner_id'];



            
           // 
            echo "<meta http-equiv=Refresh content=0.1;url=owner/ownerhomepage.php?>";

          }
       else
        {
        echo "<script> alert('Wrong username or password');</script>";

        echo "<meta http-equiv=Refresh content=0.1;url=owner_login.php?>";
         }
      }
      else
      {
         echo "<script> alert('Wrong username or password');</script>";

        echo "<meta http-equiv=Refresh content=0.1;url=owner_login.php?>";
      }

  }
 ?>
