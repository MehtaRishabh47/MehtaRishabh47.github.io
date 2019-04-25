<html>
<head> <title>Game Shop</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style>
a{
	text-decoration:none;
}
</style>
	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<div class=logindisplay>

</div>
<nav>
<i><?php
session_start();
if (isset($_SESSION['login_user'])) {
	echo 'Welcome '.$_SESSION['login_user'].'!';
}
?></i>
        <a href="movielist.php" style="color:white">Browse</a>
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
	<h2 align=center style="color:white;margin-top:10rem">Admin Panel:</h2><br><br>
	<div class="container"><!-------------Shop------------>
		<form action = "addproduct.php" method = "post" class="well span8" role="form" enctype="multipart/form-data
">
			<div class="row">
				<div class="col-md-4">
            	<div class="form-group">
	                <label style="color:#b1ff1a;">Name</label>
	                <input class="form-control" name = "name" placeholder="Product Name" type="text">
            	</div>
				<div class="form-group">                
	                <label style="color:#b1ff1a;">Image</label>
	                <input class="form-control" name = "image" placeholder="Product Image" type="file">
	            </div>
				<div class="form-group">                
	                <label style="color:#b1ff1a;">Price</label>
	                <input class="form-control" name = "dprice" placeholder="Product Price" type="text">
					<label style="color:#b1ff1a;">Year</label>
	                <input class="form-control" name = "year" placeholder="Year" type="text">
					<label style="color:#b1ff1a;">Genre</label>
	                <input class="form-control" name = "genre" placeholder="Genre" type="text">
					<label style="color:#b1ff1a;">Description</label>
					<input class="form-control" name = "desc" placeholder="Description" type="textarea">
	            </div>
            </div>
			<div style="padding-left:90%">
				<input type = "submit" name = "submit" value = "Add" class = "btn btn-primary">
			</div>
			</div>
		</form>
	</div>
	
	
	<center><h3 style="color:#b1ff1a;">ORDERLIST</h3></center><br><br>
	
	<table border=1>
	<tr >
			<th style="font-size:20px;color: #5784EB">Order-id</th>
			<th style="font-size:20px;color: #5784EB">Product-id</th>
			<th style="font-size:20px;color: #5784EB">User-id</th>
			<th style="font-size:20px;color: #5784EB">Date</th>
			<th style="font-size:20px;color: #5784EB">Address</th>
			<th style="font-size:20px;color: #5784EB">Phone</th>
			<th style="font-size:20px;color: #5784EB">Fullname</th>
			<th style="font-size:20px;color: #5784EB">Payment</th>
			</tr>
				<?php
	require_once('config.php');
	$sql="select * from orders";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($res)){
	
	
	?>

				<?php echo'<tr>';
						echo '	<td>'.$row['oid'].'</td>';
						echo '	<td>'.$row['pid'].'</td>';
						echo '	<td>'.$row['uid'].'</td>';
						echo '	<td>'.$row['date'].'</td>';
						echo '	<td>'.$row['address'].'</td>';
						echo '	<td>'.$row['phone'].'</td>';
						echo '	<td>'.$row['fullname'].'</td>';
						echo '	<td>'.$row['payment'].'</td>';
						echo'</tr>';?>
	
	
	<?php } ?>
	</table>
	
		<center><h3 style="color:#b1ff1a;">MOVIE LIST</h3></center><br><br>
	
	<table border=1>
	<tr >
			<th style="font-size:20px;color: #5784EB">Id</th>
			<th style="font-size:20px;color: #5784EB">Name</th>
			<th style="font-size:20px;color: #5784EB">Price</th>
			<th style="font-size:20px;color: #5784EB">Delete</th>
			
			</tr>
				<?php
	require_once('config.php');
	$sql="select * from movielist";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($res)){
	
	
	?>

				<?php echo'<tr>';
						echo '	<td style="color:green;">'.$row['id'].'</td>';
						echo '	<td style="color:green;">'.$row['name'].'</td>';
						echo '	<td style="color:green;">'.$row['dprice'].'</td>';?>
						<td><a href = "delete1.php?id=<?php echo $row['id']; ?>" style="color:#C40000"><u>Delete</u></a></td>
						<?php echo'</tr>';?>
	
	
	<?php } ?>
	</table>
	
</body>
</html>

   