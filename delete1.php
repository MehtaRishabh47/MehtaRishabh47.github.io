<?php 
$id = $_GET['id'];
require_once('config.php');

$q = "DELETE from movielist where id = $id";

$c = mysqli_query($con, $q);

header('Location:admin.php');

