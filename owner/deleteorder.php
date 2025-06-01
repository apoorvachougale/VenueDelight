<?php

// file include ************************************
include("dbconnect.php");
$order_id = $_GET['order_id'];

// delete query ***********************************
$query = "DELETE FROM booking_order WHERE order_id='$order_id'";
$data = mysqli_query($con, $query);
if($data){

    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Order Deleted Successfully');
    window.location.href='notifications.php';
      </script>");
?>

<?php
}else{
    echo "<br><font  color='red'>Sorry, Delete Process failed.";
}
?>  