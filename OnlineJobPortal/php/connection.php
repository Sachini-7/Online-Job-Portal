<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "online job portal";

//create connection
$conn=new mysqli($dbservername, $dbusername, $dbpassword,$dbname  );

//check connection

if (!$conn) { 
die("Connection failed !" .mysqli_connect_error());
}
 echo "Connected successfully";

?>
