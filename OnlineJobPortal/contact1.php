<?php  
// define variables to empty values  
$nameErr = $emailErr = $mobilenoErr = $msgErr = "";  
$name = $email = $mobileno = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
		
	if (empty($_POST["txtMessage"])) {  
         $msgErr = "Message is required";  
    }	
	
    //Email Validation   
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  
    
    //Number Validation  
    if (empty($_POST["mobileno"])) {  
            $mobilenoErr = "Mobile no is required";  
    } else {  
            $mobileno = input_data($_POST["mobileno"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
    }    
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/contact1.css">
	<style>  
		.error {color: #FF0001;}  
	</style> 
    <title>contact Us Form</title>
</head>
<hr id = "sepHeaderFooter">

<ul class="menu" style="list-style-type:disc">
	<li class="menu"><a href="index.html">Home</a></li>
    <li class="menu"><a href="registration.php">Registration</a></li>
    <li class="menu"><a href="src/login.php">Login</a></li>
    <li class="menu"><a href="contact1.php">Contact Us</a></li>
	<li class="menu"><a href="userAccount.php">User Account</a></li>
</ul>


<body>
    <div class="container">
<h1>
    Connect With Us
</h1>
<p>
   <b>If you have any question or queries a member of staff will always be happy to help.
   Free to contact us by telephone or email and<br>we will be sure to get back to you
   as soon as possible.</b>
<div class="contact-box">
  <div class="contact-left">
    <h3>Sent your request</h3>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" > 
        <div class="input-row">
            <div class="input-group">
                <label>Name</label>
                <input type="text" name="name">  <span class="error">* <?php echo $nameErr; ?> </span>		  
            </div>
            <div class="input-group">
                <label>Phone</label>
                <input type="text" name="mobileno">  
				<span class="error">* <?php echo $mobilenoErr; ?> </span> 
            </div>
            </div>
            <div class="input-row">
                <div class="input-group">
                    <label>E mail</label>
                    <input type="text" name="email">  
					<span class="error">* <?php echo $emailErr; ?> </span>  
                </div>

             </div>
                <label>
                    Message
                </label>
                <textarea rows="5" placeholder="Your Message"name="txtMessage">  </textarea>
				<span class="error">* <?php echo $msgErr; ?> </span> 

				<input type="submit" name="submit" value="Send">
    </form>
</div>
<div class="contact-right">
    <h3>Reach Us </h3>
    <table>
        <tr>
            <td>Email</td>
            <td>capitallabour@gmail.com</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>+94 70 383 1410</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>No12,Old Pussella Rd<br>Kandy<br></td>
        </tr>

    </table>

</div>

    </div>
    </div>
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

<?php  
	include("config.php");
    if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $msgErr == "" ) {  
        // get the post records
		$message = "";
		$txtName = $_POST['name'];
		$txtEmail = $_POST['email'];
		$txtPhone = $_POST['mobileno'];
		$txtMessage = $_POST['txtMessage'];

		// database insert SQL code
		$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

		// insert in database 
		$rs = mysqli_query($con, $sql);
		if($rs){
			//Javascript alert msg
			echo '<script>alert("Successfully submit your inquiry");</script>';
		}
	}  
    }      
?>  
  