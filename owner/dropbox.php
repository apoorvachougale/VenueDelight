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
        
        $uname=$_SESSION['id'];
        $owner_id=$_SESSION['owner_id'];

        $hallname = $_POST['hallname'];
  $contactnumber = $_POST['contactnumber'];
  $email = $_POST['email'];
  $cost = $_POST['cost'];
  $hallcapacity = $_POST['hallcapacity'];
  $facilityavailable = $_POST['facilityavailable'];
  $address = $_POST['address'];
  $description = $_POST['description'];
        
        if($_FILES['brows']['size'] >= 1048576*5)
        {
            die("file size is greater than 5mb ");
        }
        if($_FILES['brows1']['size'] >= 1048576*5)
        {
            die("file size is greater than 5mb ");
        }
        if($_FILES['brows2']['size'] >= 1048576*5)
        {
            die("file size is greater than 5mb ");
        }
        if($_FILES['brows3']['size'] >= 1048576*5)
        {
            die("file size is greater than 5mb ");
        }
        
        
       // random number and name
        $rd= mt_rand(1000, 9999)."_File";
           
       //checking if we have file 
        if(!(empty ($_FILES["brows"])) && ($_FILES['brows']['error']==0))
        {
        if(!(empty ($_FILES["brows1"])) && ($_FILES['brows1']['error']==0))
        {
        if(!(empty ($_FILES["brows2"])) && ($_FILES['brows2']['error']==0))
        {
        if(!(empty ($_FILES["brows3"])) && ($_FILES['brows3']['error']==0))
        {
            
        
        
//check if file is exaecutable file 
            
           $filename= basename($_FILES['brows']['name']);
           $filename1= basename($_FILES['brows1']['name']);
           $filename2= basename($_FILES['brows2']['name']);
           $filename3= basename($_FILES['brows3']['name']);

           $exe= substr($filename, strrpos($filename, '.')+1);
           $exe1= substr($filename1, strrpos($filename1, '.')+1);
           $exe2= substr($filename2, strrpos($filename2, '.')+1);
           $exe3= substr($filename3, strrpos($filename3, '.')+1);
           
           if (($exe == "exe") && ($exe1 == "exe") && ($exe2 == "exe") && ($exe3 == "exe") &&
            ($_FILES["brows"]["type"] == "application/x-msdownload") &&
            ($_FILES["brows1"]["type"] == "application/x-msdownload") &&
            ($_FILES["brows2"]["type"] == "application/x-msdownload") &&
            ($_FILES["brows3"]["type"] == "application/x-msdownload"))
           {
               //specify the path where we want to save 
           
               header("location:ownerhomepage.php?msg=can not upload .exe file");
               return ;
           }    
               $newname= "uploads/".$rd."_".$filename;
               $newname1= "uploads/".$rd."_".$filename1;
               $newname2= "uploads/".$rd."_".$filename2;
               $newname3= "uploads/".$rd."_".$filename3;
               
               //check if file already exist in "uploads" folder
               
               if(file_exists($newname))
               {
                   //move file to its new place
                  header("location:ownerhomepage.php?msg=file already exist");
               } 
               if(file_exists($newname1))
               {
                   //move file to its new place
                  header("location:ownerhomepage.php?msg=file already exist");
               }  
               if(file_exists($newname2))
               {
                   //move file to its new place
                  header("location:ownerhomepage.php?msg=file already exist");
               }  
               if(file_exists($newname3))
               {
                   //move file to its new place
                  header("location:ownerhomepage.php?msg=file already exist");
               }    
                   
               if((move_uploaded_file($_FILES['brows']['tmp_name'], $newname)))
               {
               if((move_uploaded_file($_FILES['brows1']['tmp_name'], $newname1)))
               {
                
               if((move_uploaded_file($_FILES['brows2']['tmp_name'], $newname2)))
               {       //successful upload
                
                if((move_uploaded_file($_FILES['brows3']['tmp_name'], $newname3)))
               {       
                       
                       $query= "INSERT INTO  `addvenue` (`hallname`, `contactnumber`, `email`, `cost`, `hallcapacity`, `facilityavailable`, `address`, `description`,`image1`,`image2`,`image3`,`image4`) values('$hallname', '$contactnumber', '$email', '$cost', '$hallcapacity', '$facilityavailable', '$address', '$description','$newname','$newname1','$newname2','$newname3')";
                       
                       $result=mysqli_query($con,$query);
                       
                       if($result)
                       {
                           header("location:ownerhomepage.php?msg=hall successfully added");
                       }
                       else{ echo "error";}
                   
                 }
                 
                 }  
                 }
                 }  
               }
             }
           }
         }
        else{header("location:ownerhomepage.php?msg=large file");}   
                   
       
            
        ?>
       
        <!-- <h3 align="center"><input type="button" value="back" Onclick="window.location.href='userhome.php'"></h3>
        <h1 align="center"><input type="button" value="logout" Onclick="window.location.href='logout.php'"></h1> -->
        
    </body>
</html>
