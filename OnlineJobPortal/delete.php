<?php

    include "connection.php"; 
    $db=mysqli_select_db($conn,'online job portal');

    if(isset($_get['delete'])){
        $id=$_get['id'];

        $query="Delete  from 'appliedjobs' where id='$id'";
        $querry_run=mysqli_query($conn,$querry);

        if($querry_run){
            echo '<script>alert("Data is Deleted");</script>';
            header("location:userAccount.php");
        }else{
            echo '<script>alert("Data not Deleted");</script>';
        }
    }
?>
