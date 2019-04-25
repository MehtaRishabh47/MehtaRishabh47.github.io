<?php
session_start();
	$username=$_POST["uname"];
	$password=$_POST["pswd"];
	$_SESSION['login_user']= $username;
	$con=mysqli_connect('localhost','root','');
	if(!$con)
	{
		die("could not connect:".mysql_error());
	}
	mysqli_select_db($con,"iwt");
	$sql="select * from users where name='".$username."' and pswd='".$password."'";
	$result=mysqli_query($con,$sql);
	if($row=mysqli_fetch_array($result)){
		if($row["admin"] == 0){
                        header( "Location: home.php");
                    }else{
					    $_SESSION["admin"] = true;
                        header( "Location: admin.php");
                    }
	}
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Please enter the correct username and password");'; 
		echo 'window.location.href = "login.html";';
		echo '</script>';
		
	}
	mysqli_close($con);
		
