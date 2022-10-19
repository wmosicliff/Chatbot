<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	 <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

/* Robin was here!*/

<body>
<?php include 'db.php';?>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
        <h1 style="margin-left:20px;"><span class="glyphicon glyphicon-user"></span>&nbsp;Login</h1>
      </div>

      <div class="modal-body">
          <form class="form col-md-12 col-sm-6 center-block" method="POST" action="">
            <div class="form-group">
              <input class="form-control input-lg" placeholder="Name" type="text" name="name">
            </div>

            <div class="form-group">
              <input class="form-control input-lg" placeholder="Password" type="password" name="pass">
            </div>

            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" name="submit"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Sign In</button>
              <!--<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>-->
            </div>

            <div class="form-group">
              <!-- <button class="btn btn-primary btn-success btn-lg btn-block"><span class="glyphicon glyphicon-user"></span>&nbsp;Register</button> -->
              <a href="register.php" class="btn btn-primary btn-success btn-lg btn-block"><span class="glyphicon glyphicon-user"></span>&nbsp;Register</a>
            </div>
          </form>
      </div>

      <div class="modal-footer">
          <div class="col-md-12">
          <!-- <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button> -->
		  </div>
      </div>
  </div>
  </div>
</div>

<div class="container-fluid text-center">
<!-- <h2>Login</h2> -->
	<form method="POST" action="login.php">
	<!-- <input type="text" name="name" required><br>
	<input type="password" name="pass" required><br><br>
	<input type="submit" name="submit" value="send"> -->
	</form>
</div>

<?php
session_start();
if (isset($_POST['submit']))

{
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$query = "SELECT * FROM login WHERE username = '$name' && password = '$pass'";
	$run = $db->query($query);
	if ($run->num_rows > 0)
	{
		$_SESSION['name'] = $name;
		$query2 = "UPDATE login SET status = '1' WHERE username = '$name' && password = '$pass'";
		$run2 = $db->query($query2);
		header('location:index.php');
	}
	else
	{
		echo "errror";
	}
}

?>
//Robin was here.
</body>
</html>
