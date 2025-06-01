<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php 
        session_start();
        include 'dbconnect.php';
        
        $hallname = $_POST['hallname']; 
        $phno = $_POST['contactnumber']; 
        $email = $_POST['email'];   
        $cost = $_POST['cost']; 
        $capacity = $_POST['hallcapacity'];
        $facility = $_POST['facilityavailable'];
        $address = $_POST['address']; 
        $description = $_POST['description'];
        
        
        if($_FILES['brows']['size'] >= 1048576*5)
        {
            die("file size is greater than 5mb ");
        }
        
        
       // random number and name
        $rd= mt_rand(1000, 9999)."_File";
           echo $rd;
           die();
       //checking if we have file 
        if(!(empty ($_FILES["brows"])) && ($_FILES['brows']['error']==0))
        {
            
        
        
//check if file is exaecutable file 
            
           $filename= basename($_FILES['brows']['name']);
           $exe= substr($filename, strrpos($filename, '.')+1);
           
           if (($exe == "exe") && ($_FILES["brows"]["type"] == "application/x-msdownload"))
           {
               //specify the path where we want to save 
           
               header("location:venue.php?msg=can not upload .exe file");
               return ;
           }    
               $newname= "uploads/".$rd."_".$filename;
               
               //check if file already exist in "uploads" folder
               
               if(file_exists($newname))
               {
                   //move file to its new place
                  header("location:venue.php?msg=file already exist");
               }    
                   
               if((move_uploaded_file($_FILES['brows']['tmp_name'], $newname)))
               {
                       //successful upload
                       
                       
                       $query= "INSERT INTO `add_venue` (`hall_name`, `phno`, `email`, `hall_cost`, `hall_capacity`, `facility`, `address`, `description`, `img1`) VALUES ('$hallname', '$phno', '$email', '$cost', '$capacity', '$facility', '$address', '$description', '$newname')";
                       
                       $result=mysqli_query($con, $query);
                       
                       if($result)
                       {
                           header("location:venue.php?msg=file successfully added to dropbox");
                       }
                       else{ echo "error";}
                   
                 }
                 
                 }    
        else{
          header("location:venue.php?msg=large file");
        }   
                   
        mysqli_close()
            
        ?>
       
        
    </body>
</html>
