<?php
session_start();
include 'db.php';
if (isset($_SESSION['name']))

{
	$name = $_SESSION['name'];
	session_destroy();
	$query2 = "UPDATE login SET status = '0' WHERE username = '$name'";
	$run2 = $db->query($query2);
	header('location:login.php');
}

?>
/*Hello,I'm Robin.Look what I did :)*/
