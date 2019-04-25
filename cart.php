<?php 
session_start();
require_once('config.php');
if(isset($_SESSION['login_user'])){
		$username = $_SESSION['login_user'];
		$sql = mysqli_query($con, "SELECT id from users where name = '$username'");
		//echo mysqli_error($con);
		$row = mysqli_fetch_array($sql);
		$id = $row['id'];
		
		$sql1 = "SELECT * from cart LEFT JOIN users on cart.uid = users.id LEFT JOIN movielist on cart.pid = movielist.id where users.id = $id";
		$tt = mysqli_query($con, $sql1);
			echo mysqli_error($con);
}


?>
<html>
<head> <title>Game Shop</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style2.css">
 <link rel="stylesheet" href="css/bootstrap-cart.css" />
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
<strong><div class="centered"> Ryzen Game Shop </div> </strong>

	<!-- <div class="header">
	<header>
	<h1 id="logo" style="font-size:95px" >Ryzen Game Store</h1>
	</header>
	</div> -->
	<div class="container">
			<br />
			<br />
			<br />
			<br /><br />
			<div style="clear:both"></div>
			<br />
			<h3 style="color: #5784EB">Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%" style="color: #5784EB">Name</th>
						<th width="20%" style="color: #5784EB">Price</th>
						<th width="5%" style="color: #5784EB">Action</th>
					</tr>
					<?php 
						while($r = mysqli_fetch_array($tt)){
					?>
						<tr>
							<td style="color:#b1ff1a;"><?php echo $r['name']; ?></td>
							<td style="color:#b1ff1a;"><?php echo $r['dprice']; ?></td>
							<td><a href = "delete.php?cid=<?php echo $r['cid']; ?>" style="color:#C40000"><u>Delete</u></a></td>
						</tr>
						
						<?php } ?>
				</table>
			</div>
		</div>
	</div>
	<div style="padding-left:80%">
	<button class = "btn btn-secondary"  onclick="window.location.href='buy.php'" style="background-color: #5784EB; color:white;">Proceed To Checkout</button>