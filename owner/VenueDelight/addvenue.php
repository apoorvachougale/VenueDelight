  <?php 
        session_start();
        include 'dbconnect.php';
        
       // $uname=$_SESSION['id'];
       // $filedes=$_POST['description'];
  $hallname = $_POST['hallname']; 
  $contactnumber = $_POST['contactnumber']; 
   $email = $_POST['email'];   
    $cost = $_POST['cost']; 
     $hallcapacity = $_POST['hallcapacity'];
      $facilityavailable = $_POST['facilityavailable'];
       $address = $_POST['address']; 
       $description = $_POST['description'];
  $photo = $_POST['photo'];
  // die($mobilename.''.$price.''.$model.''.$description.''.$dimension.''.$memory.''.$os.''.$sensors.''.$color.''.$battery);
        
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
            
        
        
//check if file is exaecutable file 
            

            
           $filename= basename($_FILES['brows']['name']);
          $filename1= basename($_FILES['brows1']['name']);
          $filename2= basename($_FILES['brows2']['name']);
          $filename3= basename($_FILES['brows3']['name']);
          
          $exe= substr($filename, strrpos($filename, '.')+1);
          $exe1= substr($filename1, strrpos($filename1, '.')+1);
          $exe2= substr($filename2, strrpos($filename2, '.')+1);
          $exe3= substr($filename3, strrpos($filename3, '.')+1);
           
           if (($exe == "exe") && ($exe1 == "exe") &&($exe2 == "exe") &&($exe3 == "exe") &&
            ($_FILES["brows"]["type"] == "application/x-msdownload")&&
            ($_FILES["brows1"]["type"] == "application/x-msdownload")&&
            ($_FILES["brows2"]["type"] == "application/x-msdownload")&&
            ($_FILES["brows3"]["type"] == "application/x-msdownload"))
           {
               //specify the path where we want to save 
           
               header("location:admin.php?msg=can not upload .exe file");
               return ;
           }    
               $newname= "uploads/".$rd."_".$filename;
               $newname1= "uploads/".$rd."_".$filename1;
               $newname2= "uploads/".$rd."_".$filename2;
               $newname3= "uploads/".$rd."_".$filename3;
               // die($newname);
               //check if file already exist in "uploads" folder
               
               if(file_exists($newname)&&($newname1)&&($newname2)&&($newname3))
               {
                   //move file to its new place
                  header("location:admin.php?msg=file already exist");
               }    
                   
               if((move_uploaded_file($_FILES['brows']['tmp_name'], $newname)))
               {
                if((move_uploaded_file($_FILES['brows1']['tmp_name'], $newname1)))
               {  
                 if((move_uploaded_file($_FILES['brows2']['tmp_name'], $newname2)))
               {
                if((move_uploaded_file($_FILES['brows3']['tmp_name'], $newname3)))
               {       
               //successful upload

              $query="INSERT INTO `addvenue` (`hallname`,`contactnumber`,`email`,`cost`,`hallcapacity`,`facilityavailable`,`address`,`description`,`photo`) 
              VALUES ('$hallname','$contactnumber','$email','$cost','$hallcapacity','$facilityavailable','$description','',$photo');";
                       
                       $result=mysqli_query($con, $query);
                       
                       if($result)
                       {   
                           //echo "<script> alert ('inserted'); </script>"; 
                           header("location:ownerhomepage1.php?msg=file successfully added");
                       }
                       else{ echo "error";}
                   
                 }
               }
             }
           }
         }    
        else{header("location:ownerhomepage1.php?msg=large file");}   
                   
        //mysql_close()
            
       ?> 

