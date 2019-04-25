<?php 
$cid = $_GET['cid'];
require_once('config.php');

$q = "DELETE from cart where cid = $cid";

$c = mysqli_query($con, $q);

header('Location:cart.php');

