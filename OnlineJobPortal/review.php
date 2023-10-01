<?php
   include('php/connection.php');
?>
<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/index.css">
        <title>
           Reviews
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
        <center><h1>REVIEWS<h1></center>
        <?php
                $db=mysqli_select_db($conn,'online job portal');
             $querry= "SELECT * FROM `tbl_contact` ";
                $querry_run= mysqli_query($conn,$querry);
                
                ?>
        <center> <table border="1" >
        <tr>
            <th>Name</th>
            <th>Feedback</th>
        </tr>
        <?php
                if (mysqli_num_rows($querry_run) > 0)
                {
                    while($row=mysqli_fetch_assoc($querry_run))
                    {
                        ?>
                         <tr>
                            <td> <?php echo  $row['fldName']; ?> </td>
                              <td><?php   echo $row['fldMessage'];?></td>
                              
                    </tr>
                         <?php
            
               
                    }
                }else{
                    echo "EMPTY RECORD";
                }
                     ?>   
                     </table></center>
                     <hr>
     
         
 
     
     
     <footer class="footer">
         <a href="https://www.microsoft.com/en-lk/"><img src="src/1200px-Get_it_from_Microsoft_Badge.svg.png" class="img2"></a>
         
             <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="src/logo-facebook-facebook-logo-transparent-png-pictures-icons-and-0.png" class="img4"></a>
             <a href="https://twitter.com/?lang=en"><img src="src/673-6736496_transparent-background-twitter-logo-hd-png-download-removebg-preview.png" class="img5"></a>
             <a href="https://www.instagram.com/"><img src="src/pngtree-instagram-icon-instagram-logo-png-image_3584852.png" class="img6"></a>
             <a href="https://www.google.com/search?gs_ssp=eJzj4tTP1TcwMU02T1JgNGB0YPBiS8_PT89JBQBASQXT&q=google&oq=google&aqs=chrome.1.69i59j46i131i199i433i465i512j35i39j0i20i131i263i433i512j69i65j69i60l2j69i65.4616j0j4&sourceid=chrome&ie=UTF-8#"><img src="src/google-logo-png-symbol-5-removebg-preview.png" class="img7"></a>
         <img src="src/My_Social_Media_Page.png" class="qrcode">
 
     </footer>
        
    </body>
</html>