  <!-- <?php 

   session_start();
   
 ?>  -->
 
 
 
  

<!DOCTYPE html>
<html>
<head>
  <title>Venue Delight</title>

<link rel="stylesheet" type="text/css" href="assets/css/log.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 --><meta content="" name="description">

  <meta content="" name="keywords">
  
  <!--fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> 

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
  <link rel="stylesheet"  href="assets/css/style.css?v=<?php echo time();
  ?>">
  <link rel="stylesheet"  href="assets/css/style1.css?v=<?php echo time();
  ?>">

  <script src="js/js-image-slider.js" type="text/javascript"></script>
  <script src="jquery/jquery.js"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<!-- <style>


</style> -->

</head>
<body>
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    
       <!--add logo-->
      <a href="index.php" class="logo d-flex align-items-center">
         
        <span>Venue Delight</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          
        
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="admin_login.php">Admin</a></li>
          <!-- <li><a class="nav-link scrollto" href="admin/admin_login.php">Admin</a></li>
          <li><a class="nav-link scrollto"  href="owner_log-reg.php" >Owner</a></li> -->
          <!-- <li><a href="blog.html">Blog</a></li> -->
          
          <li><a class="nav-link scrollto" href="owner_log-reg.php">Owner</a></li>
         <li><a href="#" class="nav-link scrollt" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">User</a></li>
          <!-- <li><a href="#" class="nav-link scrollt" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->








 <div class="wrapper1">
    <form class="form-signin1" method="POST" action="owner_log.php" style="box-shadow: 0px 0px 10px rgba(0.2,0,0,0);
  border: 4px solid #8f1537;  "> 
    <div class="right" >
            
     <center> <h2 class="form-signin1-heading1">Owner login</h2></center><br>

      </div>
      <input type="text" class="form-control1" name="email" placeholder="Enter Email Id" required="" autofocus="" style="border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    padding: 10px;"/><br><br>
      <input type="password" class="form-control1" name="password" placeholder="Password" required="" style=" border-top-left-radius: 0;
    border-top-right-radius: 0;"/> <br> <br> 
    <p> <a href="forgot.php"> Forgot password?</a></p>   
     
     <center> <button class="btn btn-lg  btn-block" style="background-color: #8f1537; color: #fff; margin-top:20px" name="subm2" type="submit">Login</button>   </center>
     <p> <center><a href="owner_registration1.php"> Don't have account ? Sign Up</a></center></p>
    </form>
    
     <?php include("log-reg.php"); ?>
  </div> 
<!--   PHP TO RUN BACKEND FOR ADMIN LOGIN -->


</body>
</html>
<?php include("footer.php"); ?>