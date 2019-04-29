<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Game Shop</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="./css/flex-shop.css">
</head>
<body>
		<nav >
			<ul class=main-nav >
				<li><a href="home.php">Home</a></li>
				<li><a href="Cart.php">My Cart</a></li>
				<li><a href="About.html">About</a></li>
			</ul>
		</nav>
		<div class=title>
			<h2>Ryzen Game Shop</h2>
		</div>
		<div class=sorting>
			<h3>Choose Genre:</h3><br>
			<form action="filter.php" method="POST">
				<select name="genre">
					<option value="sports">Sports</option>
					<option value="rpg">RPG</option>
					<option value="open-world">Open-World</option>
					<option value="racing">Racing</option>
				</select>	
				<h3>Choose Year:</h3><br>
				<select name="Year">
					<option value="2019">2019</option>
					<option value="2018">2018</option>
					<option value="2017">2017</option>
					<option value="2016">2016</option>
					<option value="2015">2015</option>
					<option value="2014">2014</option>
					<option value="2013">2013</option>
					<option value="2012">2012</option>
					<option value="2011">2011</option>
					<option value="2010">2010</option>
				</select>
			</form>
		</div>
		<div class=row>
			<form class=list action="shop/index.php" method="Post">
				<?php
			require_once('config.php');
			$sql="SELECT * FROM movielist ORDER BY id ASC";
			$res=mysqli_query($con,$sql);
			//echo mysqli_error($con);
			//$result=mysqli_num_rows($res);
			while($row = mysqli_fetch_array($res)){

			?>
			<div class=col-md-4>
				<div class=frame>
					<img  class=product-img src="./image/<?php echo $row['img']; ?>">
					<div class=product-name>
						<h4><?php echo $row['name']; ?></h4>
					</div>
					<div class=product-price>
						<h4>Price:<?php echo $row['dprice']; ?></h4>
						<button class="btn-danger">Add To Cart</button>
					</div>
					<f>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</body>
</html>