<!DOCTYPE html>
<html>
<head>
<title>Login page</title>

<link rel="stylesheet" type="text/css" href="../styles/login.css">

</head>
<body>
<img src="../images/Capital_Labour__1_-removebg-preview.png" class="img1">
<img src = "../images/userImage.png" class = "userImg">

<div>
<center>

<form id = "form" action = "#" method = "post" action = "signup.php">
	
	<h2 id = "formHead">Login</h2><br><br><br>
	
	<input type = "email" name = "email" id = "uname" placeholder = "Email"><br><br>
	
	<input type = "password" name = "password" id = "uname" placeholder = "Password"><br><br>
	
	
	<input type = "submit" name = "btnSubmit" value = "sign in"  class="btn1"><br><br><br>
	
	<hr>
	
	<p>Do not have an account</p><br><br>
	
	<form>
	<input type = "submit" name = "btnSub" value = "sign up"  class="btn1" formaction = "../registration.php"><br><br><br>
	</form
	
	</center>	

</form>
</div>



<?php
require("config.php"); 

	if(isset($_POST["btnSubmit"]))
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		
		$sql = "select * from registration WHERE Email = '$email' and Password = '$password'";
				 
				  
		$result = mysqli_query($con,$sql);
		
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		$count = mysqli_num_rows($result);
		
		if($count==1)
		{
			echo '<script>alert("login is successfully")</script>';
			header('Location:../index.html');
		}
		else
			echo '<script>alert("Please enter the correct username and password")</script>';
	}
		
?>




<hr id = "sepHeaderFooter">

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