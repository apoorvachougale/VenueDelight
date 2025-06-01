
<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<style>
form{
    height: 230px;
   width: 400px;
    padding: 40px;
    color: white;
    position: absolute;
    top: 50%;
    left:50%;
    transform: translate(-50%, -50%);
    background-color:#34495e;
    opacity: 0.9;
    text-align: center; 
    border-radius:24px;
}

#b{
    height:600px;
}
h1{
    color: white;
    text-transform: uppercase;
    font-size: 40px; 
    padding-bottom: 10px;
}
input[type=submit]{
    border:0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid yellow;
    padding:8px 30px ;
    outline: none;
    color: white;
    border-radius: 24px;
    transition:0.25s;
    cursor: pointer;
}
::-webkit-file-upload-button{
    background:black;
    color:white;
}
::-webkit-file-upload-button:hover{ 

   border:2px solid yellow;
}
input[type=file]{
    font-family: "Times New Roman", Times, serif;
    background-color:#3498db;
    border:1px solid black;
    border-bottom-right-radius:12px;
    border-top-right-radius:12px;
}
input[type=submit]:hover{
    color:black;
    background:yellow;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mystylesheet1.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Bharatesh Online Voting System</title>
<script src="jscript/validation.js" type="text/javascript"></script>
<div class="hero">
    <div class="nav-bar">
            <div class="nav-logo">
                <a href="index.php"><img src="css/images/whitelogobcca.png"></a>
            </div>
            <div class="nav-links" id="nav-links">
                <i class="fa fa-close" onclick="closeMenu()"></i>
                <ul>
                    <a href="index.php"><li>Home</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                    <a href="change_pass.php"><li>Change Password</li></a>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
    </div>
    <div class="vertical-bar">
        <div class="search-icons">
            <i class="fa fa-list"></i>
            <i class="fa fa-search"></i>
        </div>
        <div class="social-icons">
            <a href="https://www.facebook.com/bharateshbca" style="color: #3B5998;"><i class="fa fa-facebook"></i></a>
            <a href="https://instagram.com/bharatesh_bca?igshid=m0u0wgwhrndb" style="color: #DD2A7B;"><i class="fa fa-instagram"></i></a>
            <a href="https://api.whatsapp.com/send?phone=918792601324&fbclid=IwAR0h0Xri7HgZQOUPGEkE4zAp7_Fo6n-QihQVoyw-st6MXtdRogfnRk9E8rc" style="color: #4FCE5D;"><i class="fa fa-whatsapp"></i></a>

        </div>
    </div>

<div id="b">
    <?php
$u=$_GET['u'];

            ?>
    <form class="form-4" action="dropbox.php?u=<?php echo $u ?>" method="POST" id="fileUpload" enctype="multipart/form-data">
    <center>
        <tr class="secondrow">
            <th>
                <h1>Upload Photo</h1>
               <hr> 
            </th>
            <?php
$u=$_GET['u'];
//echo $u;
            ?>
            <br>
            <br>
            <br>
            <input type="file"  name="photo" value="pic" class="uploadfile" required="true"><br><br>
            <input type="submit" name="add_code" value="UPLOAD">
        </tr>
        </center>
    </form>
   </div>

</div>
    <script type="text/javascript">
        var show = document.getElementById("nav-links");
        function showMenu(){
            show.style.right = "0";
        }
        function closeMenu(){
            show.style.right = "-200px";
        }
    </script>
</html>    