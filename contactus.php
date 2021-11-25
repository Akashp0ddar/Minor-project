<html>
<head>
    <link rel="stylesheet"href="style.css"> 
    <script src="basic.js"></script>
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
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="sign.php">Sign Up</a></li>
                </ul>  
            </div>
        </div>
        <div class="body_content">
            <div class="contactus">
                <table border="0">
                    <tr>
                        <th>
                            <font size="5">&#10064; Registered Office</font>
                        </th>
                        <th>
                            <font size="5">Contact Information</font>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            SMART-LEE WEB PRIVATE LIMITED<br>
                            Ground Floor, 324-A,<br>
                            Model Town Extension,<br>
                            Ludhiana - 141002<br>
                        </td>
                        <td>
                        <dl>
                            <dt><b>For media promotions:</b></dt>
                            <dd>&#9993; advertise@smartlee.com</dd>
                            <dt><b>For website feedback:</b></dt>
                            <dd>&#9993; care@smartlee.com</dd>
                            <dt><b>For affiliate/merchant partnerships:</b></dt>
                            <dd>&#9993; sales@smartlee.com</dd>
                            <dt><b>For cashback:</b></dt>
                            <dd>&#9993;     offers@smartlee.com</dd>
                        </dl>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <br><br><br>
                            <u><b>Please Note:</b></u> Smartlee.com only provides information about mobile phones.
                            We do not sell mobile phones.
                        </TD>
                    </tr>
                    </table>
            </div>
            <br>
            <div class="feedback">
                <font size="5">
                    Need to reach us? No problem. Just fill out the form below 
                    and we'll make sure your message reaches the right person.
                </font>
                <br>
                <br>
                <form id="reset"method="post">
                    <table border="0">
                        <tr>
                            <td>Purpose: </td>
                            <td> 
                                <select class="feed_button">
                                    <option>Feedback</option>
                                    <option>Tip Us</option>
                                    <option>Marketing</option>
                                    <option>Sales</option>
                                    <option>Jobs</option>
                                    <option selected>Enquiry</option>
                                    <option>Others</option>
                                </select> 
                            </td>   
                        <br>
                        </tr>
                        <tr>
                            <td>Full Name: </td>
                            <td><input class="feed_button"type="text"name="txt1"autocomplete="off" required></td>
                        </tr>
                        <tr>
                            <td>File     : </td>
                            <td><input class="feed_button"type="file"name="txt1"></td>
                        </tr>
                        <tr>
                            <td>Email    : </td>
                            <td><input class="feed_button"type="email"name="email"autocomplete="off"required></td>
                        </tr>
                        <tr>
                            <td>Message  : </td>
                            <td><textarea class="feed_button"type="text"name="msg"autocomplete="off"required></textarea></td>
                        </tr>
                    </table>
                    <br><br>
                    <center>
                        <input class="submit"type="submit"value ="submit" onclick="sub()">
                    </center>               
                    </form>
                <br>
                
            </div>   
            <div class="comment_container">
                <center>   
                    <h1>Comments</h1>
                    <iframe onload="top.scrollTo(0,0)"width="100%"height="80%px"scrolling="no"src="comment.php">
                    </iframe>
                    <br>
                    <br>
                    <input type="button"value="Print"onclick="print()">
                    <input type="button"value="Save this page"onclick="saveas()"><br><br>
                </center>
            </div>
        </div>
        <footer><hr color="black"noshade size="8">
            <p>
            <center>&copy; 2020-2022 Akash  </center></p>
        </footer>
    </div>
</body>
</html>