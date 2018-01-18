
<html lang="en">
    <head>
        <title>Shubhmangal Greens</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="includes/3.3.7/css/bootstrap.min.css">
        <script src="includes/3.3.7/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="includes/3.3.7/js/bootstrap.min.js"></script>
        <style>
			body{
				background-color:#84ff84	
			}
            /* Remove the navbar's default margin-bottom and rounded borders */
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
                background-color:#003300;
            }
            .dropdown-menu{
                background-color:#003300;
                font-color:gray;
            }            
        </style>
    </head>
    <body>
        <div class="header">
            <div class="container-fluid">
				<img src="images/logo.png" width="100%" height="200px"></img>
			</div>
		</div>

    <nav class="navbar navbar-inverse ">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Shubhmangal Greens</img></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="project.php">TheProject</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Features
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="images.php" style="color:gray">Images</a></li>
                            <li><a href="specifications.php" style="color:gray">Specifications</a></li>
                            <li><a href="amenities.php" style="color:gray">Ameneties</a></li> 
                        </ul>
                    </li>
                    <li><a href="book.php">Booking Status</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://facebook.com/" target="_blank"><img src="images/linked in1.png"></img></a></li>
                    <li><a href="https://twitter.com/" target="_blank"><img src="images/linked in2.png"></img></a></li>
                    <li><a href="https://linkedin.com/" target="_blank"><img src="images/linked in.png"></img></a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>


