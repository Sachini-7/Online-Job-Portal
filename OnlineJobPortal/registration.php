<?php
 include_once 'php/connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/registration.css">
        <title>
            Online Job Portal
        </title>
    </head>
    <body>
    <header class="header">
            <img src="src/Capital_Labour__1_-removebg-preview.png" class="img1">
            <a href="registration.php" class="btn1">Register</a>
            <a href="src/login.php" class="btn2">Login</a>
            <br><br><br>
            <div class="nnav">
                <nav>
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="contact1.php">CONTACT US</a></li>
                        <li><a href="userAccount.php">USER ACCOUNT</a></li>
                        <li><a href="aboutus.html">ABOUT US</a></li><br>
                    </ul>
                </nav>
                </div>

                    <form action="index.html" method="get" class="searchbar"><center>
                    <input type="text" name="" placeholder="Search..." class="container">
                    <button type="submit" class="btn3">Search</button></center>
                    </form>
                </div>
        </header><br>
        <div class="box1">
            <ul class="menubar">
                <li><a class="a1" href="src/tj.php">Trending Jobs</a></li>
                <li><a class="a1" href="src/pj.php">Part Time</a></li>
                <li><a class="a1" href="full_time.php">Full Time</a></li>
                <li><a class="a1" href="online_jobs.php">Online Jobs</a></li>
            </ul>
        </div> <br><br><br>
        <div class="reg">Registration</div><br>
        <img class="rimg" src="src/png-clipart-computer-icons-login-scalable-graphics-email-accountability-blue-logo-thumbnail-removebg-preview.png">
        <br>
        <div class="formbox1">
            <form class="f1"  method="POST" action="php/registrationsubmit.php" id="form" onsubmit="return CheckPassword()">
                <div class="f2">
                    <label>First Name : </label>
                    <input type="text"name="fname" placeholder="First name" id="fname" required>
                </div><br>
                <div class="f2">
                    <label>Last Name: </label>
                    <input type="text" name="lname" placeholder="Last name" id="lname" required>
                </div><br>
                <div class="f2">
                    <label>Gender: </label>
                    <select name="gender" id="gender" required>
                        <option value="default">-- </option>
                        <option value="male">Male </option>
                        <option value="female">Female </option>
                    </select>
               </div><br>
                <div class="f2">
                    <label>NIC: </label>
                    <input type="text" name="nic" placeholder="NIC" id="nic" required>
                </div><br>
                <div class="f2">
                    <label>Email: </label>
                    <input type="email" name="email" placeholder="email" id="email" required>
                </div><br>
                <div class="f2">
                    <label>Phone Number: </label>
                    <input type="text" name="pnumber" placeholder="phone number" id="pnum" required>
                </div><br>
                <div class="f2">
                    <label>Address: </label>
                    <input type="text" name="address" placeholder="address" id="address" required>
                </div><br>
                <div class="f2">
                    <label>Country: </label>
                    <select name="country" id="country" required>
                        <option value="default">-- </option>
                        <option value="SL">Sri Lanka </option>
                        <option value="I">India</option>
                        <option value="aus">Australia</option>
                        <option value="UK">United Kingdom</option>
                        <option value="USA">United States of America</option>
                        <option value="J">Japan</option>
                        <option value="C">China </option>
                        <option value="ca">Canada</option>
                        <option value="B">Brazil </option>
                        <option value="Sa">South Africa</option>
                    </select>
                </div><br>
                <div class="f2">
                    <label>Password: </label>
                    <input type="password" name="pwd" placeholder="password" id="password" required>
                </div><br>
                <div class="f2">
                    <label>Confirm Password: </label>
                    <input type="password" name="cpwd" placeholder="password" id="cpassword" required>
                </div><br>
                <button name="submit" class="bttn" >Submit</button>


            </form>

        </div>
        <hr>
    

 
         
 
     
     
     <footer class="footer">
         <a href="https://www.microsoft.com/en-lk/"><img src="src/1200px-Get_it_from_Microsoft_Badge.svg.png" class="img2"></a>
         
             <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="src/logo-facebook-facebook-logo-transparent-png-pictures-icons-and-0.png" class="img4"></a>
             <a href="https://twitter.com/?lang=en"><img src="src/673-6736496_transparent-background-twitter-logo-hd-png-download-removebg-preview.png" class="img5"></a>
             <a href="https://www.instagram.com/"><img src="src/pngtree-instagram-icon-instagram-logo-png-image_3584852.png" class="img6"></a>
             <a href="https://www.google.com/search?gs_ssp=eJzj4tTP1TcwMU02T1JgNGB0YPBiS8_PT89JBQBASQXT&q=google&oq=google&aqs=chrome.1.69i59j46i131i199i433i465i512j35i39j0i20i131i263i433i512j69i65j69i60l2j69i65.4616j0j4&sourceid=chrome&ie=UTF-8#"><img src="src/google-logo-png-symbol-5-removebg-preview.png" class="img7"></a>
         <img src="src/My_Social_Media_Page.png" class="qrcode">
 
     </footer>
     <script>
            function CheckPassword(){
                if(document.getElementById("password").value!=document.getElementById("cpassword").value)
                 {alert("Password Mismatch!");
                return false;
            }else{
                return true;
            }
            }
            </script>

        
    </body>
</html>