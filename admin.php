<?php
include 'dbconnect.php';

   session_start();
if(isset($_POST['sub'])){
       
       $a_name=$_POST['username'];
       $password=$_POST['password'];
       

      

      $sql="SELECT * from admin where name ='$a_name' and password='$password'";
      $result=mysqli_query($con,$sql);
      if (mysqli_num_rows($result)>0) 
      {
      	
      	$row=mysqli_fetch_assoc($result);
      	
      	if ($row['name']==$a_name && $row['password']==$password)
      	 {
      		// $_SESSION['id']=$a_name;

          $_SESSION['id']=$row['id'];



          
      		 header("location:admin/admin_home.php");

      	}
      	else
        {
        echo "<script> alert('Wrong username or password');</script>";

        echo "<meta http-equiv=Refresh content=0.1;url=admin_login.php?>";
         }
      }
      else
      {
         echo "<script> alert('Wrong username or password');</script>";

        echo "<meta http-equiv=Refresh content=0.1;url=admin_login.php?>";
      }

  }
 ?>

