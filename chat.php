<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<?php
include 'db.php';
session_start();
	$name = $_SESSION['name'];
$query = "SELECT * FROM chat ORDER BY id ASC";

	$run = $db->query($query);


	while ($row = $run->fetch_array()) :

		if ($name == $row['name'])
		{
			?>
				 <div class="col-md-12 float text-right me">
					<p><?= $row['msg']?></p>
			  	</div>
			  	<div class="col-md-12" style="height:10px;"></div>
			<?php
		}
		elseif ($name !== $row['name']) {
		?>
				 <div class="col-md-12 float text-left frnd">
					<p><?= $row['msg']?></p>
				 </div>
				 <div class="col-md-12" style="height:10px;"></div>
			<?php
			}
	endwhile;


?>


</div>
