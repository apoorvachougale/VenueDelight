<?php
 session_start();
   if($_SESSION['id']==""){
            
            header("location:../index.php");
        }
      
        $a= $_SESSION['id'];
        $owner_id = $_SESSION['owner_id'];
        // echo $a;
        // echo $owner_id;
        // die();
?>


<!DOCTYPE html>

<html>

<head>

  <title>Notifications</title>

  <link rel="stylesheet" type="text/css" href="css/notifications.css">

</head>

    <a style="background-color: black;font-weight: bold;font-size: 15px;padding: 5px;font-family: serif; color:white; " href="ownerhomepage.php">Home</a>

<body>
  <center>
  <h3 style="color: #8f1537;">You have the following booking Details..</h3>

<table class="content-table">
  <thead>
    <tr>
     <!--  <th>Order Id</th>
      <th>User Id</th>
      <th>Onwer Id</th>
      <th>Cat Id</th> -->
      <th>Customer Name</th>
      <th>Mobile</th>
      <th>Email</th>
      <th>Days required</th>
      <th>Total Guests</th>
      <th>Event Date</th>
      <th>Order Time</th>
      <th>Current Status</th>
      <th>Amount</th>
      <th>Payment Link</th>
      <th>Update Status</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>

                      
  <?php 

      $owner_id = $_SESSION['owner_id'];

      // $owner_id = "88";

    include("dbconnect.php"); 
    include("functions.php"); 
    
    // error_reporting(0); 
    $query = "SELECT * FROM booking_order WHERE owner_id='$owner_id'";
    $data = mysqli_query($con, $query);
    $total = mysqli_num_rows($data);
    if($total !=0){
    while($row = mysqli_fetch_assoc($data))
        {
          ?>
          
    <tr>
      
                
               
             
               
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['eventtype'] ?></td>
                <td><?php echo $row['totalguest'] ?></td>
                <td><?php echo $row['eventdate'] ?></td>
                <td><?php echo $row['timestamp'] ?></td>
                <td><?php echo $row['status'] ?></td>
                <td><?php echo $row['amount'] ?></td>
                <td><?php echo $row['payment_link'] ?></td>


                <td><a style="background-color: #8f1537;font-weight: bold;font-size: 15px;padding: 5px;font-family: serif; color:white; " href="editstatus.php?o=<?php echo $row['order_id']?>&s=<?php echo $row['status']?>&l=<?php echo $row['payment_link']?>&ta=<?php echo $row['amount']?> ">View</a></td>

                <td><a style="background-color: #8f1537;font-weight: bold;font-size: 15px;padding: 5px;font-family: serif; color:white; " href="deleteorder.php?order_id=<?php echo $row['order_id'] ?>" onclick='return checkdelete()'>Delete</a></td>

      
    </tr>

     <?php

        }
    }
        
        else{
            echo "No Booking";
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('No Booking');
            window.location.href='ownerhomepage.php';
              </script>");

        }
?>

</tbody>

</table>

</center> 

</body>

</html>