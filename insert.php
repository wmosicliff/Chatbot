<?php

include 'db.php';
echo $name =$_GET['name'];
echo $msg =$_GET['msg'];

if (isset($name))
{
	$insert = "INSERT INTO chat (name,msg) VALUES ('$name','$msg')";

	$run = $db->query($insert);

	if ($run)
	{
		echo "";
	}
  else
	{
		echo "error";
	}

}
?>
