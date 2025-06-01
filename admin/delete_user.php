
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
        
        <?php
                include 'dbconnect.php';
                $query="SELECT * from user_reg where user_id='{$_GET['r']}'";
                $result=  mysqli_query($con,$query);
                $row=mysqli_fetch_assoc($result);
               
                
                if($result)
                {
                    
                    $query="DELETE from user_reg where user_id='{$_GET['r']}'";
                    $result=  mysqli_query($con,$query); 
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
        <h1 align="center"> <input type="button" value="back" Onclick="window.location.href='display_users.php'"></input>
        </h1>   
    </body>
</html>
