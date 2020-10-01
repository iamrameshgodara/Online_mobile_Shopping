<?php
    session_start();
    
    
    
    include "connection.php";
    
    
    
    
    
    $iphonesq=mysqli_query($conn,"select * from mobile_details where companyname='apple' order by ram ;");
    
    $a=0;
    $hotsellingq=mysqli_query($conn,"select * from mobile_details  where os!='no' order by price ;");
    $hotcount=0;
    $q=mysqli_query($conn,"select * from mobile_details ;");
    $ar=mysqli_fetch_array($q);
    /*this $ar is used becoz one array is already used in while loop so cant fetch values here so used this here */
    
    
    if(isset($_POST['loginsubmit']))
    {
        
        
        
        $u=mysqli_real_escape_string($conn,$_POST['loginusername']);
        $p=mysqli_real_escape_string($conn,md5($_POST['loginpassword']));
        //$u=$_POST['loginusername'];correct but can be hacked
        //$p=$_POST['loginpassword'];correct but can be hacked
        
        $q=mysqli_query($conn,"select * from logindata where username='$u' and password='$p';");
        $c=mysqli_num_rows($q);
        $arr=mysqli_fetch_assoc($q);
        $_SESSION['uname']=mysqli_real_escape_string($conn,$arr['username']);
        if($arr['status']=='user' && $c==1)
        {
            echo "<script type='text/javascript'>  window.location='index.php'; </script>";
            
        }
        elseif($arr['status']=='admin' && $c==1 )
        {
            echo "<script type='text/javascript'>  window.location='adminpage.php'; </script>";
            
        }
        else
        {
            echo "<script> alert('user not found... '); </script>";
            
        }
        
        
        
        
        
    }
 
    ?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Login page</title>
    <link rel="icon" href="images/icon-image.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="querries.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<!-- some style is in style.css file -->
</head>

<body>

    <header>
        <nav>
            <div class="row main-header">

            <div class="logo"> <a href="index.php" > Dhonism </a></div>


                
                
            </div>


        </nav>

    </header>



    <div class="row login-div">



        <!-- <form class="profile-update" action="#" method="post">

            <table>

                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="loginusername" placeholder="username"> </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="loginpassword" placeholder="Password"></td>
                </tr>

            </table>

            <button class="profile-update-btn" type="submit" name="loginsubmit">Login</button>
            <br><br>
            <b>dont have account ?</b> <a style="text-decoration:underline;color:rgb(230, 99, 99);"
                href="signupPage.php"> click here </a>
        </form> -->



<form class="login-form" action="#" method="post">
  <div class="login-panel-heading"> <h3 >Login</h3> </div>
<table>
    <tr>
        <td> User name</td>
  <td><input type="text" name="loginusername"  auto_complete="off" required></td></tr>
<tr>
<td> Password</td>
  <td><input type="password" name="loginpassword"  auto_complete="off" required></td>
</tr>

<tr>
<td colspan="2"><button class="login-btn btn-all" type="submit" name="loginsubmit">Login</button> </td></tr>
<tr><td colspan="2">
<p style="font-size:17px">don't have account ? 
<a style="text-decoration:underline;color:purple"
href="signuppage.php"> click here </a></p>
</td>
</tr>
</table>

</form>










    </div>






<script src="script.js"></script>
</body>

</html>
