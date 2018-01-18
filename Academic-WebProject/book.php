<?php
include('includes/header.php');
?>
<head>
	<title>Shubhmangal Greens- Booking Status</title>
</head>
<body>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<?php
			$con = mysqli_connect("localhost", "root", "", "admin");
			if ($con == false) {
				mysqli_error($con);
				exit();
			}
			$qr = "select flatno,name,dob from inquiry where status='Booked' order by flatno asc";
			$r = @mysqli_query($con, $qr);
			if ($r) {
				
				echo"<h2 align='center'>Booked Flats Record</h2>";
				echo"<div style=padding-bottom:20px></div>";
				echo"<table class=table-striped width=40% align='center' border='1'>";
				echo"<thead><tr><th>Flat Number</th><th>Name</th><th>Date of Booking</th></tr></thead><tbody>";
				while ($res = mysqli_fetch_array($r)) {
					echo"<tr><td>".$res["flatno"]."</td><td>" . $res["name"] ."</td><td>". $res["dob"] . "</td></tr>";
				}
			echo"</tbody></table>";
			} else {
				echo mysqli_error($con);
				echo'<br>Query:' . $qr;
			}
			mysqli_close($con);
			?>
			<div style="padding-bottom:50px";>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
</body>
<?php
include('includes/footer.php');
?>