<!DOCTYPE html>
<html>
<head>
    <title>Confirm Password!</title>
     <link rel="stylesheet" type="text/css" href="forgot_page.css">
</head>

<?php
session_start();
include 'dbconnect.php';
$e=$_POST['email'];


$sql="select * from user_reg where email='$e'";


$result= mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
//$n="{$row['firstname']}";
 if($e==$row['email'])
 {   
?>

<body>


<form class="login" action="confirm_email.php" method="POST" name="f2">
   <input type="text" name="question" class="em" value="<?php echo $row['question']; ?>" readonly>
   <input type="text" name="answer" placeholder="Answer"  class="em">
   <input type="hidden" name="email"  class="em" value="<?php echo $e; ?>">	 
   
  
  <button name="fsub"  value="submit">SUBMIT</button>

</form>

<?php 
}

else{ 
  echo"<script> alert ('error'); </script>";
}
?>
</html>