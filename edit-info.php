<?php 
session_start();
ob_start();
include('dbconnect.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>Information</title>
  <link rel="stylesheet" type="text/css" href="form.css">
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="jquery.validate.js"></script>
</head>
<body>
<div class='alignCenter'>
  <h3>PERSONAL INFORMATION</h3>
  <?php
    if(!isset($_SESSION['user_info'])){
      header ("LOCATION:login.php");
      exit();
    }else{
      $iduser=$_SESSION['user_info'][0]['idusers'];
      $user=$_SESSION['user_info'][0]['username'];
      $pass=$_SESSION['user_info'][0]['password'];
      $fullname=$_SESSION['user_info'][0]['fullname'];
      $email=$_SESSION['user_info'][0]['email'];
      $img=$_SESSION['user_info'][0]['image'];
  ?>
  <form id="form" action="" method="post" enctype="multipart/form-data">
    <label>Username:</label><br>
    <input class='' type="text" name="username" value="<?php  echo $user ?>"><br>
    <label>Password:</label><br>
    <input type="password" name="password" value=""><br>
    <label>Fullname:</label><br>
    <input type="text" name="fullname" value="<?php  echo $fullname ?>"><br>
    <label>Email:</label><br>
    <input type="email" name="email" value="<?php  echo $email ?>"><br>
    <label>Your image:</label><br>
    <?php 
    if($img!=''){
      $path_url='Images/'.$img;
    ?>
    <img src="<?php echo $path_url ?>" width='80px' height='80px' ><br>
    <?php 
    }
    ?>
    <input type="file" name="pic"><br>
    <input class='signup' type="submit" name="submit" value="Edit">
    <p><a href='javascript:history.go(-1)'>Quay lại</a></p>
  </form>
  <?php
    }
    if(isset($_POST['submit'])){
      $username=$_POST['username'];
      $password=$_POST['password'];
      $fulln=$_POST['fullname'];
      $mail=$_POST['email'];
      $picture=$_FILES['pic']['name'];
      echo $picture;
      if($picture==''){
         if($password!=''){
          $sql="UPDATE users SET username='$username',password='$password',fullname='$fulln',email='$mail' WHERE idusers='$iduser'";

          }else{
            $sql="UPDATE users SET username='$username',fullname='$fulln',email='$mail' WHERE idusers='$iduser'";
          }
      }else{
        $arr_exp=explode(".",$picture);
        $endfile=end($arr_exp);
        $picture="hinh-" .time().".".$endfile;
        $tmp_name=$_FILES['image']['tmp_name'];
        $path_upload='Images/'.$picture;
        move_uploaded_file($tmp_name,$path_upload);
          if($password!=''){
          $sql="UPDATE users SET username='$username',password='$password',fullname='$fulln',email='$mail',image='$picture' WHERE idusers='$iduser'";

          }else{
            $sql="UPDATE users SET username='$username',fullname='$fulln',email='$mail',image='$picture' WHERE idusers='$iduser'";
            }
        }
      // $update_count = $conn->prepare($sql);
      // $update_count->execute();
        echo $sql;
      
    }
  ?> 
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#form").validate({
      rules:{
        username:{
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
ob_end_flush()
?>