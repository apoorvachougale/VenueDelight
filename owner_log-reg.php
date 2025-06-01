
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
          <li><a class="nav-link scrollto" href="admin/admin_login.php">Admin</a></li>
          <li><a class="nav-link scrollto"  href="owner_log-reg.php" >Owner</a></li>
          
         <li><a href="#" class="nav-link scrollt" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">User</a></li>
          
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<br><br>
<div  id="id02" class="main-wrapper">
  
    <div class="card1-container">
        <div class="card1">
                  
            <div class="login-form">

                <div class="tit">Sign in</div>
                
                <div class="content">
                    <form method="POST" action="owner_log.php">
                        <div class="input-field1">
                            <input type="email" placeholder="Enter Email Id" name="email" > 
                        </div><br>
                        <div class="input-field1">
                            <input type="password" placeholder="Password"  name="password" required>
                        </div><br>
                        <div class="for"><center>Forgot Password?</center></div><br>
                        <div class="input-field1">
                            <button class="btn btn-submit" type="submit" name="subm2">Sign in</button>
                           
                        </div><br> 
                        <p> <center> Don't have an account ?</center></p>
                        
                         
                    

                    </form>

                  </div>

                <div class="footer">
                   
                    <!-- <button class="btn btn-rotate" id="btn-signup">Get Started</button> -->
                    <button class="btn btn-rotate" id="btn-signup">Get Started</button>
                    <!-- <a href="payment_using_php2/nnn.php" class="btn ">test</a> -->
                </div>
                   
                
            </div> <!-- end login-form panel -->
            <div class="signup-form">
              
                <div class="tit">Sign up</div>
                <div class="error error-text" ></div>
                <div class="content">
                    <form name="own"  method="POST" action="owner_reg.php">
                        <div class="input-field1">
                            <input type="text" placeholder="Username" 
                            name="username">
                        </div>

                         <div class="input-field1" >
                            <input type="Email" placeholder="Email" required name="email">
                        </div>

                         <div class="input-field1" >
                        <select name="question" id="questions"> 
                       <option value="#">------Security Question ------ </option>
                      <option value="Who is your favorite actor">Who is your favorite actor?</option>
                     <option value="Which is your favorite movie">What is your favorite movie?</option>
                     <option value="What is your pet Name">What is your pet Name?</option>
                     <option value="Which is your favorite social media plaform">What is your favorite food?</option>
                  </select>
                   </div>

                 <div class="input-field1">
          
                <input type="text" name="answer" placeholder="Answer" required="true"/>
           
                </div>
              <label>Aadhar Card</label>
                  <div class="input-field1">
          
                <input type="file" name="aadhar" placeholder="Aadhar Card" value="Aadhar Card" />
           
                </div>
                <label>Hall License</label>
                  <div class="input-field1">
          
                <input type="file" name="halllicense" placeholder="Hall License" />
           
                </div>
            

                        
                        <div class="input-field1 group">
                            <input type="password" placeholder="Password" name="password" id="pass1">
                            <span class="see-password">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M00h24v24H0z" fill="none"/>
                                    <path fill="#fff" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                </svg>

                            </span>
                        </div>


                            <div class="input-field1" >
                            <input type="password" placeholder="Confirm Password"  id="pass2" required>
                        </div>
                
                        <div class="input-field1">
                            <button class="btn btn-submit" type="submit" name="subm1" id="btn1">Sign Up</button>
                        </div>

                        
                    </form>
                    
                    
                </div>
                <div class="footer">
                   
                    <button class="btn btn-rotate" id="btn-login">I have an account</button>
                </div>
               
            </div> <!-- end signup-form panel -->
        </div> <!-- end card -->
    </div> <!-- end card-container -->
</div>

<script>

document.addEventListener('DOMContentLoaded',  (event) => {

  const rotateCard = () => {
    const cardContainer = document.querySelector('.card1-container') ;
    cardContainer.classList.toggle('rotate')
  }

  const btnSignup = document.querySelector('#btn-signup') ,
        btnLogin = document.querySelector('#btn-login')

  btnSignup.addEventListener('click', rotateCard)
  btnLogin.addEventListener('click', rotateCard)

  /*See passwod*/
  const seePassword =  () => {
    const seePwdIcon = document.querySelector('.see-password'),
          pwdInput = document.querySelector('.group input')

    seePwdIcon.addEventListener('mousedown', () => {
      pwdInput.type = 'text'
    })

    seePwdIcon.addEventListener('mouseup', () => {
      pwdInput.type = 'password'
    })

    seePwdIcon.addEventListener('mouseover', () => {
      pwdInput.type = 'password'
    })
  }

  seePassword()
})

/*------------------------Password validation--------------------------*/

      const pswrd_1 = document.querySelector("#pass1");
      const pswrd_2 = document.querySelector("#pass2");
      const errorText = document.querySelector(".error-text");
    
      const btn = document.querySelector("#btn1");
      function active(){
        if(pswrd_1.value.length >= 6){
          btn.removeAttribute("disabled", "");
          btn.classList.add("active");
          pswrd_2.removeAttribute("disabled", "");
        }else{
          btn.setAttribute("disabled", "");
          btn.classList.remove("active");
          pswrd_2.setAttribute("disabled", "");
        }
      }
      btn.onclick = function(){
        if(pswrd_1.value != pswrd_2.value){
          errorText.style.display = "block";
          errorText.classList.remove("matched");
          errorText.textContent = "Error! Confirm Password Not Match";
          return false;
        }else{
          errorText.style.display = "block";
          errorText.classList.add("matched");
          errorText.textContent = "Nice! Confirm Password Matched";
          
        }
      }
      function active_2(){
        if(pswrd_2.value != ""){
          showBtn.style.display = "block";
          showBtn.onclick = function(){
            if((pswrd_1.type == "password") && (pswrd_2.type == "password")){
              pswrd_1.type = "text";
              pswrd_2.type = "text";
              this.textContent = "Hide";
              this.classList.add("active");
            }else{
              pswrd_1.type = "password";
              pswrd_2.type = "password";
              this.textContent = "Show";
              this.classList.remove("active");
            }
          }
        }else{
          showBtn.style.display = "none";
        }
      }

</script>

 <footer id="footer" class="footer">

      <div class="container">

      <div class="copyright">
       <strong><span>Venue Delight</span></strong>
        
      </div>

     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
     

    var card=document.getElementById("card");
        function openRegister()
        {
            card.style.transform="rotateY(-180deg)";

        }

        function openLogin()
        {
            card.style.transform="rotateY(0deg)";
            
        }




        var modal = document.getElementById('id01');
 
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

    
  /*contact page script */
  
  const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});

</script>


</body>

</html>



