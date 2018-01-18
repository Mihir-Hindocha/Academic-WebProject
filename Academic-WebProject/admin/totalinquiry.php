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
				$qr = "select * from inquiry order by status asc; ";

				$r = @mysqli_query($con, $qr);
				
				if ($r) {
					echo"<h2 align='center'>Total Inquiries List</h2>";
					echo"<table class=table-striped border='1' align='center'>";
					echo"<thead><tr><th>Flat Number</th><th>Status</th><th>Name</th><th>Phone</th><th>Email</th><th>Address</th>
					<th width=10%>Questions</th><th>Date of Booking</th><th>Time</th></tr></thead><tbody>";
					while ($res = mysqli_fetch_array($r)) {
						echo"<tr><td>".$res["flatno"]."</td><td>".$res["status"]."</td><td>" . $res["name"] . "</td><td>" . $res["phone"] . "</td><td>" . $res["email"] . "</td><td>" . $res["address"] . "</td><td>" . $res["question"] . "</td><td>" . $res["dob"] . "</td><td>".$res["time"]."</td>
						</tr>";
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


