<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

  <title>add-home</title>

  

</head>
 <style>
body{
                background-color:#2c3338;
            }
            
            table{
                color: white;
                border:2px;
                border-style: solid;
                padding:12px;
                
                
            }
            
            td,tr{
                 color:#31b0d5;
                 font-size:medium;
                 padding: 5px;
            }
            h1,h3,a{ color: whitesmoke;}
            

            </style>


    <body>
      <h3 align="right" >
        <a href="index.php" >HOME<image src="image/home.png"  width="50"></a>
        <a href="userhome1.php">BACK<image src="image/back.png"  width="50"></a>
        <a href="logout.php">LOGOUT<image src="image/logout.png"  width="50"></a>   
        
      </h3>
        
        
    
        
        <?php 
        date_default_timezone_set("Asia/Calcutta");
        
        session_start();
        
        if($_SESSION['id']==""){
            
            header("location:userlogin.php");
        }
        
            $a=$_SESSION['id'];
        // die($a);
        ?>
          
          <h1 align="center"> WELCOME "<?php echo $a;  ?>" </h1> 
          
        <form name="f" method="post" action="dropbox.php" enctype="multipart/form-data">
       
            
        <table align="center" border="2">
        
            <tr><td>USER:</td><td><?php echo "".$_SESSION['id'];?></td></tr>
            <tr><td>DATE&TIME:</td><td> <?php echo date("d-m-y / h:i"); ?> </td></tr>            
            <tr><td>FILE_DESCRIPTION:</td><td> <input type="text" name="description" required/></td></tr>
            <td><input type="file" name="brows" id="brows" required/></td>
            <td><input type="file" name="brows1" id="brows1" required/></td>
        </table>
        
            
            <h4 align="center"><input type="submit" name="add" value="AddToDropbox"> </h4>
            
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
