<?php

$servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "chat";

/*$conn = mysqli_connect($servername, $username, $password, $dbname);*/
$db = new mysqli($servername, $username, $password, $dbname);

function formatDate($date)
{

	return date('g:i:a',strtotime($date));

}

?>
