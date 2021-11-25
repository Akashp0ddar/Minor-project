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
        <?php
            $username="root";
            $password="";
            $servername="localhost";
            $database="new1";
            $conn= new mysqli($servername, $username, $password, $database);
            if($conn->connect_error){
                echo("Connection failed. <br>");
                die("Terminating the PHP Script");
            }if(isset($_POST["pro"])){
            $product=$_POST['detail'];
            }
            $result= $conn->query("SELECT * FROM `sphone1`");
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($product==$row['ID']){ 
                        echo"   <table cellspacing='3'class='tabledetails' cellpadding='3'border='0'align='center' width='70%'>
                            <tr>
                                <th colspan='2'>".$row['NAME']."</th>
                                
                            </tr>
                            <tr>
                            <td colspan='2'>&nbsp;</td>
                            </tr>
                            <tr  >
                                <td width=50% colspan='2'>
                                    <div class='images_container'>
                                        <div class='button_left' id='left'>
                                            &#60;
                                        </div>
                                        <img class='img'id='img'src='webpic/".$row['IMG_1'].".jpg'>
                                        <div class='button_right'id='right'>
                                            &#62;
                                        </div>
                                    </div>
                                </td>   
                            </tr>
                            <script>
                                var left=document.getElementById('left');
                                var right=document.getElementById('right');
                                var img=document.getElementById('img');
                                var i=3;
                                left.onclick= function(){
                                    if(i%3==0){
                                        img.src='webpic/".$row['IMG_2'].".jpg';
                                        i++;
                                    }else if(i%3==1){
                                        img.src='webpic/".$row['IMG_3'].".jpg';
                                        i++;
                                    }else{
                                        img.src='webpic/".$row['IMG_1'].".jpg';
                                        i++;
                                    }
                                }
                                right.onclick=function(){
                                    if(i%3==0){
                                        img.src='webpic/".$row['IMG_2'].".jpg';
                                        i++;
                                    }else if(i%3==1){
                                        img.src='webpic/".$row['IMG_3'].".jpg';
                                        i++;
                                    }else{
                                        img.src='webpic/".$row['IMG_1'].".jpg';
                                        i++;
                                    }
                                }
                            </script>
                            <tr>
                            <td colspan='2'>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><b>Processor core:</td></b>
                                <td>".$row['PROCESSOR_CORE']." Core</td>
                            </tr>
                            <tr>
                                <td width=25%><b>Processor details:</b></td>
                                <td width=25%>".$row['PROCESSOR_D']."</td>
                            </tr>
                            <tr>
                                <td><b>RAM:</td></b>
                                <td>".$row['RAM']." GB</td>
                            </tr>
                            <tr>
                                <td><b>Memory:</td></b>
                                <td>".$row['MEMORY']." GB</td>
                            </tr>
                            <tr>
                                <td><b>Brand:</td></b>
                                <td>".$row['COMPANY']."</td>
                            </tr>
                            <tr>
                                <td><b>Front Camera:</td></b>
                                <td>".$row['CAMERA_FRONT']." MP</td>
                            </tr>
                            <tr>
                                <td><b>Rear Camera:</td></b>
                                <td>".$row['CAMERA_REAR']." MP</td>
                            </tr>
                            <tr>
                                <td><b>Buy Now:</td></b>
                                <td>".$row['DETAILS']."</td>
                            </tr>
                            <tr>
                                <td><b>Price:</td></b>
                                <td>".$row['PRICE']."</td>
                            </tr>
                            <tr>
                            <td><u><br><b>Ratings:</b></u></td> <td>";
                        for($i=0;$i<$row['RATING'];$i++){
                            echo "<font class='shadow'>&#9733</font>";
                        }
                        echo "</td></tr></table><br>";
                    }     
                }    
            }
            $conn->close();
        ?>
        </div>
        <br>
	    <br>
        <footer><hr color="black"noshade size="8">
            <p>
            <center>&copy; 2021-2022 Akash  </center></p>
        </footer>
    </div>
</body>
</html>