<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['email']);
unset($_SESSION['password']);
$url = "index.php";
if(isset($_GET["session_expired"]))
{
	$url .= "?session_expired=" . $_GET["session_expired"];

}
header("Location: $url");


?>