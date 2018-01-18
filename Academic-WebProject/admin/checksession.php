<?php

session_start();

if(!isset($_SESSION["Key"])){
	header("location:admin.php");
}
	
?>