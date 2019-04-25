<?php
session_start();
require_once('config.php');
$username = $_SESSION['uname'];

$name = $_POST['name'];

$image=$_POST['image'];
if(isset($_FILES['image']['tmp_name']) && $_FILES['image']['tmp_name'] != "") {
    $dir = "image/";
    move_uploaded_file($_FILES["image"]["tmp_name"], $dir. $_FILES["image"]["name"]);
    $image = $_FILES["image"]["name"];
}
$dprice = $_POST['dprice'];
$year = $_POST['year'];
$genre = $_POST['genre'];
$desc= $_POST['desc'];

$sql="INSERT INTO movielist(name,dprice, img, year,genre,description) VALUES('$name', '$dprice', '$image',  '$year','$genre','$desc')";
$res=mysqli_query($con,$sql);

header('Location: movielist.php');


