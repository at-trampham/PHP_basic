<?php 
session_start();
ob_start();
include('dbconnect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			$sql="SELECT * FROM users where username='$username' AND password='$password'";
			$exe = $conn->query($sql);
			$exe->setFetchMode(PDO::FETCH_ASSOC);
			$result = $exe->fetchAll(); 
			$count=count($result);
			if($count>0){
						$_SESSION['user_info']=$result;
						header ("LOCATION:edit-info.php");
						exit();
					}else{
						$error='Sai mật khau hoặc tên đăng nhập';
					}
		}
	?>
	<h3>LOGIN</h3>
	 	<?php  if(isset($error)){
    	  	echo '<font color=red size=3 ><strong>'.$error.'</strong></font>';
    	  }
    	?>
	<form id="form" action="" method="post">
		<label>Username:</label><br>
		<input class='' type="text" name="username" value=""><br>
		<label>Password:</label><br>
		<input type="password" name="password" value=""><br>
		<input class='signup' type="submit" name="submit" value="Login">
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
					
				},
			messages:{
				username:{
					required:"<span style=color:red><strong>Không được để trống.</strong></span>"
					
				},
				password:{
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