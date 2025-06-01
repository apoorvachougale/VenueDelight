<!DOCTYPE html>

<html>

<head>

	<title>Notifications</title>

	<link rel="stylesheet" type="text/css" href="./owner/css/notifications.css">
</head>

    <a style="background-color: black;font-weight: bold;font-size: 15px;padding: 5px;font-family: serif; color:white; " href="categories.php">Home</a>

<body>
	<center>
	<h3 style="color: #8f1537;">Booking Details..</h3>

<table class="content-table">
  <thead>
    <tr>
      <!-- <th>Order Id</th>
      <th>User Id</th>
      <th>Onwer Id</th>
      <th>Cat Id</th> -->
      <th>Customer Name</th>
      <th>Mobile</th>
      <th>Email</th>
      <th>Event Type</th>
      <th>Total Guests</th>
      <th>Event Date</th>
      <th>Order Time</th>
      <th>Amount</th>
      <th> Status</th>
   
    </tr>
  </thead>
  <tbody>

                      
  <?php 

      // $owner_id = $_SESSION['owner_id'];

      // $user_id = "14";

    include("dbconnect.php"); 
    
    $user_email = $_GET['ue'];
    error_reporting(0); 
    $query = "SELECT * FROM booking_order  WHERE email='$user_email' ORDER BY timestamp desc l";
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
                <td><?php echo $row['amount'] ?></td>
                <td><a href="<?php echo $row['payment_link'] ?>"><?php echo $row['status'] ?></td></a>


                

      
    </tr>

     <?php

        }
    }
        
        else{
            echo "No Order";
            // echo ("<script LANGUAGE='JavaScript'>
            // window.alert('No Orders');
            // window.location.href='ownerhomepage.php';
            //   </script>");

        }
?>

</tbody>

</table>

</center> 

</body>

</html>