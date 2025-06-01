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
  <link rel="stylesheet" type="text/css" href="assets/css/slider.css?v=<?php echo time();?>">
   <link rel="stylesheet"  href="assets/css/product_detail_design.css?v=<?php echo time();
  ?>">

  <script src="assets/js/js-image-slider.js" type="text/javascript"></script>
  <script src="assets/jquery/jquery.js"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<!-- <style>


</style> -->
  

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
          
        
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="admin_login.php">Admin</a></li>
          <!-- <li><a class="nav-link scrollto" href="admin/admin_login.php">Admin</a></li>
          <li><a class="nav-link scrollto"  href="owner_log-reg.php" >Owner</a></li> -->
          <!-- <li><a href="blog.html">Blog</a></li> -->
          
          <li><a class="nav-link scrollto" href="owner_login.php">Owner</a></li>
         <li><a href="#" class="nav-link scrollt" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">User</a></li>
          <!-- <li><a href="#" class="nav-link scrollt" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Search . Book . Relax</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Find Your Ideal Vendors At Best Prices</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
               <a href="#portfolio" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"> 
                <span >WE HAVE HALLS FOR </span>
               <i class="bi bi-arrow-right"></i> 
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200" >
          <div id="sliderFrame">
         <div id="slider" >
            
        
          

            
            <img src="assets/img/ramnath.png" class="img-fluid" />
            <img src="assets/img/adarsha1.jpg" class="img-fluid"/>
            <img src="assets/img/images (6).jpeg"class="img-fluid" >
            <img src="assets/img/malimanch3.jpg" class="img-fluid">
            <img src="assets/img/malimanch1.jpg"class="img-fluid"/> 
            <img src="assets/img/roopali1.jpg" class="img-fluid"/>
        </div>
       </div>
          <!-- <img src="assets/img/hero-img.png" class="img-fluid" alt=""> -->
        </div>
      </div>
    </div>
     <?php include("log-reg.php"); ?>

  </section><!-- End Hero -->


       
    


       <!--------------------Book now---------------------------->
         <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>You Can Book Us For</p>
          
        </header>

        <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap"><a href="categories.php">
              <img src="assets/img/wedding.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>WEDDING</h4>
                <p>HALL</p>
              </div>
            </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap"><a href="categories.php">
              <img src="assets/img/ring.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>ENGAGEMENT</h4>
                <p>HALL</p>
              </div>
            </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap"><a href="categories.php">
              <img src="assets/img/meetingh.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>MEETING</h4>
                <p>HALL</p>
              </div>
            </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap"><a href="categories.php">
              <img src="assets/img/birthday.jpg" class="img-fluid" alt="">
              <div class="portfolio-info"><a href="categories.php">
                <h4>BIRTHDAY</h4>
                <p>HALL</p>
              </div>
            </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap"><a href="categories.php">
              <img src="assets/img/clg-fest.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>COLLEGE FEST</h4>
                <p>HALL</p>
              </div>
            </a>
            </div>
          </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <a href="categories.php"><img src="assets/img/company.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>CORPORATE EVENT</h4>
                <p>HALL</p>
              </div>
            </a>
            </div>
          </div>

        

         

        </div>

      </div>

    </section>
       <!-- <div class="container" > -->
 
  <?php include("footer.php"); ?>