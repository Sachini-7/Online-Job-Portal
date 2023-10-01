<?php 
include_once 'connection.php';

    $fullname =$_POST["fullname"];
    $dob = $_POST["dob"]; 
    $Caddress = $_POST["Caddress"]; 
    $City=$_POST["City"]; 
    $province =$_POST["province"];  
    $email =$_POST["email"]; 
    $pnumber = $_POST["pnumber"]; 
    $jposition=$_POST["jposition"];
    
 

    $sql = "INSERT INTO applyjob(`Full Name`, `Date of Birth`, `Current Address`, `City`, `Province`, `Email`, `Phone Number`,`Job Position`) VALUES ('$fullname','$dob' , '$Caddress','$City','$province','$email', '$pnumber','$jposition')";
    mysqli_query($conn,$sql);
    {
        echo "Job Applied Successfully.";
    }
    header("Location: ../userAccount.php");
   
  
    ?>