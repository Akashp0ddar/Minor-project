<html>
<head>
    <link rel="stylesheet"href="style.css"> 
    <style>
        * {
        box-sizing: border-box;
        }
        #myInput {
        background-image: url('/css/searchicon.png');
        background-position: 10px 12px;
        background-repeat: no-repeat;
        width: 200px;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
        }
        #myUL {
        
        list-style-type: none;
        padding: 0;
        margin: 0;
        display:none;
        }
        #myUL li a {
        border: 1px solid #ddd;
        position:sticky;
        width: 200px;
        margin-top: -1px; /* Prevent double borders */
        background-color: #f6f6f6;
        padding: 2px;
        text-decoration: none;
        font-size: 12px;
        color: black;
        display: block;
        
        }
        #myUL li a:hover:not(.header) {
        background-color: #eee;
        }
        .sub1{
            background-color: rgba(255, 255, 255, 0);
            color: white;
            height: 40px;
            cursor: pointer;
            float:left;
            opacity: 0.8;
            width: 160px;
            border-radius: 20px 20px 20px 20px;
        }
        
        #myInput_r {
            background-image: url('/css/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 200px;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }
        #myUL_r {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display:none;
        }
        #myUL_r li a {
            border: 1px solid #ddd;
            position:sticky;
            width: 200px;
            margin-top: -1px; /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 2px;
            text-decoration: none;
            font-size: 12px;
            color: black;
            display: block;
        
        }
        #myUL_r li a:hover:not(.header) {
            background-color: #eee;
        }
        .sub2{
            background-color: rgba(255, 255, 255, 0);
            color: white;
            height: 40px;
            cursor: pointer;
            float:left;
            opacity: 0.8;
            width: 40px;
            border-radius: 20px 20px 20px 20px;
        }
    </style> 
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
            <div class="compare_left">
                <form name="f1">
                    <input type="text" id="myInput" onkeyup="myFunction()" autocomplete="off"placeholder="Search for names.." title="Type in a name">
                    <ul id="myUL">
                        <?php 
                            $username="root";
                            $password="";
                            $servername="localhost";
                            $database="new1";
                            $conn= new mysqli($servername, $username, $password, $database);
                            $str="Null";
                            if($conn->connect_error){
                                echo("Connection failed. <br>");
                                die("Terminating the PHP Script");
                            }
                            $result= $conn->query("SELECT * FROM `sphone1`");
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo"<li><a onmouseout='helo()'href='javascript: submitform(`".$row['ID']."`,`".$row['NAME']."`)'>".$row['NAME']."</a></li>"; 
                                }    
                            }
                            
                        ?>
                    </ul>
                </form>
                <script>
                    var a;var b;
                    function submitform(a,b){
                        document.getElementById("return1").value=a;
                        document.getElementById("myInput").value=b;
                        ul = document.getElementById("myUL");
                        ul.style.display="none";
                    }
                    function helo(){
                        setTimeout(function() {
                            ul = document.getElementById("myUL");
                        ul.style.display="none";
                        },2000);
                    }
                    function myFunction() {
                        var input, filter, ul, li, a, i, txtValue;
                        input = document.getElementById("myInput");
                        filter = input.value.toUpperCase();
                        ul = document.getElementById("myUL");
                        ul.style.display="block";
                        li = ul.getElementsByTagName("li");
                        for (i = 0; i < li.length; i++) {
                            a = li[i].getElementsByTagName("a")[0];
                            txtValue = a.textContent || a.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                li[i].style.display = "block";
                            } else {
                                li[i].style.display = "none";
                            }
                        }
                    }
                </script>
            </div>
            <div class="compare">
                <form name="hell1"method="post"action="<?php echo $_SERVER['PHP_SELF']?>">
                    <input type="hidden"name="return1"id="return1"value="">
                    <input type="hidden"name="return2"id="return2"value="">
                    <input type="submit" class="sub1"name="sub" value="&#128270;Compare&#128270;">
                </form>
            </div>
            <div class="compare_right">
                <form name="f2">
                    <input type="text" id="myInput_r" onkeyup="Function_r()" autocomplete="off"placeholder="Search for names.." title="Type in a name">
                    <ul id="myUL_r">
                        <?php 
                            $username="root";
                            $password="";
                            $servername="localhost";
                            $database="new1";
                            $conn= new mysqli($servername, $username, $password, $database);
                            if($conn->connect_error){
                                echo("Connection failed. <br>");
                                die("Terminating the PHP Script");
                            }
                            $result= $conn->query("SELECT `ID`,`NAME`, `COMPANY`, `PROCESSOR_CORE`,`PROCESSOR_D`,`RAM`,`MEMORY`,`CAMERA_FRONT`,`CAMERA_REAR`,`DETAILS`,`PRICE`,`PRICE_INDEX`,`RATING` FROM `sphone1`");
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo"<li><a onmouseout='helo_r()'href='javascript: submitform_r(`".$row['ID']."`,`".$row['NAME']."`)'>".$row['NAME']."</a></li>"; 
                                }    
                            }
                            $conn->close();
                        ?>
                    </ul>
                    <script>
                        var c;var d;
                        function submitform_r(c,d){
                            document.getElementById("return2").value=c;
                            document.getElementById("myInput_r").value=d;
                            ul = document.getElementById("myUL_r");
                            ul.style.display="none";
                        }
                        function helo_r(){
                            setTimeout(function() {
                                ul = document.getElementById("myUL_r");
                                ul.style.display="none";
                            },2000);
                        }
                        function Function_r() {
                            var input, filter, ul, li, a, i, txtValue;
                            input = document.getElementById("myInput_r");
                            filter = input.value.toUpperCase();
                            ul = document.getElementById("myUL_r");
                            ul.style.display="block";
                            li = ul.getElementsByTagName("li");
                            for (i = 0; i < li.length; i++) {
                                a = li[i].getElementsByTagName("a")[0];
                                txtValue = a.textContent || a.innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    li[i].style.display = "block";
                                } else {
                                    li[i].style.display = "none";
                                }
                            }
                        }
                    </script>
                </form>
            </div>
        </div>
        <div class="data">
            <?php
                $username="root";
                $password="";
                $servername="localhost";
                $database="new1";
                $conn= new mysqli($servername, $username, $password, $database);
                if($conn->connect_error){
                    echo("Connection failed. <br>");
                    die("Terminating the PHP Script");
                }
                $product1="null";
                $product2="null";
                if(isset($_POST['sub'])){
                    $product1=$_POST['return1'];
                    $product2=$_POST['return2'];
                }
                $result= $conn->query("SELECT * FROM `sphone1`");
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                            if($row['ID']==$product1){ 
                                echo"   <table class='comparetable'cellspacing='3'class='tabledetails' cellpadding='3'border='0'align='center' width='35%'>
                                    <tr>
                                        <th colspan='2'>".$row['NAME']."</th>
                                    </tr>
                                    <tr>
                                    <td colspan='2'>&nbsp;</td>
                                    </tr>
                                    <tr>
                                    <td width=50% colspan='2'><center><img height='400px'width='200px'src='webpic/".$row['IMG_1'].".jpg'></center>    </td>   
                                    </tr>
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
                                echo "</td></tr></table>";
                            }
                            if($row['ID']==$product2){ 
                                echo"   <table class='comparetable'cellspacing='3'class='tabledetails' cellpadding='3'border='0'align='center' width='35%'>
                                    <tr>
                                        <th colspan='2'>".$row['NAME']."</th>
                                    </tr>
                                    <tr>
                                    <td colspan='2'>&nbsp;</td>
                                    </tr>
                                    <tr>
                                    <td width=50% colspan='2'><center><img height='400px'width='200px'src='webpic/".$row['IMG_1'].".jpg'></center></td>   
                                    </tr>
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
            <center>&copy; 2020-2022 Akash  </center></p>
        </footer>
    </div>
</body>
</html>