<?php
$f=$_POST["flatno"];
$n=$_POST["name"];
$a=$_POST["address"];
$p=$_POST["phone"];
$e=$_POST["email"];
$c=$_POST["comments"];

$con= @mysqli_connect("localhost", "root", "", "admin");
if($con==false)
{
    echo"Connection Fails";
}
$q="insert into inquiry(flatno,status,name,phone,email,address,question,time) values('$f','Pending','$n','$p','$e','$a','$c',NOW())";
$r=@mysqli_query($con,$q);
if($r)
{
    header("location:../contact.php");
}
else
{
    echo mysqli_error($con);
    echo'<br>Query:'.$q;
}
mysqli_close($con);
?>

