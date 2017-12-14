<?php 
	$host='localhost';
	$dbname='account';
	$username='root';
	$password='root';
  try {
     
     $conn = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);     
  } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }
?>