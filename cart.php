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
    
    if(isset($_GET['id'])){
       $idvar=$_GET['id'];
    
    

   
    
        $q=mysqli_query($conn,"select * from mobile_details where sno='$idvar';");
    //$quer=mysqli_query($conn,"select * from mobile_details where sno='$idvar';");
    $arr=mysqli_fetch_array($q);
    $username=$_SESSION['uname'];
    $companyname=$arr['companyname'];
    $modelno=$arr['modelno'];
    $price=$arr['price'];
    $image=$arr['image'];
    // $rom=$arr['rom'];
    // $color=$arr['color'];
    //echo $companyname.$username.$modelno.$price.$image;
    $checkq=mysqli_query($conn,"select username from cart where username='$username' and modelno='$modelno';");
    $c=mysqli_num_rows($checkq);
    
    if(empty($c)){
    $que=mysqli_query($conn,"insert into cart(username,companyname,modelno,price,image) values('$username','$companyname','$modelno','$price','$image');");
    
    
    

    
        echo "<script type='text/javascript'>  window.location='cartwithdata.php'; </script>";
    }
    else{
        echo "<script type='text/javascript'>  window.location='cartwithdata.php'; </script>";
   
   
    }
    
}
    
?>


