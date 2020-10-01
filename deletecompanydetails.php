<?php
    
    session_start();
    if(empty($_SESSION['uname']))
    {
        
        echo "<script type='text/javascript'>  window.location='loginpage.php'; </script>";
    }
    else
    {
        include "connection.php";
    }
    
    
    $a=$_GET['id'];
    
    $q=mysqli_query($conn,"delete from company_details where sno='$a';");
    
    
    
   
 
    
    
    echo "<script type='text/javascript'>  window.location='showcompanydetails.php'; </script>";
?>

