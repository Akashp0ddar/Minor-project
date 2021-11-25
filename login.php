<?php 
	$servername = "localhost";
	$username	= "root";
	$password	= "";
	$database	= "website";
	$conn		= new mysqli($servername, $username, $password, $database);
	if($conn->connect_error){
		echo("Connection failed. <br>");
		die("Terminating the PHP Script");
	}
	if(isset($_POST['name'])){	
		$user  	= $_POST['user'];
		$userp	= $_POST['userp'];
		$result	= $conn->query("SELECT `Fname`, `Lname`, `Email`,`Pwd` FROM `login`");
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				if(($user == $row['Email']) && ($userp == $row['Pwd'])){
					echo "#Hi!".$row['Fname'].$row['Lname'];
				}else{
						echo "<script>alert(INCORRECT PASSWORD or USERNAME);</script>";
				}
			}
		}			
	}
	$conn->close();
?>