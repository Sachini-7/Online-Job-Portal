<?php

    include "connection.php"; 

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet"  href="userAccount.css">
        <title>User Account</title>

        <style>

        .imgSlide {
        max-width: 500px;
        position: relative;
        margin: auto;
        }

</style>
    </head>
    <body>
        <header class="header">
            <img src="userAccountImages/Capital_Labour__1_-removebg-preview.png" class="img1">
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
                <br><br><br><br><br><br><br><br>
        
        <center>
            <!--<img src="userAccountImages/blankPP.png" alt="Profile Photo" width="260px" ><br>  -->
            <div class="imgSlide">

    <div class="mySlides ">
      <img src="userAccountImages/1.jpg" style="width:100%">
    </div>

    <div class="mySlides ">
      <img src="userAccountImages/2.png" style="width:100%">
    </div>

    <div class="mySlides ">
      <img src="userAccountImages/3.jpg" style="width:100%">
    </div>

</div>
<br>

<div>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
        </center>
        <div>
        <div class="yourJobs">
            <h3> Jobs You Applied</h3>

            <?php
                $db=mysqli_select_db($conn,'online job portal');
             $querry= "SELECT * FROM `applyjob` ";
                $querry_run= mysqli_query($conn,$querry);
                
                ?>
               

            <table border="1" cellpadding="0">
                <tr>
                    <th>id</th>
                    <th>Job Position</th>
                    <th>Delete Job</th>
                </tr>
              <?php
                if (mysqli_num_rows($querry_run) > 0)
                {
                    while($row=mysqli_fetch_assoc($querry_run))
                    {
                        ?>
                        <tbody>
                         <tr>
                            <th > <?php echo  $row['jobID']; ?> </th>
                              <th><?php   echo $row['Job Position'];?></th>

                                <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <th><input type="submit" name="delete" class="btn" value="DELETE"></th>
                                 </form>
                         </tr>
                         </tbody>
                         <?php
            
               
                    }
                }else{
                    echo "No record found";
                }
                     ?>     
        
            </table>

        </div>
        </div>
        <hr><br>
        <div class="user_btn" >
            <a href="postJob.php" class="UA_btn" onclick="alert('loading post job page')">Post a Job</a>
            <a href="editAccount.php" class="UA_btn" onclick="alert('loading Edit account page')">Edit Account</a>
        </div>
        <br><br><br><br><br>

        <footer class="footer">
            <a href="https://www.microsoft.com/en-lk/"><img src="userAccountImages/1200px-Get_it_from_Microsoft_Badge.svg.png" class="img2"></a>
            
                <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="userAccountImages/logo-facebook-facebook-logo-transparent-png-pictures-icons-and-0.png" class="img4"></a>
                <a href="https://twitter.com/?lang=en"><img src="userAccountImages/673-6736496_transparent-background-twitter-logo-hd-png-download-removebg-preview.png" class="img5"></a>
                <a href="https://www.instagram.com/"><img src="userAccountImages/pngtree-instagram-icon-instagram-logo-png-image_3584852.png" class="img6"></a>
                <a href="https://www.google.com/search?gs_ssp=eJzj4tTP1TcwMU02T1JgNGB0YPBiS8_PT89JBQBASQXT&q=google&oq=google&aqs=chrome.1.69i59j46i131i199i433i465i512j35i39j0i20i131i263i433i512j69i65j69i60l2j69i65.4616j0j4&sourceid=chrome&ie=UTF-8#"><img src="userAccountImages/google-logo-png-symbol-5-removebg-preview.png" class="img7"></a>
            <img src="userAccountImages/My_Social_Media_Page.png" class="qrcode">
    
        </footer>

    </body> 
</html>