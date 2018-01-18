<?php include('checksession.php');?>
<body>
	<div class="container">
		<div class="col-md-2">
			<?php include("sidenav.php");?>
		</div>
		<div class="col-md-10">
			<?php
				$con = mysqli_connect("localhost", "root", "", "admin");
				if ($con == false) {
					mysqli_error($con);
					exit();
				}
				$qr = "select * from inquiry where status='Booked'";
				$r = @mysqli_query($con, $qr);
				
				if ($r) {
					echo"<h2 align='center'>Booked Flats List</h2>";
					echo"<table class=table-striped border='1' align='center'>";
					echo"<thead><tr><th>Flat Number</th><th>Name</th><th>Phone</th><th>Email</th><th>Address</th><th width=10%>Questions</th><th>Date of Booking</th><th>Update Entry</th><th>Remove Entry</th></tr></thead><tbody>";
					while ($res = mysqli_fetch_array($r)) {
						echo"<tr><td>".$res["flatno"]."</td><td>" . $res["name"] . "</td><td>" . $res["phone"] . "</td><td>" . $res["email"] . "</td><td>" . $res["address"] . "</td><td>" . $res["question"] . "</td><td>" . $res["dob"] . "</td>
						<form method='POST' action='update.php'>
									 <input type='hidden' name='email' value=".$res['email'].">
									 <td align='center'><input type='submit' class='btn btn-primary' name='update' value='update'/></td>
								</form>
						<form method='POST' action='ignore.php'>
									 <input type='hidden' name='email' value=".$res['email'].">
									 <td align='center'><input type='submit' class='btn btn-danger' name='ignore' value='Delete'/></td>
								</form></tr>";
							
					}
					echo"</tbody></table>";
				} else {
					echo mysqli_error($con);
					echo'<br>Query:' . $qr;
				}
				mysqli_close($con);
			?>
		</div>
	</div>


