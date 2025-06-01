



<?php
include 'dbconnect.php';
 session_start();
if(isset($_POST['sub1'])){
       
       $name=$_POST['name'];
       $email=$_POST['email'];
       $phone=$_POST['phone'];
       $message=$_POST['message'];
       

       
       
   $query="INSERT INTO `contact_us` ( `username`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone','$message');";

    
        $result= mysqli_query($con, $query);
        if($result){
          echo "<script> alert ('message sent successfully'); </script>";
          echo "<meta http-equiv=Refresh content=0.1;url=contact.php?>";
        }else

        {
          echo "error";
        }
    }



?>