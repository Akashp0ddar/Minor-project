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
            <button id="myBtn"class="filter"name="filter">FILTERS</button>
            <input type="button" id="allbtn"onclick="relo()"class="filter"name="all"value="ALL"><br><br>
            <br>
            <script>
                function relo(){
                    window.location.href="index.php";
                }
            </script>

            <!-- The Modal -->
            <div id="myModal" class="modal">
                <div id="myModal1" class="modal1">    
                    <div id="myModal2" class="modal1">    
                    <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <form name="f1"method ="post">
                                <center><h3>Filters</h3></center>
                                <dl>
                                    <dt>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Brands:</dt>
                                    <dd>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="BRAND[]"value="Redmi">REDMI<br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="BRAND[]"value="Samsung">SAMSUNG<br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="BRAND[]"value="Oneplus">ONE PLUS<br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="BRAND[]"value="Apple">APPLE
                                    </dd>
                                    <dt>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Memory:</dt>
                                    <dd>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="MEMORY[]"value="8">8 GB &emsp;&emsp;&nbsp;
                                    <input type="checkbox"name="MEMORY[]"value="16">16 GB <br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="MEMORY[]"value="32">32 GB &emsp;&ensp;&nbsp;
                                    <input type="checkbox"name="MEMORY[]"value="64">64 GB <br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="MEMORY[]"value="128">128 GB &emsp;&nbsp;
                                    <input type="checkbox"name="MEMORY[]"value="256">256 GB <br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="MEMORY[]"value="512">512 GB 
                                    </dd>
                                    <dt>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; RAM:</dt>
                                    <dd>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="RAM[]"value="2">2 GB &emsp;&emsp;&nbsp;
                                    <input type="checkbox"name="RAM[]"value="3">3 GB<br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="RAM[]"value="4">4 GB &emsp;&emsp;&nbsp;
                                    <input type="checkbox"name="RAM[]"value="6">6 GB <br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="RAM[]"value="8">8 GB &emsp;&emsp;&nbsp;
                                    <input type="checkbox"name="RAM[]"value="12">12 GB 

                                    </dd>
                                    <dt>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Processor core:</dt>
                                    <dd>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="core[]"value="2">dual core &ensp;
                                    <input type="checkbox"name="core[]"value="4">Quad core <br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="core[]"value="8">octa core &nbsp;
                                    <input type="checkbox"name="core[]"value="16">Hexa core 
                                    </dd>
                                    <dt>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Price:</dt>
                                    <dd>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="price[]"value="1">Less than Rs.9,999<br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="price[]"value="2">Rs.10,000-Rs.19,999<br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="price[]"value="3">Rs.20,000-29,999<br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="price[]"value="4">Rs.30,000-Rs.49,999<br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="price[]"value="5">More than Rs.50,000
                                    </dd>
                                    <dt>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Rating:</dt>
                                    <dd>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="rating[]"value="1">1 &emsp;&nbsp;
                                    <input type="checkbox"name="rating[]"value="2">2 <br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="rating[]"value="3">3 &emsp;&nbsp;
                                    <input type="checkbox"name="rating[]"value="4">4 <br>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox"name="rating[]"value="5">5+ 

                                    </dd>
                                </dl>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <input type="submit"class="submit"name="submit"value="Submit">
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <script>
                // Get the modal
                var modal = document.getElementById("myModal");
                var modal1 = document.getElementById("myModal1");
                var modal2 = document.getElementById("myModal2");

                // Get the button that opens the modal
                var btn = document.getElementById("myBtn");

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks the button, open the modal 
                btn.onclick = function() {
                modal.style.display = "block";
                modal1.style.display = "block";
                modal2.style.display = "block";
                modal2.style.width = "90%";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                modal.style.display = "none";
                modal1.style.display = "none";
                modal2.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                        modal1.style.display = "none";
                        modal2.style.display = "none";
                    }
                }
            </script>
            <br>
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
                $BRAND=NULL;
                $MEMORY=NULL;
                $RAM=NULL;
                if(isset($_POST["submit"])){
                    if(!empty($_POST["BRAND"])){
                        $i=0;
                        foreach($_POST["BRAND"] as $brand){
                            // echo "<br>".$brand."<br>";
                            $BRAND[$i++]=$brand;
                        }
                    }
                    if(!empty($_POST["MEMORY"])){
                        $i=0;
                        foreach($_POST["MEMORY"] as $memory){
                            //echo "<br>".$memory."<br>";
                            $MEMORY[$i++]=$memory;
                        }
                    }
                    if(!empty($_POST["RAM"])){
                        $i=0;
                        foreach($_POST["RAM"] as $ram){
                            //echo "<br>".$ram."<br>";
                            $RAM[$i++]=$ram;
                        }
                    }
                    if(!empty($_POST["core"])){
                        $i=0;
                        foreach($_POST["core"] as $core){
                            // echo "<br>".$core."<br>";
                            $CORE[$i++]=$core;
                        }
                    }
                    if(!empty($_POST["price"])){
                        $i=0;
                        foreach($_POST["price"] as $price){
                            // echo "<br>".$price."<br>";
                            $PRICE[$i++]=$price;
                        }
                    }
                    if(!empty($_POST["rating"])){
                        $i=0;
                        foreach($_POST["rating"] as $rating){
                            // echo "<br>".$rating."<br>";
                            $RATING[$i++]=$rating;
                        }
                    }
                }
                
                //checking brand
                //for($j=0;$j<count($BRAND);$j++){echo "<br>".$BRAND[$j];}
                if((!empty($_POST["BRAND"]))||(!empty($_POST["MEMORY"]))||(!empty($_POST["RAM"]))||(!empty($_POST["core"]))||(!empty($_POST["price"]))||(!empty($_POST["rating"]))){
                    $result	= $conn->query("SELECT * FROM `sphone1`");
                    if($result->num_rows > 0){
                        $flag=0;
                        while($row = $result->fetch_assoc()){
                            $k=0;$l=0;$m=0;$n=0;$o=0;$p=0;
                            for($k=0;((empty($_POST["BRAND"]))?($k<1):(($k<count($BRAND))));$k++ ){
                                for($l=0;((empty($_POST["MEMORY"]))?($l<1):(($l<count($MEMORY))));$l++){
                                    for($m=0;((empty($_POST["RAM"]))?($m<1):(($m<count($RAM))));$m++){
                                        for($n=0;((empty($_POST["core"]))?($n<1):(($n<count($CORE))));$n++){
                                            for($o=0;((empty($_POST["price"]))?($o<1):(($o<count($PRICE))));$o++){
                                                for($p=0;((empty($_POST["rating"]))?($p<1):(($p<count($RATING))));$p++){
                                                    
                                                    (empty($_POST["BRAND"]))?$a=true:$a=(($BRAND[$k]==$row['COMPANY']));
                                                    (empty($_POST["MEMORY"]))?$b=true:$b=($MEMORY[$l]==$row['MEMORY']);
                                                    (empty($_POST["RAM"]))?$c=true:$c=($RAM[$m]==$row['RAM']);
                                                    (empty($_POST["core"]))?$d=true:$d=($CORE[$n]==$row['PROCESSOR_CORE']);
                                                    (empty($_POST["price"]))?$e=true:$e=($PRICE[$o]==$row['PRICE_INDEX']);
                                                    (empty($_POST["rating"]))?$f=true:$f=($RATING[$p]==$row['RATING']);

                                                    if( $a && $b && $c && $d && $e && $f ){
                                                        $flag++;
                                                        echo"   <table cellspacing='3'class='table' cellpadding='3'border='0' width='22%'>
                                                                <tr>
                                                                    <td width=50% >
                                                                        <center>
                                                                            <img align='center'src='webpic/".$row['IMG_1'].".jpg'height='200'width='100'><br>   
                                                                            <h3><form action='details.php' method ='post'id='fname'>
                                                                                <input type='hidden'name='detail'value='".$row['ID']."'>
                                                                                ".$row['NAME']."<br>
                                                                                <input type='submit'name='pro'class='readmore'value='READ MORE'><br>
                                                                                </form>  
                                                                            </h3>
                                                                            <font color='red'><b>Price: &#8377;".$row['PRICE']."</b></center>
                                                                            </font><u><br><b>Ratings:</b></u> ";
                                                                            for($i=0;$i<$row['RATING'];$i++){
                                                                                echo "<font class='shadow'>&#9733</font>";
                                                                            }
                                                                            
                                                        echo                 "<br><b>Rear Camera:</b> ".$row['CAMERA_REAR']." MP<br>
                                                                            <b>Brand: </b>".$row['COMPANY']." <br>
                                                                            <b>RAM: </b>".$row['RAM']." GB<br>
                                                                            <b>Memory: </b>".$row['MEMORY']." GB<br>
                                                                                                                    
                                                                    </td>
                                                                </tr>
                                                            </table>";    
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                    if($flag==0){
                        echo"<h3>No records found</h3>";
                        for($i=0;$i<15;$i++){
                            echo"<br>";
                        }
                    }
                }
                else{
                
                    $result= $conn->query("SELECT * FROM `sphone1`");
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            
                            echo"   <table cellspacing='3'class='table' cellpadding='3'border='0' width='22%'>
                                        <tr>
                                            <td width=50% >
                                                <center>
                                                    <img align='center'src='webpic/".$row['IMG_1'].".jpg'height='180'width='100'><br>   
                                                    <h3><form action='details.php' method ='post'id='fname'>
                                                        <input type='hidden'name='detail'value='".$row['ID']."'>
                                                        ".$row['NAME']."<br>
                                                        <input type='submit'name='pro'class='readmore'value='READ MORE'><br>
                                                        </form>  
                                                    </h3>
                                                    <font color='red'><b>Price: &#8377;".$row['PRICE']."</b></center>
                                                    </font><u><br><b>Ratings:</b></u> ";
                                                    for($i=0;$i<$row['RATING'];$i++){
                                                        echo "<font class='shadow'>&#9733</font>";
                                                    }
                                                    
                            echo                    "<br><b>Rear Camera:</b> ".$row['CAMERA_REAR']." MP<br>
                                                    <b>Brand: </b>".$row['COMPANY']." <br>
                                                    <b>RAM: </b>".$row['RAM']." GB<br>
                                                    <b>Memory: </b>".$row['MEMORY']." GB<br>
                                                                                            
                                            </td>
                                        </tr>
                                    </table>";
                                
                                
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
            <center>&copy; 2021-2022 by Akash  </center></p>
        </footer>
    </div>
</body>
</html>