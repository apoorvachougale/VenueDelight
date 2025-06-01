<?php 

  include 'dashboard.php';
  session_start();
  if($_SESSION['id']==""){
            
            header("location:../index.php");
        }
      
        $a= $_SESSION['id'];
   
 ?>


 <style>
  a{
    text-decoration: none;
    color:black;
  }
  
</style> 

    <table class="content-table" >
    <thead>
      <tr>
        <th>Id</th>
        <th>Ownername</th>
        <th>Email</th>
        <th>Contact</th>
        <!-- <th>Address</th> -->
        <!-- <th>Aadhar</th>
        <th>License</th> -->
        <th>Delete</th>
      </tr>
    </thead>
    
     <?php 
        
        include 'dbconnect.php';
        
        $query="SELECT * from owner_reg";
        $result= mysqli_query($con,$query);
        
        
        ?>
    
      <?php 
            while($row=mysqli_fetch_assoc($result))
            {?>
            <tr>
                
                 <td><?php echo "{$row['owner_id']}"?></td>
                 <td><?php echo "{$row['username']}"?></td>
                 <td><?php echo "{$row['email']}"?></td>
                 <td><?php echo "{$row['phno']}"?></td>
                 
                  <!-- <td > <img src="<?php echo "{$row['image']}"?>" height="70" width="70"></td> -->
                  <!-- <td ><img src="<?php echo "{$row['image2']}"?>"  height="70" width="70" ></td> -->
                  <td> <a href="delete_owner.php?r=<?php echo "{$row['owner_id']}" ?>" onclick="return confirm('Are you sure?')"> <i class="fa fa-trash-o" style="font-size:24px;color:red"></i></a></td>
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