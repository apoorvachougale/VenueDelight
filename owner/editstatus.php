<?php
error_reporting(0);
include("dbconnect.php"); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>User Order </title>
    <link rel="stylesheet" href="adm_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>





<body>



    <div class="wrapper" style="    width: 25%;
    margin: auto;
    margin-top: 10%;
    border:2px solid black;
    ">

        <div class="form-container">
    
            <div class="form-inner">

    <style>
    a{
        text-decoration:none ;

    }  

    .bbb{
        width: 100% !important;
    }

    </style>

<form class="w3-container"  method="GET" enctype="multipart/form-data">
<h2 class="w3-text-brown">Change Update</h2>

    <p>      
    <label class="w3-text-brown"><b>Order Id</b></label>
    <input class="w3-input w3-border w3-sand" name="pi" type="text" readonly  value="<?php echo $_GET['o']?>" required></p>
   <p>


<p>
    <label class="w3-text-brown"><b>Status</b></label>
    <select name="pn">
       <option value="Booking Confirmed Click And Pay">Booking Confirmed</option>
       <option value="Sorry Booking Not Available">Booking Cancelled</option>
   </select>
</p>

</p>
        
        <?php 

                    $a = $_GET['ta'];

                    // echo $a;

        ?>
    <label class="w3-text-brown"><b>Payment</b></label>

   <select name="pl">
       <option value="">Disable</option>
       <option value="./payment_using_php/nnnn.php?gt=<?php echo $a ?>">Enable</option>
   </select>
</p>

    <input class="w3-btn bbb w3-brown " type="submit" name="submit" value="Update"><br><br>
    <!-- offer button-->

    <a href="notifications.php"><button class="w3-btn bbb w3-brown">Back</a></button><br><br>

</form>


<!-- php code *************************************** -->

<?php                          

    include("dbconnect.php");

if($_GET['submit']){

    $pid = $_GET['pi'];
    $ppnn = $_GET['pn'];
    $ppll = $_GET['pl'];



    $query = "UPDATE booking_order SET status='$ppnn' ,payment_link='$ppll' WHERE order_id ='$pid' ";

    $data = mysqli_query($con, $query);

    if($data){
        // echo "<br> <font color= green>Record Updated successfully. <a href='display.php'> Updates list</a>";
        // echo "<script>alert('Successfully Updated')</script>";

        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Send Successfully');
        window.location.href='notifications.php';
          </script>");
        
    }
    else{
        // echo "<br> <font color= red>Record Not Updated <a href='display.php'> Updates list</a>";
        echo "<script>alert('Failed')</script>";
    }
}
else{
    // echo "<br><font color='blue'>Click on Update button to save the changes";
}


?>

            </div>
        </div>
    </div>

</body>

</html>