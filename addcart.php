<?php
session_start();
require_once('config.php');
if(isset($_SESSION['login_user'])){
		$username = $_SESSION['login_user'];
		$sql = mysqli_query($con, "SELECT id from users where name = '$username'");
		//echo mysqli_error($con);
		$row = mysqli_fetch_array($sql);
		$uid = $row['id'];
		$pid = $_GET['pid'];
		
		$sql1 = mysqli_query($con, "INSERT into cart(pid,uid) VALUES($pid, $uid)");
echo mysqli_error($con);
header('location: cart.php');}

	else{  header('location: login.html');
}

	