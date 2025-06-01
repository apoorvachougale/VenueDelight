
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
        
        <?php
                include 'dbconnect.php';
                $query="SELECT * from contact where id='{$_GET['r']}'";
                $result=  mysqli_query($con,$query);
                $row=mysqli_fetch_assoc($result);
               
                
                if($result)
                {
                    
                    $query="DELETE from contact where id='{$_GET['r']}'";
                    $result=  mysqli_query($con,$query); 
                    if($result)
                    {
                        header("location:customer_query.php");
                    }
                    else
                    {
                        echo"error";
                    }
                }
        ?>
        <h1 align="center"> <input type="button" value="back" Onclick="window.location.href='customer_query.php'"></input>
        </h1>   
    </body>
</html>
