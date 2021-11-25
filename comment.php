<html>
	<head>
    	<link rel="stylesheet"href="style.css"> 
	</head>
	<body>
		<div class="comments_body">
		<?php
			$servername = "localhost";
			$username 	= "root";
			$password	= "";
			$dbname		= "new1";
			$conn 		= new mysqli($servername, $username, $password, $dbname);
			if($conn->connect_error){
				echo("Connection failed. <br>" . $conn->connect_error);
				die("Terminating the script");
			}
			// echo("Connected successfully. <br>");
			if(isset($_POST['sub1'])){
				if((!empty($_POST['txt1']))&&(!empty($_POST['txtarea1']))){
					$name 	  = $_POST['txt1'];
					$comments = $_POST['txtarea1'];
					$date	  =date('Y-m-d H-i-s');
					$sql1 = "INSERT INTO `Reviews`(`Name`, `Comments`,`Date`)
							VALUES('$name', '$comments','$date')";
					if($conn->query($sql1) === TRUE){
						//echo("Data submitted successfully <br>");
					}
				}
			}
			$sql2 	 = "SELECT * FROM `Reviews`ORDER BY Date desc" ;
			$result  = $conn->query($sql2);
			$row_num = 1;
			while($row = $result->fetch_assoc()){
				if(($row_num%2) == 1){
					echo("<table class='comments'align=\" left\"name = \"t1\"  width = \"60%\" >");
					echo("
						<tr> 
							<td>" . $row['Name']."</td></tr><td>". $row['Comments']. "</td>
						</tr>
					");
					echo("</table><br>");
				}
				else{
					echo("<table class='comments1'name = \"t1\" align=\" right\"width = \"60%\" >");
					echo("
						<tr> 
							<td>" . $row['Name']."</td></tr><td>". $row['Comments']. "</td>
						</tr>
					");
					echo("</table>");
				}
				$row_num++;
			}
			$conn->close();
			
		?>
		</div>
		<div class="power">
			<form name = "f1" method = "POST" action = "<?php echo($_SERVER['PHP_SELF']); ?>">
				&nbsp;Name:<textarea name = "txt1"  cols = "8" rows = "1"></textarea> &nbsp;
				&nbsp;Comments:<textarea name = "txtarea1" cols = "13" rows = "1" placeholder="enter comments"></textarea>
				<input type = "submit" name = "sub1" value = "Enter">
			</form>
		</div>
	</body>
</html>