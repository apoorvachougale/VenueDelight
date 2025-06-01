<?php include("header.php"); ?>  
  




<br><br>



 <section id="contact" class="contact1">



  

      <div class="container" data-aos="fade-up" style="margin-right:-70px">
        <!-- <div id="container1"> 
 -->   
        <span class="big-circle1"></span>
    
      <div class="form1">
        <div class="contact1-info">
          <h3 class="title">Let's get in touch</h3>
          
          <br>
          <div class="info-box">
            
              <p class="name">ADDRESS: </p>
              <div class="information">
              <p>92 Cherry Drive Uniondale, NY 11553</p>
            </div>
            
              <p class="name"> EMAIL US:</p>
              <div class="information">
              <p>siapsa12@gmail.com</p>
            </div>
          
              <p class="name">PHONE NO:</p>
              <div class="information">
              <p>123-456-789</p>
            </div>
          </div>

        
        </div> 

        <div class="contact1-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form  class ="f1" action="contact_php_page.php" method="POST" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send"  name ="sub1" class="btn" />
          </form>
        </div>
      </div>

               
      </div>


      <!---log-reg code ----->
      <?php include("log-reg.php"); ?>


    </section>


  
  <!-- ======= Footer ======= -->
 <?php include("footer.php"); ?>