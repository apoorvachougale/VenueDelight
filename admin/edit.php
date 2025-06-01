<?php 

  include 'dashboard.php';
  session_start();
   
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue-Delight</title>
    <link rel="stylesheet" href="css/new.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <!-- fa icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
  <body>
    <div class="sidebar">
    <div class="profile_info">  
    </div>
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="about.php"><i class="far fa-address-card"></i><span>About Project</span></a>
        <a href="display_owner.php"><i class="fa fa-user"></i><span>Registered Owners</span></a>
        <a href="display_users.php" ><i class="fa fa-user"></i><span>Registered Users</span></a>
        <a href="all_venue.php"><i class="far fa-building"></i><span>All Venue</span></a>
        <a href="all_booking.php"><i class="fas fa-book"></i><span>All Bookings</span></a>
    </div>


     <?php
                include 'dbconnect.php';
                $query="select * from tbl_user where name='{$_GET['r']}'";
                $result=  mysqli_query($con,$query);
                $row=mysqli_fetch_assoc($result);
                
                echo"
                <form name='f' action='' method='post' onsubmit='javascript:return validation();'>
                <table align='center' border='2'>
                <tr><td>name:</td><td><input type='text' name='name' value='{$row['name']}'/></td></tr>
                <tr><td>email:</td><td><input type='text' name='email' value='{$row['email']}' /></td></tr>
                <tr><td>contact:</td><td><input type='text' name='contact' value='{$row['contact']}'  /></td></tr>
                </table>
                <h1 align='center'><input type='submit' name='sub' value='update' /> </h1>
                </form> 
                ";
                
                if(isset($_REQUEST['sub']))
                {
                    $query="update tbl_user set name='{$_POST['name']}', email='{$_POST['email']}',contact='{$_POST['contact']}' where name='{$_POST['name']}'";
                    $result=  mysqli_query($query); 
                    if(mysqli_affected_rows()>0)
                    {
                        header("location:displayuser.php");
                    }
                    else
                    {
                        echo"error";
                    }
                }
        ?>
        <h1 align="center"> <input type="button" value="back" Onclick="window.location.href='displayuser.php'"></input>
        </h1>   


    <script lang="javascript">
        function validation()
        {
            
            
               var cont=document.f.contact.value;
            if(isNaN(cont) || cont.length<10)
                {
                    
                    alert("invalid contact");
                
                    return false;    
                }
                return true;
        }

    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>