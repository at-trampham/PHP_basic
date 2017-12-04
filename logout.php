<?php
session_start();
if(isset($_SESSION['user_info'])){
	session_destroy();
		header ("LOCATION:login.php");
    	exit();
  }
?>