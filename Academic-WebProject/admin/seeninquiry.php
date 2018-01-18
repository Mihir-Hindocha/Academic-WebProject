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
				$qr = "select * from inquiry where status='Seen'";
				$r = @mysqli_query($con, $qr);
				
				if ($r) {
					echo"<h2 align='center'>Seen Inquiries List</h2>";
					echo"<table class=table-striped border='1' align='center'>";
					echo"<thead><tr><th>Flat Number</th><th>Name</th><th>Phone</th><th>Email</th><th>Address</th>
					<th width=10%>Questions</th><th>Time</th><th>Pending</th><th>Delete</th></tr></thead><tbody>";
					while ($res = mysqli_fetch_array($r)) {
						echo"<tr><td>".$res["flatno"]."</td><td>" . $res["name"] . "</td><td>" . $res["phone"] . "</td><td>" . $res["email"] . "</td><td>" . $res["address"] . "</td><td>" . $res["question"] . "</td><td>".$res["time"]."</td>
						<form method='POST' action='pending.php'>
									 <input type='hidden' name='email' value=".$res['email'].">
									 <td align='center'><input type='submit' class='btn btn-primary' name='pending' value='Pending'/></td>
								</form>
						<form method='POST' action='delete.php'>
									 <input type='hidden' name='email' value=".$res['email'].">
									 <td align='center'><input type='submit' class='btn btn-danger' name='delete' value='Delete'/></td>
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



