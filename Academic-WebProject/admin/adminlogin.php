<?php
session_start();

$u=$_POST["email"];
$p=$_POST["pwd"];
$con=mysqli_connect("localhost","root","","admin");

$q="select * from admin where 1";
$r=mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($r)){
    if($row["userid"]==$u && $row["pwd"]==$p){
		$_SESSION["Key"]=$u;

        header("location:modules.php");
        break;
    }
    else{
        header("location:admin.php");
    }
}
mysqli_close($con);
?>
