<?php
  include 'dbconnect.php';
   session_start();
  if(isset($_POST['sub'])){  

  $u_name=$_POST['username'];
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $c_pass=$_POST['confirm_password'];
  // $question=$_POST['question'];
  //  $answer=$_POST['answer'];



 

$query="INSERT INTO `user_reg` (`u_name`, `email`, `password`) VALUES (' $u_name', '$email', '$pass');";

        $result= mysqli_query($con, $query);
        if($result){
          echo "<script> alert ('registered successfully'); </script>";
          echo "<meta http-equiv=Refresh content=0.1;url=index.php?>";
        }else

        {
          echo "error";
        }
    }



?>


