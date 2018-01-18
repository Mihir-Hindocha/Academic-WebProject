
<!DOCTYPE html>
<html lang="en">


    <head>
        <title>Admin Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../includes/3.3.7/css/bootstrap.min.css">
        <script src="../includes/3.3.7/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../includes/3.3.7/js/bootstrap.min.js"></script>
		<style rel="stylesheet" type="text/css" >body{background-color:#84ff84}</style>
    </head>
    <body>
	<div class="container">
		<div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 align="center">Admin Login</h2>
            <form class="form-horizontal" role="form" action="adminlogin.php" method="post">
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Password:</label>                             
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
                </div>
                <div class="form-group">        
                    <div class="checkbox">
                        <label><input type="checkbox" name="reme"> Remember me</label>
                    </div>
                </div>
                <div class="form-group">        
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
		<div class="col-md-4"></div>
	</div>
    </body>
</html>
