<!DOCTYPE html>
<html>
<head>
	<title>Chat Design</title>

	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		.me {border:1px solid blue;padding: 8px;}
		.frnd{border:1px solid red;padding: 8px;}

	</style>
</head>
<body>
 <div class="container">
 	<?php
	 session_start();
  	$name = $_SESSION['name'];
	 include 'db.php';
$query = "SELECT * FROM chat ORDER BY id ASC";

	$run = $db->query($query);

	while ($row = $run->fetch_array()) :

		if ($name == $row['name'])
		{
			?>
				<div class="col-md-12 float text-left me">
					<p><?= $row['msg']?></p>
				</div>
				<div class="col-md-12" style="height:10px;"></div>
			<?php
		}
		elseif ($name !== $row['name']) {
		?>
				<div class="col-md-12 float text-right frnd">
					<p><?= $row['msg']?></p>
				</div>
				<div class="col-md-12" style="height:10px;"></div>
				<?php
			}
	endwhile;
	/*if ($name)
	{
		?>
			<div class="col-md-12 float text-right me">
				<p><?= $name?></p>
			</div>
			<div class="col-md-12" style="height:10px;"></div>
		<?php
	}
	else
	{
		?>
			<div class="col-md-12 float text-left frnd">
					<p>hii</p>
			</div>
			<div class="col-md-12" style="height:10px;"></div>
		<?php
	}
	*/
	?>

</div>
</body>
</html>
