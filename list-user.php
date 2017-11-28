<?php include('dbconnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Users List</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<div class='alignCenter'>
	<?php
	$sql = "SELECT * FROM users";
	$exe = $conn->query($sql);

	$exe->setFetchMode(PDO::FETCH_ASSOC);
	//$resultSet = $exe->fetchAll();
	// print_r($resultSet);
	?>
	<h3>USERS LIST</h3>
	<table>
	  <tr>
	    <th>Numbers</th>
	    <th>Username</th>
	    <th>Fullname</th>
	    <th>Email</th>
	    <th>Image</th>
	  </tr>
	  <?php
	  while($resultSet = $exe->fetch()){
	  	$idusers=$resultSet['idusers'];
	  	$username=$resultSet['username'];
	  	$fullname=$resultSet['fullname'];
	  	$email=$resultSet['email'];
	  	$image=$resultSet['image'];
	  	// if($image!=''){
	  	// 	$path_url='Images/'.$image;
	  	// }else{
	  	// 	$path_url='Khong co hinh';
	  	// }
	   ?>
	  <tr>
	    <td><?php echo $idusers ?></td>
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
	    		echo 'Khong co hinh';
	    	}
	    	?>

	    </td>
	  </tr>
	  <?php 
		}
	  ?>
	</table>
</div>
</body>
</html>