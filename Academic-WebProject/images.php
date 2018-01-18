<?php
include('includes/header.php');
?>
<head>
	<title>Shubhmangal Greens- Images</title>
	<link rel="stylesheet" href="includes/3.3.7/js/bootstrap.js">
</head>

<body>
<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<h1 align="center">Images</h1>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active" align="center">
				  <img src="images/Shubhmangal1.jpeg" alt="Shubhmangal">
				</div>

				<div class="item" align="center">
				  <img src="images/Shubhmangal2.jpeg" alt="Shubhmangal">
				</div>

				<div class="item" align="center">
				  <img src="images/Shubhmangal3.jpeg" alt="Shubhmangal">
				</div>

				<div class="item" align="center">
				  <img src="images/Shubhmangal4.jpeg" alt="Shubhmangal">
				</div>
				<div class="item" align="center">
				  <img src="images/Shubhmangal5.jpeg" alt="Shubhmangal">
				</div>
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			 </a>
			 <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			 </a>
		</div>
	</div>
	<div class="col-md-2">
	</div>
</div>
<div style="padding-bottom:60px";>
</div>
</body>
<?php
include('includes/footer.php');
?>