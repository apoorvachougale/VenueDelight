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
     <link rel="stylesheet" type="text/css" href="new.css">
    <body>
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
    </script>
        
        <?php
                include 'dbconnect.php';
                $query="select * from user_reg where name='{$_GET['r']}'";
                $result=  mysqli_query($con, $query);
                $row=mysqli_fetch_array($result);
                
                
                if($result)
                {
                    $query="delete from user_reg where name='{$_GET['r']}'";
                    $result=  mysqli_query($con, $query); 
                    if(mysqli_affected_rows()>0)
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
