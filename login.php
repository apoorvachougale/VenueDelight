

<div id="id02" class="modal">
      <div class="container2">
      <div class="cardd">
      <div class="inner-box"  id="card1">
    
      <div class="card-front">

    <header>SIGN IN</header>
    <span onclick="document.getElementById('id02').style.display='none'" class="close1" title="Close Modal">×</span>
    <form class="modal-content-animate" name="f1" method="POST" action="log.php">

         <div class="field email">
         <div class="input-area">
          <input type="text" placeholder="Enter Email Id" name="email">
          <i class="icon fa fa-user"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
      <div class="error error-txt">Email can't be blank</div>
      </div>


      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Password" name="password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>


      <div class="pass-txt"><a href="forgot.php">Forgot password?</a></div>
      <input type="submit" value="Login" name="sub1" >
    </form>
    <div class="sign-txt">Not a member? <a href="#"  onclick="openRegister()">Signup now</a></div>
  
   </div>



  <div class="card-back">
    <header>SIGN-UP</header> 
    <span onclick="document.getElementById('id02').style.display='none'" class="close1" title="Close Modal">×</span>
    <form class="modal-content-animate" name="f" method="POST" action="reg.php">
       <div class="error error-text"></div>
      
      <div class="field username">
         <div class="input-area">
          <input type="text" placeholder="Username" name="username" required>
          <i class="icon fa fa-user"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
      
      </div>

      <div class="field email">
         <div class="input-area">
          <input type="text" placeholder="Email Address" name="email" required>
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
     </div>




      <div class="field question"> 
        <div class="input-area">
             <select name="question" id="question1"> 
             <option value="#">------Security Question ------ </option>
             <option value="Who is your favorite actor">Who is your favorite actor?</option>
             <option value="Which is your favorite movie">What is your favorite movie?</option>
             <option value="What is your pet Name">What is your pet Name?</option>
             <option value="Which is your favorite social media plaform">What is your favorite food?</option>
          </select>
           </div>

           <div class="field answer">
           <div class="input-area">
              <input type="text" name="answer" placeholder="Answer" required="true"/>
           
           
            </div>
          </div>


      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Password" name="password" 
          onkeyup="active()"  id="paswrd_1" required>
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <!-- <div class="error error-txt">Password can't be blank</div> -->
      </div>

      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="confirm password"  name="confirm_password" onkeyup="active_2()" id="paswrd_2" disabled> 
          <i class="icon fas fa-lock"></i>
         <div class="show1">SHOW</div>
        </div>
       <!--  <div class="error error-txt">Password can't be blank</div> -->
      </div>


      
      <button type="submit" value="Register" name="sub" disabled>REGISTER</button> 
    </form>
    
    <div class="sign-txt">I've an account <a href="#"  onclick="openLogin()">Sign-in now</a></div>
  </div>
</div>

</div>
</div>




 <script>
     

/*-----------------------*/

 var card1=document.getElementById("card1");
        function openRegister()
        {
            card1.style.transform="rotateY(-180deg)";

        }

        function openLogin()
        {
            card1.style.transform="rotateY(0deg)";
            
        }




        var modal = document.getElementById('id02');
 
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }





      


    </script> 