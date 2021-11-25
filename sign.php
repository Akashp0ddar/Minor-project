<html>
<head>
    <link rel="stylesheet"href="style.css"> 
</head>
<body class="body"link="Burlywood" alink="Burlywood"vlink="Bisque">
    <div class="container">
        <div class="header">
            <center><img src="title.png"height="100"width="100"><font class="head">Smart-Lee</font></center>
            <div class="menu_list">
                <ul id="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="compare.php">Compare</a></li>
                    <li><a href="sign.php">Sign Up</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>  
            </div>
        </div>
        <div class="body_content">
        <form onReset="func(this.form)"action="signin.php"method="POST">
            <font size =7> Create an account </font><br><br>
            Firstname:-<input type="text"required name="fname">
            Lastname:-<input type="text"required name="lname"><br><br>
            Mobile no:-<input type="text"name="number"><br><br>
            Email:-<input type="email"required name="email"> <br><br>
            New Password:-<input type="password"required name="pwd"><br><br>
            Confirm Password:-<input type="password"required name="cpwd"><br><br>
            Enter Birth Date:-<input type="date"name="date">
            <br><br>
            Gender:-
            <select name="gender"value="Gender">
            <option disabled>Gender</option>
            <option>Male</option>
            <option>Female</option>
            </select>
            <br><br>
            <input type="checkbox" name="Yes"required name="">Yes, I agree to the terms and conditions of this Website <br><br>
            <input type="reset" name="Rst" value="Reset">
            <input type="submit" value="Create an account">	
        </form>
        </div>
        <br>
	    <br>
        <footer><hr color="black"noshade size="8">
            <p>
            <center>&copy; 2020-2022 Akash  </center></p>
        </footer>
    </div>
</body>
</html>