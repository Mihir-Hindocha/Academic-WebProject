<?php
$e=$_POST["email"];

$con = mysqli_connect("localhost", "root", "", "admin");
				if ($con == false) {
					mysqli_error($con);
					exit();
				}
				$qr="update inquiry set status = 'Booked' where email = '$e'";
				$r=mysqli_query($con,$q);


mysqli_close($con);
>