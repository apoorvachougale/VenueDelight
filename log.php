



<?php
include 'dbconnect.php';
 session_start();
if(isset($_POST['sub1'])){
       
       $email=$_POST['email'];
       $password=$_POST['password'];
       

      

      $sql="SELECT * from user_reg where email ='$email' and password='$password'";
      $result=mysqli_query($con,$sql);
      if (mysqli_num_rows($result)>0) 
      {
        
        $row=mysqli_fetch_assoc($result);
        
        if ($row['email']== $email  && $row['password'] == $password)
         {
          $_SESSION['id']=$email;

          
            
           // 
            echo "<meta http-equiv=Refresh content=0.1;url=categories.php?>";

          }
        else
        {
        echo "<script> alert('Wrong username or password');</script>";

        echo "<meta http-equiv=Refresh content=0.1;url=index1.php?>";
         }
      }
      else
      {
         echo "<script> alert('Wrong username or password');</script>";

        echo "<meta http-equiv=Refresh content=0.1;url=index1.php?>";
      }

  }
 ?>

