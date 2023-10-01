<?php
  include_once 'connection.php';

        $jobTitle = $_POST['jobTitle'];
        $jobCategory = $_POST['jobCategory'];
        $description = $_POST['description'];
      
        $sql = "insert into postJob (jobTitle,jobCategory,description) values('$jobTitle','$jobCategory','$description')";
      
       /* if(sql_query($conn, $sql_query)){
            echo "New details entry inserted successfully!";
            header("Location: userAccount.php");
        }
        else{
            echo"error".sql."".mysqli_error($conn);
        }
        mysql_close($conn);
      }
      */
    //  sqli_query($conn, $sql);
   ///  header("Location:userAccount.php");
   if(isset($_POST["save"])){
    header("location:userAccount.php");
   }
    
    ?>

<!DOCTYPE html>
<html>
  

<head>
	<title>Post Job</title>
   <link rel="stylesheet" href="postJob.css"/>
   
</head> 
 
<body>


  <header class="header">
    <img src="userAccountImages/Capital_Labour__1_-removebg-preview.png" class="img1">

 
  <form action="postjob.php" method="post">
    <div  style="margin-left:20%;width:800px; border:2px solid white; min-height: 650px;">
                 
      <br><br>  <span style="margin-left:300px; font-size: 40px;"><strong>Post Job</strong></span>  <br><br><br>
      <div style="margin-left: 250px;">      

		  <label for="jobTitle"><b>Job Title</b></label><br>
		  <input type="textt" placeholder="Enter Job Title" name="jobTitle" id="jobTitle" required><br><br>

  
		  <label for="jobCategory"><b>Job Category</b></label><br>
		  <input type="textt" placeholder="Enter Job Category" name="jobCategory" id="jobCategory" required><br><br>


		  <label for="description"><b>Description</b></label><br>
		  <input type="textt" placeholder="Enter Description" name="description" id="description" required><br><br><br><br>
  
		 
  
		  <button type="submit"  name="save" style="width:50%">Upload </a></button><br>
	
  
      <br><br>
      	
     </div>
    </div>  

	 
    <br><br>         
  </form>


</body>
</html>