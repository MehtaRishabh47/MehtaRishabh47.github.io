<?php
 //connecting to server
		$con =mysqli_connect('localhost','root','');
		
		if(!$con)
		{
			echo 'Server not connected!!';
		}
		//connecting datatbase
		 if(!mysqli_select_db($con,'IWT'))
		 {
			echo 'Database not connected';
		 }
		 //sql query
		 $Name = $_POST['name'];
		 $Email =$_POST['email'];
		 $Pswd =$_POST['pswd'];
		 $Cpswd =$_POST['cpswd'];
		 
		 $sql="INSERT INTO users(name,email,pswd,cpswd) VALUES ('$Name','$Email','$Pswd','$Cpswd') ";
		 
		 //Inserting records
		 if(!mysqli_query($con,$sql))
		 {
			 echo"Data not Inserted";
		 }
		
		header("refresh:1; url=login.html");
	 ?>