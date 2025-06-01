<?php 

    include 'dashboard.php';
  session_start();
  if($_SESSION['id']==""){
            
            header("location:../index.php");
        }
      
        $a= $_SESSION['id'];
   
 ?>
 
 
  

   <!--  <div class="container">
          <div class="column"> -->
            <table class="content-table">
              <tr>
                <td></td>
              </tr>
              

            </table>
      </div>
    </div>
    
              
            </table>
      </div>
    </div>
  

    
   
<?php include 'footer.php' ?>
  </body>
</html>