<?php
    session_start();
    if(empty($_SESSION['uname']))
    {
        
        echo "<script type='text/javascript'>  window.location='index.php'; </script>";
    }
    else
    {
        include "connection.php";
    }
    
    $addid=$_GET['id'];
    //echo $addid;
    $username=$_SESSION['uname'];
    $q=mysqli_query($conn,"select * from cart where sno='$addid' and username='$username'");
                    
    $array=mysqli_fetch_array($q);
   // echo $array['username'];
    $newqty=$array['quantity']+1;
    //echo $newqty;
    $que=mysqli_query($conn,"update cart set quantity='$newqty' where sno='$addid' and  username='$username';");
    
    echo "<script type='text/javascript'>  window.location='cartwithdata.php'; </script>";
    
    
    
    
    
    ?>
