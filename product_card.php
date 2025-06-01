<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Css Responsive Flexbox Cards</title>
  <style>
   
body {
  background: #fefefe;
  font-family: sans-serif;
}

.container {
  width: 90%;
  margin: 50px auto;
}
.heading {
  text-align: center;
  font-size: 30px;
  margin-bottom: 50px;
}

.row {
  display: flex;
  flex-direction: row;
  justify-content: left;
  flex-flow: wrap;
}

.card {
  width: 30%;
  background: #fff;
  border: 1px solid #ccc;
  margin-bottom: 50px;
  transition: 0.3s;
}

.card-header {
  text-align: center;
  
  background: linear-gradient(to right, #ff416c, #ff4b2b);
  color: #fff;
  width:340px;
  height:200px;
}
.card-header img {
  width:360px;
  height:200px;
  /*text-align: center;
  padding: 50px 10px;
  background: linear-gradient(to right, #ff416c, #ff4b2b);
  color: #fff;*/
}


.card-body {
  padding: 30px 20px;
  text-align: center;
  font-size: 18px;
}

.card-body .btn {
  display: block;
  color: #fff;
  text-align: center;
  background: linear-gradient(to right, #ff416c, #ff4b2b);
  margin-top: 30px;
  text-decoration: none;
  padding: 10px 5px;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.25);
}

@media screen and (max-width: 1000px) {
  .card {
    width: 40%;
  }
}

@media screen and (max-width: 620px) {
  .container {
    width: 100%;
  }

  .heading {
    padding: 20px;
    font-size: 20px;
  }

  .card {
    width: 80%;
  }
}
</style>
</head>

<body>
  
  <div class="container">
    <div class="heading">
      <h1>Wedding Halls</h1>
    </div>
    <?php
    include "dbconnect.php";
    $query = "SELECT * from `wedding_hall`";
    $result = mysqli_query($con, $query);
    while($row= mysqli_fetch_array($result))
    {


?>
    <div class="row">
      <div class="card">
        <div class="card-header">
         <img src="owner/<?php echo "{$row['image1']}"?>">
        </div>
        <div class="card-body">
          <p>
            <table>
              <tr>
                <td>Name:</td>
                <td><?php echo $row['hallname'];?></td>
              </tr>
              <tr>
                <td>Hall Capacity</td>
                <td><?php echo $row['cost'];?></td>
              </tr>
              <tr>
                <td>Location:</td>
                <td><?php echo $row['address'];?></td>
              </tr>
            </table>
            <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque molestiae eius explicabo mollitia tempore reiciendis, vel, sequi.
          </p> -->
          <a href="#" class="btn">View Hall</a>
        </div>
      </div>
      <?php

    }
      ?>
      
</body>

</html>