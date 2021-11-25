<?php
	$username="root";
	$servername="localhost";
	$password="";
	$database="website";
	$conn		= new mysqli($servername, $username, $password, $database);
	if($conn->connect_error){
		die("Connection Failed");
	}else{
		echo "Connected Successfuly";
	}
	$Fname=$_POST["fname"];
	$Lname=$_POST["lname"];
	$Mobileno=$_POST["number"];
	$Email=$_POST["email"];
	$Pwd=$_POST["pwd"];
	$Cpwd=$_POST["cpwd"];
	$Date=$_POST["date"];
	$Gender=$_POST["gender"];

	$sql= "INSERT INTO login (Fname,Lname,Mobileno,Email,Pwd,Cpwd,Gender,Date) VALUES('$Fname','$Lname','$Mobileno','$Email','$Pwd','$Cpwd','$Gender','$Date')";
	if($conn->query($sql)===TRUE)
	{
		echo "Your Account Has Been Created";
	}else{
		echo "error".$sql."<br>".$conn->error;
	}
	$conn->close();
?>