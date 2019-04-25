<?php
session_start();
$con=mysqli_connect('localhost','root','');
	if(!$con)
	{
		die("could not connect:".mysql_error());
	}
	mysqli_select_db($con,"iwt");
	$sql="Truncate cart";
	$result=mysqli_query($con,$sql);
if(session_destroy()) // Destroying All Sessions
{
header("Location: login.html"); // Redirecting To Home Page
}
?>
