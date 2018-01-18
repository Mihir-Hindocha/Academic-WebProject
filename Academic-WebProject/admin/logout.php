<?php
session_start();

unset($_SESSION["Key"]);
session_destroy();
header("location:admin.php");
?>