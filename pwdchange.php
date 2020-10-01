<?php
session_start();
$username=$_SESSION['uname'];
if(empty($_SESSION['uname']))
{
    
    echo "<script type='text/javascript'>  window.location='loginpage.php'; </script>";
}
else
{
    include "connection.php";
}
$q=mysqli_query($conn,"select * from logindata where username='$username' ;");
//$arr=mysqli_fetch_array($q)


$updatearr=mysqli_fetch_array($q);


if(isset($_POST['updatesubmit']))
    {
        $oldpwd=mysqli_real_escape_string($conn,md5($_POST['oldpwd']));
        $newpwd=mysqli_real_escape_string($conn,md5($_POST['newpwd']));
        $confirmpwd=mysqli_real_escape_string($conn,md5($_POST['confirmpwd']));
        if($oldpwd===$updatearr['password'] && $newpwd===$confirmpwd){
        $update=mysqli_query($conn,"update logindata set password='$newpwd' where username='$username';");
        echo " <script> alert('Password changed !'); </script>  ";
        echo " <script> window.location='userProfile.php';</script>";
        //header("location: userProfile.php");
        }
        else{
            echo " <script> alert('wrong details !'); </script>  ";
        }
        
        
        
    }
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Password Edit</title>
    <link rel="icon" href="images/icon-image.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="querries.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet">
<style>


table{
    text-align:center;
    margin:0 auto;
    margin-top:50px;
   
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

<header>
        <nav>
            <div class="row main-header">

            <div class="logo"> <a href="userProfile.php" > Dhonism </a></div>


                
                
            </div>


        </nav>

    </header>




    <div class="row login-div">



        <form class="login-form" action="#" method="post">
        <div class="login-panel-heading"> <h3 >hi ! <?php echo $updatearr['fname']." ".$updatearr['lname'];?></h3> </div>
            <table>

                <tr>
                    <td>Old Password:</td>
                    <td><input type="text" name="oldpwd" required> </td> </tr> <tr>
                    <td>New Password:</td>
                    <td><input type="text" name="newpwd" required></td>
                </tr>
                <tr>
                    <td>Confrm Password:</td>
                    <td><input type="text" name="confirmpwd" required></td>
                </tr>

            </table>
            <br>
            <button class="profile-update-btn btn-all" type="submit" name="updatesubmit">Submit</button>
        </form>




    </div>
   

   

<script src="script.js"></script>
</body>


</html>