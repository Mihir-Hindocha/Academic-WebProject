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
				$qr = "select * from inquiry where status='Pending'";
				$r = @mysqli_query($con, $qr);
				
				if ($r) {
					echo"<h2 align='center'>Pending Inquiries List</h2>";
					echo"<table class=table-striped border='1' align='center'>";
					echo"<thead><tr><th>Flat Number</th><th>Name</th><th>Phone</th><th>Email</th><th>Address</th><th width=10%>Questions</th><th>Time</th><th>Confirm Booking</th><th>Ignore Inquiry</th><th>Update Entry</th></tr></thead><tbody>";
					while ($res = mysqli_fetch_array($r)) {
						echo"<tr><td>".$res["flatno"]."</td><td>" . $res["name"] . "</td><td>" . $res["phone"] . "</td><td>" . $res["email"] . "</td><td>" . $res["address"] . "</td><td>" . $res["question"] . "</td><td>" . $res["time"] . "</td>
						<form method='POST' action='confirm.php'>
									 <input type='hidden' name='email' value=".$res['email'].">
									 <td align='center'><input type='submit' class='btn btn-primary' name='confirm' value='Confirm' /></td>
								</form>
								<form method='POST' action='ignore.php'>
									 <input type='hidden' name='email' value=".$res['email'].">
									 <td align='center'><input type='submit' class='btn btn-danger' name='ignore' value='Ignore' /></td>
								</form>
								<form method='POST' action='update.php'>
									 <input type='hidden' name='email' value=".$res['email'].">
									 <td align='center'><input type='submit' class='btn btn-warning' name='update' value='update'/></td>
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


