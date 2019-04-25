<?php
session_start();
require_once('config.php');
$username = $_SESSION['login_user'];
$sql="SELECT * FROM users where name = '$username'";
$res=mysqli_query($con,$sql);

$t = mysqli_fetch_assoc($res);

$id = $t['id'];

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$pay	=$_POST['pay'];

$sql1 = "SELECT * from cart where uid ='$id'";
$res1 = mysqli_query($con, $sql1);

while($row = mysqli_fetch_array($res1)){
    $pid = $row[1];
    $uid = $id;

    $sql2 = "Insert into orders(oid,pid,uid,date,fullname,address,phone,payment) VALUES ('','".$pid."', '".$uid."', CURDATE() , '".$name."', '".$address."', '".$phone."','".$pay."')";
    $res3 = mysqli_query($con, $sql2);
}
$sql4="Truncate cart";
	$result=mysqli_query($con,$sql4);
?>
<html>
<head> <title>Movie Shop</title>
  <link rel="stylesheet" href="css/main.css">
<style>
a{
	text-decoration:none;
}
</style>
</head>
<body>
<div class=logindisplay>
</div>
<nav>
	<a href="home.php" style="color:white">Home</a>
        <a href="movielist.php" style="color:white">Browse</a>
	
	<a href="about.html" style="color:white">About</a>
	<?php	
	if (isset($_SESSION['login_user'])) {
	echo '<a href="logout.php" style="color:white">Logout</a></div>';
	}
	else
	{
	echo '<a href="login.html" style="color:white">Login</a></div>';
	}
?>
</nav>
	<div class="header">
	<header>
	<h1 id="logo" style="font-size:95px" >Razor Movie World</h1>
	</header>
	<br>
	<br>
	<h1 align="center"> Your Order has been Booked!</h1>
</body>
</html>