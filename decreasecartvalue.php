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
    
    $addid=$_GET['id']; //store sno in this var,which is coming from cartwithdata.php page
    
    $username=$_SESSION['uname'];
    //then select data from the cart table using sno which is in $addid now
    $q=mysqli_query($conn,"select * from cart where sno='$addid' and username='$username'");
    //then store that data  in $array where sno= and username= condition
    $array=mysqli_fetch_array($q);
    
    //add one more column in cart table named quantity
    // decrease quantity by one
    $newqty=$array['quantity']-1;
    
    //now update this quantity in the cart table
    $que=mysqli_query($conn,"update cart set quantity='$newqty' where sno='$addid' and  username='$username';");
    
    if($newqty<=0)
    {
        $que=mysqli_query($conn,"delete from cart where sno='$addid'");
    }
    
    
    
   
    echo "<script type='text/javascript'>  window.location='cartwithdata.php'; </script>";
    
    
    
    
    
    ?>
