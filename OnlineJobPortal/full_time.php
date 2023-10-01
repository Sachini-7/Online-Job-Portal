<?php
include("config.php");
// function to connect and execute the query
function filterTable($query, $con)
{
    $filter_Result = mysqli_query($con, $query);	
    return $filter_Result;
	
}

$valueToSearch = null;
$position = null;

if(isset($_POST['cargills']))
{
    $valueToSearch = 'Cargills';
    $position = $_POST['position'];	
}
else if(isset($_POST['fonterra']))
{
    $valueToSearch = 'Fonterra';
    $position = $_POST['position'];	
}

else if(isset($_POST['daraz']))
{
    $valueToSearch = 'Daraz';
    $position = $_POST['position'];	
}

else if(isset($_POST['dialog']))
{
    $valueToSearch = 'Dialog';
    $position = $_POST['position'];	
}

else if(isset($_POST['search']))
{
    $valueToSearch = null;
    $position = $_POST['position'];	
}

if($valueToSearch != null && $position != null){
	
	$query = "SELECT * FROM `full_time` where companyName='".$valueToSearch."' AND position = '".$position."'";
    $search_result = filterTable($query, $con);	
}
else if($valueToSearch == null && $position != null){
	$query = "SELECT * FROM `full_time` where position = '".$position."'";
    $search_result = filterTable($query, $con);
}
else if($valueToSearch != null && $position == null){
	
	$query = "SELECT * FROM `full_time` where companyName='".$valueToSearch."'";
    $search_result = filterTable($query, $con);	
}
else{
	$query = "SELECT * FROM `full_time`";
    $search_result = filterTable($query, $con);
}
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles/full_time.css"
        <title>
           Full Time Jobs
        </title>
    </head>

    <body style="background-image:url('images/full_timebackground.webp');">


          <header class="header">
            <img src="src/Capital_Labour__1_-removebg-preview.png" class="img1">
            <a href="registration.php" class="btn1">Register</a>
            <a href="src/login.php" class="btn2">Login</a>
            <br><br><br>
            <div class="nnav">
                <nav>
                    <center><ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="contact1.php">CONTACT US</a></li>
                        <li><a href="userAccount.php">USER ACCOUNT</a></li>
                        <li><a href="aboutus.html">ABOUT US</a></li><br>
                    </ul></center>
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
                <center>
                    <div class="slideshow-container">
                    
                    <div class="mySlides fade">
                      <div class="numbertext">1 / 4</div>
                      <a href = "tj.html">
                      <img src="images/trendin.jfif" style="width:100%">
                      </a>
                      <div class="text">Trending Jobs</div>
                    </div>
                    
                    <div class="mySlides fade">
                      <div class="numbertext">2 / 4</div>
                      <a href = "pj.html">
                      <img src="images/parttime.png" style="width:100%">
                      </a>
                      <div class="text">Part Time Jobs</div>
                    </div>
                    
                    <div class="mySlides fade">
                      <div class="numbertext">3 / 4</div>
                      <a href = "full_time.php">
                      <img src="images/fulltime.jpg" style="width:100%">
                      </a>
                      <div class="text">Full Time Jobs</div>
                    </div>
                    
                    <div class="mySlides fade">
                      <div class="numbertext">4 / 4</div>
                      <a href = "online_jobs.php">
                      <img src="images/online.jpg" style="width:100%">
                      </a>
                      <div class="text">Online Jobs</div>
                    </div>
                    </center>
                    
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                    
                    </div>
                    <br>
                    
                    <div style="text-align:center">
                      <span class="dot" onclick="currentSlide(1)"></span> 
                      <span class="dot" onclick="currentSlide(2)"></span> 
                      <span class="dot" onclick="currentSlide(3)"></span> 
                      <span class="dot" onclick="currentSlide(4)"></span> 
                    </div>
                    
                    <script>
                    let slideIndex = 1;
                    showSlides(slideIndex);
                    
                    function plusSlides(n) {
                      showSlides(slideIndex += n);
                    }
                    
                    function currentSlide(n) {
                      showSlides(slideIndex = n);
                    }
                    
                    function showSlides(n) {
                      let i;
                      let slides = document.getElementsByClassName("mySlides");
                      let dots = document.getElementsByClassName("dot");
                      if (n > slides.length) {slideIndex = 1}    
                      if (n < 1) {slideIndex = slides.length}
                      for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                      }
                      for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                      }
                      slides[slideIndex-1].style.display = "block";  
                      dots[slideIndex-1].className += " active";
                    }
                    </script>


        </header><br>
		
		
	
		 <form action="full_time.php" method="post">
        
            
		<div align = "center">
				<h3>Search Jobs for Top Companies</h3>
				<button type="submit" name="cargills" id = "cargills"><img src="images/cargills.png" class="l1"></button>
				<button type="submit" name="fonterra", id = "fonterra" ><img src="images/fonterra.jpg" class="l2"></button>
				<button type="submit" name="daraz", id = "daraz"><img src="images/daraz.png" class="l2"></button>
				<button type="submit" name="dialog", id = "dialog" ><img src="images/dialog.jpg" class="l2"></button>
				
			</div>
			<br></br>
			<div align = "center">
				<button type="submit" name="allJobs", id = "allJobs" ><img src="images/alljobs.jpg" class="l2"></button>
				
			</div>
			<div align = "center">
				<h3>Search Jobs with Positions</h3>
				<input type="text" name="position" id = "position" placeholder="Search By Position" ><br><br>
				<input type="submit" name="search" id = "search" value="Search"><br><br>
			</div>
            <div class="table-wrapper">
            <table class="fl-table">
                <tr>
       
                    <th>Company Name</th>
                    <th>Position</th>
                    <th>Description</th>
					<th>Apply Job</th>
                </tr>  		
      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_assoc($search_result)):?>
                <tr>
                    <td><?php echo $row['companyName'];?></td>
                    <td><?php echo $row['position'];?></td>
                    <td><?php echo $row['description'];?></td>
					<td> <a type = "submit" name="apply" id="apply" value="Apply" href = "applyjob.php"><img  src = "images/apply.png" length = "55" width = "55" > </a></td>
                </tr>
                <?php endwhile;?> 
		
            </table>
	</form>

         <center><h1>Fulltime Job Companies</h1></center>

         <hr id = "sepHeaderFooter">

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