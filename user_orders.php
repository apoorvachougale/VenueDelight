
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Venue Delight</title>
  <meta content="" name="description">

  <meta content="" name="keywords">
  
  <!--fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> 
  <link rel="stylesheet" type="text/css" href="./owner/css/notifications.css">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  

  <!--  Main CSS File -->
  
  <link rel="stylesheet"  href="assets/css/style1.css?v=<?php echo time();
  ?>"><link rel="stylesheet"  href="assets/css/style.css?v=<?php echo time();
  ?>">
  <link href="assets/css/slider.css?v=<?php echo time();
  ?>" rel="stylesheet" type="text/css">
   <link rel="stylesheet"  href="assets/css/product_detail_design.css?v=<?php echo time();
  ?>">
  <!-- <link rel="stylesheet"  href="assets/css/halls.css?v=<?php echo time();
  ?>"> -->

  <script src="assets/js/js-image-slider.js" type="text/javascript"></script>
  <script src="assets/jquery/jquery.js"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<style>


</style> 
  

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    
       <!--add logo-->
      <a href="index.php" class="logo d-flex align-items-center">
         
        <span>Venue Delight</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          
        
          <li><a class="nav-link scrollto" href="categories.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          
          <!-- <li><a href="blog.html">Blog</a></li> -->
           

          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
          <!-- <li>echo"<a  href="user_orders.php?ue=<?php echo $a ?>" class=" " style="width:auto;">"My Bookings</a></li> -->
          <li><a href="logout.php" class="getstarted scrollto" style="width:auto;">Logout</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


<body>
	<center>
    <br><br><br><br><br>
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
      <th>Total Days</th>
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
    $query = "SELECT * FROM booking_order  WHERE email='$user_email' ORDER BY timestamp desc limit 1";
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