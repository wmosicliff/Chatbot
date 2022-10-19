<?php
session_start();

include_once('db.php');
$uname = $_SESSION['name'];

	?>

<!DOCTYPE html>
<html>
<head>
	  <title>ChatApp</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <style type="text/css">
		.me {border:1px solid blue;padding: 8px;}
		.frnd{border:1px solid green;padding: 8px;}

	</style>  
	<script type="text/javascript">
	function ajax()
	{
		var req = new XMLHttpRequest();

		req.onreadystatechange = function()
		{
			if (req.readyState == 4 && req.status == 200 ) 
			{
				document.getElementById('chat').innerHTML = req.responseText;
			}
		}

		req.open('POST','chat.php',true);
		req.send();
	}

	setInterval(function(){ajax()},500);
	</script>
	<style type="text/css">

	</style>
</head>
<body onload="ajax()">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">ChatApp</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <!-- <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li>  -->

      </ul>
      <?php
      if ($uname) 
      {
      	?>
      		<ul class="nav navbar-nav navbar-right">
		        <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
		        
		    </ul>
		<?php    
      }
      else{


      ?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="register.php.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      <?php }?>
    </div>
  </div>
</nav>

   
<div class="container">
	<div class="text-right">Welcome <?= $uname?></div>
	<div class="col-md-12" style="height: 20px;"></div>
	<!-- <div class="row" style="background-color:#e7e7e7;padding:3px;"> -->
	<!-- <a href="logout.php">Logout</a>  -->
		<div id="chat"></div>	
	


<?php
	
	
if (isset($uname)) 
{
	?>
	<br>
	<div class="row text-center">
		<form method="POST" action="index.php">
		<input type="hidden" name="name" value="<?php echo $uname;?>" id="NAME"><br>
		<textarea name="msg" id="MSG" class="col-sm-12"></textarea><br>
		<!-- <input type="text" name="msg" id="MSG" required><br> -->
		<div class="col-md-12" style="height: 30px;"></div>
		<button type="button" class="btn btn-primary" onclick="fun()">Send</button>
		</form>
	</div>
</div>
<?php
}
else
{
	header('location:login.php');
}
?>


<?php
if (isset($_POST['submit'])) 
{
	/*$name = $_POST['name'];
	$msg = $_POST['msg'];

	$insert = "INSERT INTO chat (name,msg) VALUES ('$name','$msg')";

	$run = $db->query($insert);

	if ($run) 
	{
		echo "true";
	}
	else
	{
		echo "error";
	}
*/	

}
?>
<script type="text/javascript">
	function fun()
{
    $.get('insert.php', {name : $("#NAME").val(),msg : $("#MSG").val()}, function(data) 
    {
        //here you would write the "you ve been successfully subscribed" div
        /*alert(data);*/
        $("#NAME").val() == "";
        $("#MSG").val('');

    });
}

</script>
</body>
</html>