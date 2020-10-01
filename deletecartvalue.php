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
        $snoid=$_GET['id'];
    
    
    $que=mysqli_query($conn,"delete from cart where sno='$snoid'");
    
    echo "<script type='text/javascript'>  window.location='cartwithdata.php'; </script>";
?>
