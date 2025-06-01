<?php 

  include 'dashboard.php';
  session_start();
  if($_SESSION['id']==""){
            
            header("location:../index.php");
        }
      
        $a= $_SESSION['id'];
   
 ?>

    <table class="content-table">
    <thead>
      <tr>
        <th>User Id</th>
       <th>Username</th>
        <th>Email</th>
        <th>Phone number</th>
        <th>Message</th>
        <th>Delete</th>
      </tr>
    </thead>
     <?php 
        
        include 'dbconnect.php';
        
        $query="SELECT * from contact_us";
        $result= mysqli_query($con,$query);
        
        
        ?>
    
      <?php 
            while($row=mysqli_fetch_assoc($result))
            {?>
            <tr>
                
                 <td><?php echo "{$row['msg_id']}"?></td>
                 <td><?php echo "{$row['username']}"?></td>
                 <td><?php echo "{$row['email']}"?></td>
                  <td><?php echo "{$row['phone']}"?></td>
                   <td><?php echo "{$row['message']}"?></td>
                 
                
                 <td> <a href="delete_contact.php?r=<?php echo "{$row['msg_id']}" ?>" onclick="return confirm('Are you sure?')"> <i class="fa fa-trash-o" style="font-size:24px;color:red"></i></a></td>
            </tr>
       <?php }?>

  </table>

    
    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
