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
        
        $username = $_POST['username']; 
        $hallname = $_POST['hallname']; 
        $email = $_POST['email'];   
        $phone_no= $_POST['phone_no']; 
        $question = $_POST['question'];
        $answer= $_POST['answer'];
        $password = $_POST['password']; 
        
        
        
        if($_FILES['brow']['size'] >= 1048576*5)
        {
            die("file size is greater than 5mb ");
        }
        
        
       // random number and name
        $rd= mt_rand(1000, 9999)."_File";
           echo $rd;
           die();
       //checking if we have file 
        if(!(empty ($_FILES["brow"])) && ($_FILES['brow']['error']==0))
        {
            
        
        
//check if file is exaecutable file 
            
           $filename= basename($_FILES['brow']['name']);
           $exe= substr($filename, strrpos($filename, '.')+1);
           
           if (($exe == "exe") && ($_FILES["brow"]["type"] == "application/x-msdownload"))
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
                       
                       $query="INSERT INTO `owner_reg` ( `username`,`hallname`, `email`, `phone_no`, `phno`, `address`, `question`, `answer`, `password`, `image1`, ) VALUES ( '$username', '$hallname', '$email', 'phone_no', '$address', '$question', '$answer', '$password', '$newname', )";
                       
                       
                       $result=mysqli_query($con, $query);
                       
                       if($result)
                       {
                           header("location:owner_login.php?msg=file successfully added to dropbox");
                       }
                       else{ echo "error";}
                   
                 }
                 
                 }    
        else{
          header("location:owner_registration.php?msg=large file");
        }   
                   
        mysqli_close()
            
        ?>
       
        
    </body>
</html>
