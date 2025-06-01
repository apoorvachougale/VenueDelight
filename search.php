<?php
include 'dbconnect.php';
$name = $_REQUEST['name'];

$query = "SELECT * from wedding_hall where hallname like '%" . $name . "%'";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($result)) {



} 


?>