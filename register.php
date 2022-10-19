<!DOCTYPE html>
<html>
<head>
	<title>Registeration</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'db.php';?><!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h1 style="margin-left:20px;"><span class="glyphicon glyphicon-user"></span>&nbsp;Register</h1>
      </div>
    <div class="modal-body">
          <form class="form col-md-12 col-sm-6 center-block" action="" method="POST">
            <div class="form-group">
              <input class="form-control input-lg" placeholder="name" type="text" name="name">
            </div>
    <div class="form-group">
              <input class="form-control input-lg" placeholder="Email" type="email" name="email">
            </div>
            <div class="form-group">
              <input class="form-control input-lg" placeholder="Password" type="password" name="pass">
            </div>
    <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" name="submit"><span class="glyphicon glyphicon-user"></span>&nbsp;Register</button>
              <!--<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>-->
            </div>
            <div class="col-md-12 text-right" >
            	<a href="Login.php">Already a member?</a>
            </div>
			<?php
include_once('db.php');
if (isset($_POST['submit']))
{
	# code...

 $name = $_POST['name'];
 $pass = $_POST['pass'];
 $email = $_POST['email'];
 // echo "<pre>";
 // print_r($_POST);

$sql = "INSERT INTO login VALUES ('','$name','$pass','$email')";

if ($db->query($sql) === TRUE) {
    echo "New user has been created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>

          </form>
      </div>
      <div class="modal-footer">
          <!--  -->
      </div>
  </div>
  </div>
</div>
</body>
</html>
