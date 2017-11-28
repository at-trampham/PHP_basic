<?php 
ob_start();
include('dbconnect.php'); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="form.css">
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="jquery.validate.js"></script>

</head>
<body>
<div class='alignCenter'>
  <?php
    if(isset($_POST['submit'])){
      $username=$_POST['username'];
      $password=$_POST['password'];
      $fullname=$_POST['fullname'];
      $email=$_POST['email'];
      $picture=$_FILES['image']['name'];
      if($picture==''){
         $sql="INSERT INTO users(username, password, fullname, email) VALUES('$username','$password','$fullname','$email')";
      }else{
        $arr_exp=explode(".",$picture);
        $endfile=end($arr_exp);
        $picture="hinh-" .time().".".$endfile;
        $tmp_name=$_FILES['image']['tmp_name'];
        $path_upload='Images/'.$picture;
        move_uploaded_file($tmp_name,$path_upload);
       $sql="INSERT INTO users(username, password, fullname, email,image) VALUES('$username','$password','$fullname','$email','$picture')";
      }
      $insert_count = $conn->exec($sql);
      if($insert_count){
        header ("LOCATION:login.php");
            exit();
      }else{
        echo 'Register fail';
      }
    }
  ?>
  <h3>REGISTERS</h3>
  <form id='form' action="" method="post" enctype="multipart/form-data">
    <label>Username:</label><br>
    <input class='' type="text" name="username" value=""><br>
    <label>Password:</label><br>
    <input type="password" name="password" value=""><br>
    <label>Fullname:</label><br>
    <input type="text" name="fullname" value=""><br>
    <label>Email:</label><br>
    <input type="email" name="email" value=""><br>
    <label>Your image:</label><br>
    <input type="file" name="image"><br>
    <input class='signup' type="submit" name="submit" value="Submit">
  </form>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#form").validate({
      rules:{
        username:{
          required:true,
            
          },
        password:{
          required:true,
          
        },
        fullname:{
          required:true,
          
        },
        email:{
          required:true,
          
        },
          
        },
      messages:{
        username:{
          required:"<span style=color:red><strong>Không được để trống.</strong></span>"
          
        },
        password:{
          required:"<span style=color:red><strong>Không được để trống.</strong></span>"
          
        },
        fullname:{
          required:"<span style=color:red><strong>Không được để trống.</strong></span>"
          
        },
        email:{
          required:"<span style=color:red><strong>Không được để trống.</strong></span>"
          
        },
      }
    });
  });
</script>
</body>
</html>
<?php
ob_end_flush(); 
?>