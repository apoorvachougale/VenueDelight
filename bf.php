<?php
   session_start();
   if($_SESSION['id']==""){
            
           
          // header("location:index.php");
          echo ("<script LANGUAGE='Javascript'>
            window.alert('Please login/register');
            window.location.href='index.php';
            </script>");
        }
      
        $a= $_SESSION['id'];

        // echo $a;
      
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

     <title>Venue Details</title>
      <link rel="stylesheet" href="./owner/venue1.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

</head>
 

    <body>

        <?php
          include "dbconnect.php";
          $query = "SELECT * from `user_reg` where email='$a'";
          $result = mysqli_query($con, $query);
          $row= mysqli_fetch_assoc($result);
          

        ?>
      <div class="container">
         <a href="categories.php"><button style="background: linear-gradient(-135deg, #8f1537, #c7004c ,#e37070);color: #fff;height: 5%;
                   width: 10%;border-radius: 5px; font-size: 20px;border:none;margin-left: 0%;">BACK</button></a>
      <div class="text">FILL DETAILS</div>
      <form name="f" method="post" >
       
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="username" value="<?php echo"{$row['u_name']} "?>" required>
               <div class="underline"></div>
               <label for="">Name</label>
            </div>
            
            <div class="input-data">
               <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="phone" required>
               <div class="underline"></div>
               <label for="">Contact Number</label>
            </div>
         </div>

         <div class="form-row">
            <div class="input-data">
               <input type="email" name="email" value="<?php echo"{$row['email']} "?>" required>
               <div class="underline"></div>
               <label for="">Email</label>
            </div>

            <div class="input-data">
               <input type="text" name="et" value="1" max=5 required>
               <div class="underline"></div>
               <label for="">Days Required</label>
            </div>
         </div>

         <div class="form-row">
            <div class="input-data">
               <input type="text" name="tg" required>
               <div class="underline"></div>
               <label for="">No Of Guests</label>
            </div>

            <div class="input-data">
               <input type="date" name="date" required>
               <div class="underline"></div>
               <label for=""></label>
            </div>
            
            <!-- <div class="input-data">
               <input type="text" name="fneed" required>
               <div class="underline"></div>
               <label for="">Facility Needed</label>
            </div> -->

               <br><br>
         
         </div>
<center>
            <input type="submit" name="fill" value="Submit" style="background: linear-gradient(-135deg, #8f1537, #c7004c ,#e37070);color: #fff;height: 5%;
                  width: 50%;border-radius: 25px; font-size: 20px;border:none; padding:5px 35px; right:80%"> 
                  

</center>
         </div>
 <?php  

?>


<?php

         include("dbconnect.php");

         error_reporting(0);

         session_start();

         $ue = $_SESSION['id'];

         // echo $ue ;

         if(isset($_POST['fill'])){
         
         // $user_id = $_SESSION['user_id'];
         // $owner_id = $_SESSION['owner_id'];
         // $username = $_SESSION['username'];

            // given id




         $owner   = $_GET['owner'];

         $user_id = "14"; 

         $name    = $_POST['username'];

         $ph      = $_POST['phone'];

         $email   = $_POST['email'];

         $et      = $_POST['et'];

         $tg      = $_POST['tg'];

         $ed      = $_POST['date'];

         $s       = "Pending";

         $gt = $_GET['a'];
   
         $gtt = $et * $gt ;
    


                  $query = "INSERT INTO `booking_order`(`user_id`, `owner_id`, `username`, `phone`, `email`, `eventtype`, `totalguest`, `amount`, `eventdate`, `status`) 

                                                VALUES ('$user_id', '$owner', '$name', '$ph', '$email', '$et', '$tg', '$gtt', '$ed', '$s')";

                           $data = mysqli_query($con, $query);    
                  
                           if($data){
                              // echo "<script>alert('Successfully Done')</script>";

                                 echo ("<script LANGUAGE='JavaScript'>
                                       window.alert('Details Send Successfully ');
                                       window.location.href='user_orders.php?ue={$ue}';
                                       </script>");
                           }
                           else{
                              echo "<script>alert('Something Wrong ')</script>";
                           }
            
   }
   
   
   
   ?>





      </body>

</html>
