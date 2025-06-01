
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Venue Delight</title>
  <meta content="" name="description">

  <meta content="" name="keywords">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link rel="stylesheet"  href="css/style.css?v=<?php echo time();
  ?>">
  <link rel="stylesheet"  href="css/a_dashboard.css?v=<?php echo time();
  ?>"> 
   <link rel="stylesheet"  type="text/css"  href="css/venue.css?v=<?php echo time();?>"> 
   <link rel="stylesheet" type="text/css" href="css/table.css?v=<?php echo time();?>"> 
    
  </head>
  <body>
    <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <span>Venue Delight</span>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="getstarted scrollto"  href="logout.php" >Logout</a></li>
         
      </ul>
      </nav>
    </div>
  </header>
     <div class="sidebar">
    <div class="profile_info">  
    </div>
        <a href="admin_profile.php"><i class="fa fa-id-card-o"></i><span>Admin Profile</span></a>
        <a href="wedding.php"><i class="far fa-building"></i><span>Add Venue</span></a>
        <a href="display_owner.php"><i class="fa fa-user"></i><span>Registered Owners</span></a>
        <a href="display_users.php" ><i class="fa fa-user"></i><span>Registered Users</span></a>
        <a href="customer_query.php" ><i class="fa fa-user"></i><span>Customer Queries</span></a>
        <a href="logout.php"><i class="far fa-building"></i><span>Logout</span></a>
    </div> 
    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>

    

   

 