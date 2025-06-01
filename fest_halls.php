<?php include("header1.php") ?>




    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

       <!--  <ol>
          <li><a href="index.html">Home</a></li>
          <li>Blog</li>
        </ol> -->
        <h2>Fest Halls</h2> 

      </div>
    </section><br>
<?php
    include "dbconnect.php";
    $query = "SELECT * from `fest_hall`";
    $result = mysqli_query($con, $query);
    while($row= mysqli_fetch_array($result))
    {


?>
<div class="card item-rooms m-sm-3" style="border-radius:30px; box-shadow: 5px 5px 5px 5px #888888;" >
							<div class="card-body">
								<div class="row" >
								
								<div class="col-sm-4 ">
									<img  width="200" height="250"src="owner/<?php echo "{$row['image1']}"?>">
								</div>

								<div class="col-sm-5 pl-md-4  text-justify" height="100%">
									<h4>PRICE:<b><?php echo $row['cost'];?></b><span> / per day</span></h4>

									<h4>HALL CAPACITY:<b><?php echo $row['hallcapacity'];?></b></h4>
									<h4>NAME:<b><?php echo $row['hallname'];?></b></h4>
									<h4>ADDRESS:<b><?php echo $row['address'];?></b></h4>
								</div>
								<div class="col-sm-3 " style="background:linear-gradient(#e37070,#8f1537">
									 <a href="fest_detail.php?owner=<?php echo $row['owner_id'] ?>"><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn m-5 " type="button">View Now</button></a>
								</div>
                                 

								

								
								

								</div>

							</div>

							</div>
							<br>
						</div>
						<?php
							}	
						?>

						</section>

<section class="footer">
	<?php include("footer.php")?>
	
</section>