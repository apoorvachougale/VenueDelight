<?php
 session_start();
   if($_SESSION['id']==""){
            
            header("location:../index.php");
        }
      
        $a= $_SESSION['id'];
        $owner_id = $_SESSION['owner_id'];
        // echo $a;
        // echo $owner_id;
        // die();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

     <title>Venue Details</title>
      <link rel="stylesheet" href="venue1.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

</head>
 

    <body>
        
      <div class="container">
        <a href="ownerhomepage.php"><button style="background: linear-gradient(-135deg, #8f1537, #c7004c ,#e37070);color: #fff;height: 5%;
                   width: 10%;border-radius: 5px; font-size: 20px;border:none;margin-left: 0%;">BACK</button></a>
      <div class="text">VENUE DETAILS</div>
      <form name="f" method="POST" action="dropbox2.php" enctype="multipart/form-data">
       
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="hallname" required>
               <div class="underline"></div>
               <label for="">Hall Name</label>
            </div>
            <div class="input-data">
               <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="contactnumber" required>
               <div class="underline"></div>
               <label for="">Contact Number</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="email" name="email" required>
               <div class="underline"></div>
               <label for="">Email Address</label>
            </div>
            <div class="input-data">
               <input type="text" name="cost" required>
               <div class="underline"></div>
               <label for="">Cost</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="number" name="hallcapacity" required>
               <div class="underline"></div>
               <label for="">Hall Capacity</label>
            </div>
            <div class="input-data">
               <input type="text" name="facilityavailable" required>
               <div class="underline"></div>
               <label for="">Facility Available</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="address" required>
               <div class="underline"></div>
               <label for="">Address</label>
            </div>
            <div class="input-data">
               <input type="text" name="description" required>
               <div class="underline"></div>
               <label for="">Description</label>
            </div>
          </div>
        
        
            <div class="form-row">
            <div class="input-data">
               Image1<input type="file" name="brows" id="brows" required/>
               <div class=""></div>
              <!--  <label for="">Image</label> -->
            </div>
            <div class="input-data">
              Image2<input type="file" name="brows1" id="brows1" required/>
               <div class=""></div>
              <!--  <label for="">Image</label> -->
            </div>
         </div>
          <div class="form-row">
            <div class="input-data">
               Image3<input type="file" name="brows2" id="brows2" required/>
               <div class=""></div>
              <!--  <label for="">Image</label> -->
            </div>
            <div class="input-data">
              Image4<input type="file" name="brows3" id="brows3" required/>
               <div class=""></div>
              <!--  <label for="">Image</label> -->
            </div>
         </div>
            <input type="submit" name="add" value="Add" style="background: linear-gradient(-135deg, #8f1537, #c7004c ,#e37070);color: #fff;height: 5%;
                   width: 30%;border-radius: 25px; font-size: 20px;border:none;margin-left: 20%;"> </h4>
            
   </form>
        
         <?php 
        if(isset($_GET['msg']))
        {
           // echo "<h3 align=center>status: ".$_GET['ans'];
            echo "<script lang='javascript'> alert ('{$_GET['msg']}') </script>" ;
        }
        ?>
        
        </body>
    
</html>
