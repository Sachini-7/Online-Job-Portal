<?php
include "connection.php"; 
?>
<html>
    <head>
        <title>Registered Users</title>
        <link rel="stylesheet" href="../css/registeredusers.css">
</head>
<body>
    <h1>Registered Users</h1>
    <?php
                $db=mysqli_select_db($conn,'online job portal');
             $querry= "SELECT * FROM `registration` ";
                $querry_run= mysqli_query($conn,$querry);
                
                ?>
   <center> <table border="1" >
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email<th>
        </tr>
        <?php
                if (mysqli_num_rows($querry_run) > 0)
                {
                    while($row=mysqli_fetch_assoc($querry_run))
                    {
                        ?>
                        <tbody>
                         <tr>
                            <th > <?php echo  $row['First Name']; ?> </th>
                              <th><?php   echo $row['Last Name'];?></th>
                              <th><?php echo $row['Email'];?></th>
                         </tr>
                         </tbody>
                         <?php
            
               
                    }
                }else{
                    echo "No record found";
                }
                     ?>   
                     </table></center>

</body>
<html>
    


