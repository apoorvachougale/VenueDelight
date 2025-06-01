<?php 

session_start();

?><!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body>

<?php
include("dbconnect.php");


if (isset($_POST['submit'])){
  $name = mysqli_escape_string($con, $_POST['name']);
  
        $id_proof = $_FILES['id_proof'];
        $filename1 = $id_proof['name'];
        $filepath1 = $id_proof['tmp_name'];
        $fileerror1 = $id_proof['error'];

        // you have to create a folder as 'tmp_imgs' where your file is exists
        if ($fileerror1 == 0) {
          $destfile1 = 'tmp_imgs/' . $filename1;
          move_uploaded_file($filepath1, $destfile1);
        } 

        $voter_id = $_FILES['voter_id'];
        $filename2 = $voter_id['name'];
        $filepath2 = $voter_id['tmp_name'];
        $fileerror2 = $voter_id['error'];

        if ($fileerror2 == 0) {
          $destfile2 = 'tmp_imgs/' . $filename2;
          move_uploaded_file($filepath2, $destfile2);
        }


        // destfile is your path with file name which you are uploading
      $insertquery ="INSERT INTO domicile(name,id_proof voter_id)VALUES('$name','$destfile1','$destfile2')";
    
    $iquery = mysqli_query($con, $insertquery);

    if ($iquery) {
      echo "uploaded successfully";
  }else {
    echo "error in insertion";
    }
 
}

?>
       <!-- you have to add in form this is important = enctype="multipart/form-data" -->
      <form action="" method="POST" enctype="multipart/form-data"> 
            
                <label>Name:</label>
                <input type="text" name="name" class="input-field" placeholder="Full Name" required>
                
                <label>identity proof</label>
                <input type="file" name="id_proof" class="form-control" id="" required="">                  
                 
                <label>Voter Id</label>
                <input type="file" name="voter_id" class="form-control" id="" required="">  
      </form>
</body>
</html>