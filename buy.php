<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['login_user'])) {
	  header( "Location: login.html");
}
?>
<html>
<head> <title>Game Shop</title>
  <link rel="stylesheet" href="css/main.css">

  <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
 
<style>
a{
	text-decoration:none;
}
</style>
</head>
<body>
<div class=logindisplay>
</div>
<nav style="margin-top:1rem">
<i class="name" style="padding-right:30em;"><?php
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
<strong><div class="centered" style="margin-bottom:100px"> Ryzen Game Shop </div> </strong>
	<!-- <div class="header">
	<header>
	<h1 id="logo" style="font-size:95px">Ryzen Game Store</h1>
	</header> -->
	
			<h1  align=center style="font-family:SketchFlow Print;margin-top:12rem;color:#5784EB;">Your Order</h1>


<div class="container">

        <div class="row">
            <div class="col-md-4">
                <form action = "buynow.php" method = "post">
					<div class="form-group">
						<label style="color:#b1ff1a;">Name</label>
						<input class="form-control" name = "name" placeholder="Full Name" type="text">
					</div>

					<div class="form-group">
						<label style="color:#b1ff1a;">Shipping Address</label>
						<input class="form-control" name = "address" placeholder="Address" type="text">
					</div>

					<div class="form-group">                
						<label style="color:#b1ff1a;">Mobile Number</label>
						<input class="form-control" name = "phone" placeholder="Mobile No." type="text">
						
					</div>
				


            </div>
    
            <div class="col-md-8">
			
                <label style="color:#b1ff1a;"><h4>Payment Method<h4></label> <br>
   				<input type="radio" name="pay" value="cash on delivery"><label style="color:#b1ff1a;"> Cash on Delivery</label><br>
				<input type="radio" name="pay" value="credit card"><label style="color:#b1ff1a;"> Credit Card</label><br>
				<input type="radio" name="pay" value="paytm"><label style="color:#b1ff1a;"> Paytm</label>
           	</div>
			<div style="padding-left:90%">
				<input type = "submit" name = "submit" value = "Place Order" class = "btn btn-primary"><br>
			
			</div>
			</form>
        </div>
</div>		
</body>
</html>