<?php
include 'dbconnect.php';
error_reporting(0);
session_start();
if(isset($_POST['sub'])){
       
       $name=$_POST['name'];
       $password=$_POST['password'];
       

      
      $sql="SELECT * from register where name ='$name' and password='$password'";
      $result=mysqli_query($con,$sql);
      if (mysqli_num_rows($result)>0) 
      {
        
        $row=mysqli_fetch_assoc($result);
        
        if ($row['name']==$name && $row['password']==$password)
         {
          $_SESSION['id']=$name;
          
           header("location:../index.php");

        }
        else{
          header("location:login.php?ans=Wrong_UserName_OR_Password");
        }
      }
      else{
        header("location:login.php?ans=Wrong_UserName_OR_Password");
      }
  }




  ?>