
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Edit-user</title>
        <style type="text/css">
            div{
                width: 30%;
                margin: auto;
                margin-top: 4%;
                 border:4px solid #8f1537;
                 padding-bottom: 40px;
            }
            input{
                padding: 5px 30px;
                margin-bottom: 5%;
            }
            h2{
                background: #faaaaa;
                padding-top: 10px;
                padding-bottom: 10px;
                margin-right: 5%;
                margin-left: 5%;
            }
            input[type= submit]{
                background: #8f1537;
                color: #fff;
                padding: 10px 35px;
            }
            input[type= button]{
                background: #8f1537;
                color: #fff;
            }
        </style>
    </head>
     
    <body>
        
        
        <?php

                include 'dbconnect.php';
                 $query="SELECT * from user_reg where user_id='{$_GET['r']}'";
                $result=  mysqli_query($con,$query);
                $row=mysqli_fetch_assoc($result);

           ?> 
           <div>
            <h2 align="center">UPDATE YOUR DETAILS</h2>
           <?php    
        echo" 
                
                <form name='f' action='' method='post'>
                <input type='hidden' name='id' value= '{$row['user_id']}'>
                
           <table align='center'>
           <tr><td><b>Name:</b></td><td><input type='text' name='name' value='{$row ['u_name']}'/></td>
           </tr><br>
           <tr><td><b>Email:</b></td><td><input type='text' name='email' value='{$row['email']}' /></td>
           </tr><br>
           <tr><td><b>Password:</b></td><td><input type='text' name='password' value='{$row['password']}'></td>
           </tr><br>
           </table>

                <h1 align='center'><input type='submit' name='update' value='UPDATE' /> </h1>
                </form>
                
               
            "; ?>
                   <h1 align="center" style="margin-top: -5%;"> <input type="button" value="BACK" Onclick="window.location.href='display_users.php'"></input>
                 </h1>  
               </div> 
               <?php  
                if(isset($_REQUEST['update']))
                {
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $id=$_POST['id'];
                    $query="UPDATE user_reg set `u_name`='$name', `email`='$email',`password`='$password' where `user_id`='$id'";
                    $result =  mysqli_query($con,$query); 
                    if($result)
                    {
                        header("location:display_users.php");
                    }
                    else
                    {
                        echo"error";
                    }
                }
            
        ?>
         
    </body>
</html>
