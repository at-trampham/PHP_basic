<?php 

  try {
     
     $conn = new PDO('mysql:host=localhost;dbname=account','maitram', 'maitram');     
  } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }
?>