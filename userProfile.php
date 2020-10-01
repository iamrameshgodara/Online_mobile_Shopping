<?php
session_start();
$username=$_SESSION['uname'];
if(!empty($_SESSION['uname']))
{
    include "connection.php";
   
}else{
    echo "<script type='text/javascript'>  window.location='loginpage.php'; </script>";
}

$q=mysqli_query($conn,"select * from logindata where username='$username' ;");
//$arr=mysqli_fetch_array($q)


$updatearr=mysqli_fetch_array($q);


if(isset($_POST['updatesubmit']))
    {
        $fn=$_POST['fname'];
        $ln=$_POST['lname'];
        $un=$_POST['username'];
        $ad=$_POST['address'];
        $cont=$_POST['contactno'];
        $email=$_POST['email'];
        
        $update=mysqli_query($conn,"update logindata set fname='$fn',lname='$ln',username='$un',address='$ad',contactno='$cont',email='$email' where username='$username';");
        
        echo " <script> alert('Profile successfully updated');</script>";
        echo "<script type='text/javascript'>  window.location='userProfile.php'; </script>";
        
        
        
        
    }
?>





<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Dhonism Store</title>
    <link rel="icon" href="images/icon-image.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="querries.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
    
    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<style>


table{
    text-align:center;
    margin:0 auto;
    
   
}
td{
    padding:10px 0;
}
input:focus{

animation:glow 800ms ease-in-out infinite alternate;
outline:none;
}

@keyframes glow{

0%{
border-color:#393;
box-shadow: 2px 2px 10px -6px #393, -2px -2px 10px -6px #393;
}
100%{
    border-color:#6f6;
   
}
}


</style>

</head>

<body>
<!--------------------------------------------------
    
header

---------------------------------------------------->

<?php 
include 'header.php';


?>
<?php

$roleq=mysqli_query($conn,"select status from logindata where username='$username'");
while($roles=mysqli_fetch_assoc($roleq)){
    $role=$roles['status'];
}
if($role=='admin'){
?>
<a href="adminpage.php"style='text-decoration:underline;margin:20px'>go to admin panel</a>
<?php

}
?>


    <div class="row login-div">



        <form class="login-form" action="#" method="post" >
        <div class="login-panel-heading"> <h3 >hi ! <?php echo $updatearr['fname']." ".$updatearr['lname'];?></h3> </div>
           
            <table>

                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="fname" value="<?php echo $updatearr['fname']; ?>"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lname" value="<?php echo $updatearr['lname']; ?>"></td>
                </tr>
                <tr>
                    <td>User Name:</td>
                    <td><input type="text" name="username" value="<?php echo $updatearr['username']; ?>"></td>
                </tr>
                <tr>
                    <td>Email Address:</td>
                    <td><input type="email" name="email" value="<?php echo $updatearr['email']; ?>"></td>
                </tr>
                <tr>
                    <td>Contact:</td>
                    <td><input type="text" name="contactno" value="<?php echo $updatearr['contactno']; ?>"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address" value="<?php echo $updatearr['address']; ?>"></td>
                </tr>
                <tr><td colspan='2' ><button class="profile-update-btn btn-all" type="submit" name="updatesubmit">update profile</button></td></tr>
                <tr><td colspan='2' > <a class="pwd-change-link" href="pwdchange.php">change password </a></td></tr>
                <tr><td colspan='2'><a class="logout-btn btn-all" href="logout.php">Log out </a></td></tr>
                
            </table>
            
           
                
            

          
           
            


        </form>




    </div>
<script src="script.js"></script>
</body>


</html>