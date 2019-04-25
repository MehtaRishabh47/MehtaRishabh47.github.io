<html>
<head> <title>Game Shop</title>
 
  <link rel="stylesheet" href="css/shop1.css">

  <link rel="stylesheet" href="css/bootstrap-grid.css">
   <link rel="stylesheet" href="css/shop.css">
<style>
a{
	text-decoration:none;
}
</style>
</head>
<body background="./css/xbox.jpg" style="background-repeat: no-repeat;
	background-size: cover;">
<div class=logindisplay>

</div>
<nav>

<i  class="name" style="padding-right:30em;"><?php
session_start();
if (isset($_SESSION['login_user'])) {
	echo 'Welcome '.$_SESSION['login_user'].'!';
}
?></i>
	<a href="index.html" style="color:white">Home</a>
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
	
<strong><div class="centered"> Ryzen Game Shop </div> </strong>

	
	<div id="main">
<div class="genre" align="center">
	<label align=center style="color:#b1ff1a;">Choose Genre</label>
<form method="POST" action="filter.php">
<select name="genre">
<option value="sports">Sports</option>
<option value="RPG">RPG</option>
<option value="openworld">Open World</option>
<option value="battle royale">Battle Royale</option>
<option value="racing">Racing</option>


</select>
</div>
</div>
<div class="year" align="center">
<label align=center style="color:#b1ff1a;">Choose Year</label><br>
<select name="year">
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
</select><br><br>
<input type="submit" value="Search" name="filter">
</form>
    <section id="content">
	
        <div id="left"> <form action="shop/index.php" method="Post">
            <ul>
			<?php
			require_once('config.php');
			$sql="SELECT * FROM movielist ORDER BY id ASC";
			$res=mysqli_query($con,$sql);
			//echo mysqli_error($con);
			//$result=mysqli_num_rows($res);
			while($row = mysqli_fetch_array($res)){

			?>
                <li>
                    <div class="img"><a href="#"><img alt="" src="./image/<?php echo $row['img']; ?>" class="img-responsive"></a></div>
                    <div class="info">
                        <h3><a href = "product.php?id=<?php echo $row['id']; ?>" class="title" style="color:#b1ff1a;;"><?php echo $row['name']; ?></a></h3>
                        
                        <div class="price">
                            <span style="padding-right:1px" class="st">Price:</span><strong>Rs.<?php echo $row['dprice']; ?></strong><br>
							<!--<span  style="padding-right:1px" class="st">Blu-Ray price:</span>Rs.<strong>--> <?php //echo $row['bprice']; ?><!--</strong>-->
							
                        </div>
                        <div class="actions">
							<a  href = "addcart.php?pid=<?php echo $row['id']; ?>" name="add1" ><label style="color:#b1ff1a;cursor:pointer;">Add to cart</label></a>							
                        </div>
                    </div>
                </li>
			<?php } ?>
            </ul>
        </form></div>
    </section>
</div>