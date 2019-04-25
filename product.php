<!DOCTYPE html>
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
<i class="name"><?php
session_start();
if (isset($_SESSION['login_user'])) {
	echo 'Welcome '.$_SESSION['login_user'].'!';
}
?></i>
	<a href="home.php" style="color:white">Home</a>
        <a href="movielist.php" style="color:white">Browse</a>
	<a href="cart.php" style="color:white">My Cart</a>
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
	<h1 id="logo">Razor Movie World</h1>
	</header>
	</div>
<div id="main">
    <section id="content">
        <div id="left"> <form action="shop/index.php" method="Post">
            <h2 align="center">MOVIE INFO:</h3>
			<?php
			require_once('config.php');
			$id = $_GET['id'];
		
			$sql="SELECT * FROM movielist where id = $id ";
			$res=mysqli_query($con,$sql);
			//echo mysqli_error($con);
			//$result=mysqli_num_rows($res);
			while($row = mysqli_fetch_array($res)){

			?>
                    <div class="img" align="center"><a href="#"><img alt="" src="./image/<?php echo $row['img']; ?>" class="img-responsive" height=300 width=250></a></div>
                    <div class="info" align="center" style="padding:20px;">
                        <h2><?php echo $row['name']; ?> (<?php echo $row['year']; ?>)</h2>
                        						<span class="de" style="font-size:20px;"><?php echo $row['description']; ?></span>
												<br><br>
                        <div class="price">
                                                        <span style="padding-right:1px;font-size:20px;" class="st">Price:</span><strong style="font-size:20px;">Rs.<?php echo $row['dprice']; ?></strong><br>
					
                        </div>

                        <div class="actions">	
							<a style="font-size:40px;color:white;" href = "addcart.php?pid=<?php echo $row['id']; ?>" name="add1">Add to cart</a>
                        </div>
                    </div>
					<div class = "desc" style="padding-left:40%">
						</div>
			<?php } ?>
            </ul>
        </form></div>
    </section>
</div>

	</body>

</html>	