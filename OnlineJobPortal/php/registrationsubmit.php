<?php 
include_once 'connection.php';

    $fname =$_POST["fname"];
    $lname =$_POST["lname"];
    $gender = $_POST["gender"]; 
    $nic=$_POST["nic"]; 
    $email = $_POST["email"]; 
    $pnumber =$_POST["pnumber"];  
    $address =$_POST["address"]; 
    $country = $_POST["country"]; 
    $pwd= $_POST["pwd"]; 
    $cpwd = $_POST["cpwd"]; 
 

    $sql = "INSERT INTO registration(`First Name`, `Last Name`, `Gender`, `NIC`, `Email`, `Phone Number`, `Address`, `Country`, `Password`, `Confirm Password`) VALUES ('$fname','$lname' , '$gender', '$nic','$email','$pnumber','$address','$country', '$pwd', '$cpwd')";
    
    mysqli_query($conn,$sql);
    {
        echo "Registered successfully.";
    }
    header("Location: ../src/login.php");
   
    ?>

      


        

       

        
  




?>