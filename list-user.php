<?php include('dbconnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Users List</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	
	<div class='alignCenter'>
	
	<?php
	//Phân trang
	$recordPerPage = 3;
	if(isset($_GET['page'])){
		$current_page=$_GET["page"];
	}else{
		$current_page=1;
	}
	
	$offset=($current_page-1)*$recordPerPage;
	$sql="SELECT COUNT(id) as numrow FROM users";
	$exe = $conn->prepare($sql);
    $exe->execute();
	$numrow=$exe->fetchColumn();
	$numpage=ceil($numrow/$recordPerPage);

	$sql = "SELECT * FROM users LIMIT $offset,$recordPerPage";
	$exe = $conn->prepare($sql);
    $exe->execute();
	$exe->setFetchMode(PDO::FETCH_ASSOC);
	
	?>
	<h4>USERS LIST</h4>
	<table>
	  <tr>
	    <th>Numbers</th>
	    <th>Username</th>
	    <th>Fullname</th>
	    <th>Email</th>
	    <th>Image</th>
	  </tr>
	  <?php
	  while($users = $exe->fetch()){
	  	$iduser=$users['id'];
	  	$username=$users['username'];
	  	$fullname=$users['fullname'];
	  	$email=$users['email'];
	  	$image=$users['image'];
	   ?>
	  <tr>
	    <td><?php echo $iduser ?></td>
	    <td><?php echo $username ?></td>
	    <td><?php echo $fullname ?></td>
	   <td><?php echo $email ?></td>
	    <td>
	    	<?php 
	  		if($image!=''){
	  		$path_url='Images/'.$image;
	    	?>
	    	<img src="<?php echo $path_url ?>" width='30px' height='30px'>
	    	<?php 
	    	}
	    	else{
	    		echo 'No image';
	    	}
	    	?>

	    </td>
	  </tr>
	  <?php 
		}
	  ?>
	</table>
	<br>
	<div>
	<?php
	for ($i=1; $i <= $numpage ; $i++) { 
		echo "<a href='list-user.php?page=$i'>Trang $i</a>-";
	}
	?>
	</div>
	<h3><a href="logout.php">LOGOUT</h3>
</div>
</body>
</html>