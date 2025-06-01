  
<?php include('header1.php')?>

   
        
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
  <!-- ======= categories Section ======= -->
 <section id="team" class="team">





        <!-- <div class="dropdown">
            <div class="default_option">Category</div>  
            <ul>
              <li><a href="index.php">Wedding</a></li>
              <li><a href="#">Engagement</a></li>
              <li><a href="#">Party</a></li>
              <li><a href="#">Meeting</a></li>
              <li><a href="#">College Fest</a></li>
            </ul>
        </div> -->
       
        
    
</div>

<br><br>
 <nav id="navbar" class="navbar" align>
        <ul>
    <li style="left:758%;"><a href="user_orders.php?ue=<?php echo $a ?>" class="getstarted" style="width:auto; ">My Bookings</a> </li> 
 </ul>

</section>

<section class="testimonials">
	<div class="imgcontainer">
		<div class="boxx">

			<div class="txt"><center>Wedding Hall</center></div>
			<a href="wedding_halls.php"><img src="assets/img/wedding1.jpg"></a>
		</div>
		<div class="boxx">
			<div class="txt"><center>engagement Hall</center></div>
			<a href="engagement_halls.php"><img src="assets/img/ring1.jpg" height="200"></a>
		</div>
		<div class="boxx">
			<div class="txt"><center>party hall</center></div>
			<a href="party_halls.php"><img src="assets/img/party.jpg"></a>
		</div>
	</div>
	<div class="imgcontainer">
		<div class="boxx">
			<div class="txt"><center>meeting Hall</center></div>
			<a href="meeting_halls.php"><img src="assets/img/meeting.png" height="200"></a>
		</div>
		<div class="boxx">
			<div class="txt"><center>College Hall</center></div>
			<a href="fest_halls.php"><img src="assets/img/clg.jpg" height="200"></a>
		</div>
	</div>

</section>

<script>
$(".default_option").click(function(){
  $(".dropdown ul").addClass("active");
});

$(".dropdown ul li").click(function(){
  var text = $(this).text();
  $(".default_option").text(text);
  $(".dropdown ul").removeClass("active");
});
</script>

<section class="footer">
	<?php include("footer.php")?>
	</section>