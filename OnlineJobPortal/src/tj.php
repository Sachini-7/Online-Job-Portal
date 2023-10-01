<?php
include("../src/config.php");
// function to connect and execute the query
function filterTable($query, $con)
{
    $filter_Result = mysqli_query($con, $query);	
    return $filter_Result;
	
}

$valueToSearch = null;
$position = null;

if(isset($_POST['tj1']))
{
    $valueToSearch = '99x';
    $position = $_POST['position'];	
}
else if(isset($_POST['tj2']))
{
    $valueToSearch = 'OOO';
    $position = $_POST['position'];	
}

else if(isset($_POST['tj3']))
{
    $valueToSearch = 'IWG';
    $position = $_POST['position'];	
}

else if(isset($_POST['tj4']))
{
    $valueToSearch = 'BCS';
    $position = $_POST['position'];	
}
else if(isset($_POST['tj5']))
{
    $valueToSearch = 'UBER';
    $position = $_POST['position'];	
}
else if(isset($_POST['tj6']))
{
    $valueToSearch = 'Piason';
    $position = $_POST['position'];	
}
else if(isset($_POST['search']))
{
    $valueToSearch = null;
    $position = $_POST['position'];	
}

if($valueToSearch != null && $position != null){
	
	$query = "SELECT * FROM `tj` where companyName='".$valueToSearch."' AND position = '".$position."'";
    $search_result = filterTable($query, $con);	
}
else if($valueToSearch == null && $position != null){
	$query = "SELECT * FROM `tj` where position = '".$position."'";
    $search_result = filterTable($query, $con);
}
else if($valueToSearch != null && $position == null){
	
	$query = "SELECT * FROM `tj` where companyName='".$valueToSearch."'";
    $search_result = filterTable($query, $con);	
}
else{
	$query = "SELECT * FROM `tj`";
    $search_result = filterTable($query, $con);
}
?>


<!DOCTYPE html>
<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
        <link rel="stylesheet" href="../styles/pj.css">
        <title>
            Online Job Portal
        </title>
    </head>
    <body>
           <header class="header">
            <img src="Capital_Labour__1_-removebg-preview.png" class="img1">
            <a href="../registration.php" class="btn1">Register</a>
            <a href="login.php" class="btn2">Login</a>
            <br><br><br>
            <div class="nnav">
                <nav>
                    <ul>
                        <li><a href="../index.html">HOME</a></li>
                        <li><a href="../contact1.php">CONTACT US</a></li>
                        <li><a href="../userAccount.php">USER ACCOUNT</a></li>
                        <li><a href="../aboutus.html">ABOUT US</a></li><br>
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
                <li><a class="a1" href="tj.html">Trending Jobs</a></li>
                <li><a class="a1" href="pj.html">Part Time</a></li>
                <li><a class="a1" href="../full_time.php">Full Time</a></li>
                <li><a class="a1" href="../online_jobs.php">Online Jobs</a></li>
            </ul>
        </div> <br><br><br>
		
		
		
		
		
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <a href = "tj.html">
  <img src="../images/trendin.jfif" style="width:100%">
  </a>
  <div class="text">Trending Jobs</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <a href = "pj.html">
  <img src="../images/parttime.png" style="width:100%">
  </a>
  <div class="text">Part Time Jobs</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <a href = "../full_time.php">
  <img src="../images/fulltime.jpg" style="width:100%">
  </a>
  <div class="text">Full Time Jobs</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <a href = "../online_jobs.php">
  <img src="../images/online.jpg" style="width:100%">
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
		
		<center><h1>Part Time Job Companies</h1></center>
	
		 <form action="../src/pj.php" method="post">
        
            
		<div align = "center">
				
		<div>
        <center> <button name = "tj1"><img src="../images/tj1.png" class="l1"></button>
         <button name = "tj2"><img src="../images/tj2.png" class="l2"></button>
         <button name = "tj3"><img src="../images/tj3.png" class="l3"></button>
         
         <center> <button name = "tj4"><img src="../images/tj4.jfif" class="l1"></button>
         <button name = "tj5"><img src="../images/tj5.jfif" class="l2"></button>
         <button name = "tj6"><img src="../images/tj6.png" class="l3"></button>
         </div>
				
			</div>
			<br></br>
			<div align = "center">
				<button type="submit" name="allJobs", id = "allJobs" ><img src="../images/alljobs.jpg" class="l2"></button>
				
			</div>
			<div align = "center">
				<h3>Search Jobs with Positions</h3>
				<input type="text" name="position" id = "position" placeholder="Search By Position" ><br><br>
				<input type="submit" name="search" id = "search" value="Search"><br><br>
			</div>
            <div class="table-wrapper">
            <table class="fl-table" style = "border : 1px solid white;
											position : static;
											background-color : white;">
                <tr>
       
                    <th>Company Name</th>
                    <th>Position</th>
					<th>Apply Job</th>
                </tr>  		
      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
					<td><?php echo $row['companyName'];?></td>
                    <td><?php echo $row['position'];?></td>
					<td> <a type = "submit" name="apply" id="apply" value="Apply" href = "../applyjob.php"><img  src = "../images/apply.png" length = "55" width = "55" > </a></td>
                </tr>
                <?php endwhile;?> 
		
            </table>
	</form>

         

           <hr>
 
         
 
     
     
     <footer class="footer">
         <a href="https://www.microsoft.com/en-lk/"><img src="../images/1200px-Get_it_from_Microsoft_Badge.svg.png" class="img2"></a>
         
             <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="../images/logo-facebook-facebook-logo-transparent-png-pictures-icons-and-0.png" class="img4"></a>
             <a href="https://twitter.com/?lang=en"><img src="../images/673-6736496_transparent-background-twitter-logo-hd-png-download-removebg-preview.png" class="img5"></a>
             <a href="https://www.instagram.com/"><img src="../images/pngtree-instagram-icon-instagram-logo-png-image_3584852.png" class="img6"></a>
             <a href="https://www.google.com/search?gs_ssp=eJzj4tTP1TcwMU02T1JgNGB0YPBiS8_PT89JBQBASQXT&q=google&oq=google&aqs=chrome.1.69i59j46i131i199i433i465i512j35i39j0i20i131i263i433i512j69i65j69i60l2j69i65.4616j0j4&sourceid=chrome&ie=UTF-8#"><img src="../images/google-logo-png-symbol-5-removebg-preview.png" class="img7"></a>
         <img src="../images/My_Social_Media_Page.png" class="qrcode">
 
     </footer>
        
    </body>
</html>