
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
        

        
        if (isset($_POST['submit'])){
         $username=$_POST['username'];
        $hallname=$_POST['hallname'];
        $email=$_POST['email'];
        $ph_no=$_POST['ph_no'];
        $password=$_POST['password'];
       $question=$_POST['question'];
       $answer=$_POST['answer'];


        $id_proof = $_FILES['id_proof'];
        $filename1 = $id_proof['name'];
        $filepath1 = $id_proof['tmp_name'];
        $fileerror1 = $id_proof['error'];

        // you have to create a folder as 'tmp_imgs' where your file is exists
        if ($fileerror1 == 0) {
          $destfile1 = 'tmp_imgs/' . $filename1;
          move_uploaded_file($filepath1, $destfile1);
        } 

        $voter_id = $_FILES['license'];
        $filename2 = $voter_id['name'];
        $filepath2 = $voter_id['tmp_name'];
        $fileerror2 = $voter_id['error'];

        if ($fileerror2 == 0) {
          $destfile2 = 'tmp_imgs/' . $filename2;
          move_uploaded_file($filepath2, $destfile2);
        }


        // destfile is your path with file name which you are uploading
      $insertquery ="INSERT INTO `owner_reg` (`username`,`hname`, `email`, `phno`, `question`, `answer`,`password`,`image`,`image2`)VALUES ('$username','$hallname', '$email','$ph_no', '$question', '$answer', '$password','$destfile1','$destfile2')";
    
    $iquery = mysqli_query($con, $insertquery);

    if ($iquery) 
         {
          ?><script type="text/javascript">
            alert("Registered successfully");
            //header("location:/owner_login.php");
                   //header("location:owner_login.php?msg=file successfully added to dropbox");
                   echo "<meta http-equiv=Refresh content=0.1;url=owner_login.php?>";

            </script>
            <?php  header("location:owner_login.php");  }
       else{
         ?><script type="text/javascript">
            alert("not successfully");
                   // header("location:owner_.php?msg=file successfully added to dropbox");
            </script>
            <?php 
      }
 
}

?>