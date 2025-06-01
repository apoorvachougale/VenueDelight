<?php  
include "dbconnect.php";



if(isset($_REQUEST['fsub'])){
          $password = $_POST['password'];
          $user_id = $_POST['user_id'];
            $query="UPDATE `user_reg` SET `password` = '$password' WHERE `user_reg`.`user_id` = '$user_id'";
            $result=mysqli_query($con, $query);
            if($result)
            {
              header("location:index.php");
            }
            else
            {
              echo"<script> alert ('error'); </script>";
            }
        }
        else
        {
          echo"<script> alert ('error'); </script>";
        }
?>        