<?php
   include "connection.php";
    
    if(isset($_POST['submit']))
    {
        $fn= mysqli_real_escape_string($conn,$_POST['fname']);
        $ln=mysqli_real_escape_string($conn,$_POST['lname']);
        $un=mysqli_real_escape_string($conn,$_POST['username']);
        $pwd=mysqli_real_escape_string($conn,md5($_POST['password']));
        $ad=mysqli_real_escape_string($conn,$_POST['address']);
        $cont=mysqli_real_escape_string($conn,$_POST['contact']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
       
       
       
        
        $results= mysqli_query($conn," select username from logindata where username = '$un' ");
        
         
        
        if(mysqli_num_rows($results) > 0)
        {

            echo " <script> alert('username already exists...') </script>";
        }
        else
        {
        $supq=mysqli_query($conn,"insert into logindata(username,password,fname,lname,address,contactno,status,email)  values('$un','$pwd','$fn','$ln','$ad','$cont','user','$email');");
        
        echo "<script type='text/javascript'>  window.location='loginpage.php'; </script>";
       
        
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Sign up</title>
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

            <div class="logo"> <a href="index.php" > Dhonism </a></div>


                
                
            </div>


        </nav>

    </header>




    <div class="row login-div">



      



<form class="login-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
<div class="login-panel-heading"> <h3 >Register</h3> </div>

<table>

<tr>         <td>First name</td>  <td><input type="text" name="fname" placeholder="First name" required></td>                 </tr>
<tr>         <td>Last name</td> <td><input type="text" name="lname" placeholder="Lastname" required></td>                 </tr>
<tr>         <td>User name</td>               <td><input type="text" name="username" placeholder="Username" required></td>                 </tr>
<tr>         <td>Password</td>               <td><input type="password" name="password" placeholder="Password" required></td>                 </tr>
<tr>         <td>Email</td>               <td><input type="email" name="email" placeholder="email"></td>                 </tr>
<tr>         <td>Address</td>               <td><input type="text" name="address" placeholder="Address"></td>                 </tr>
<tr>         <td>Contact no.</td>               <td><input type="text" name="contact" placeholder="Contactno"></td>                 </tr>
<tr>                      <td colspan=2><button class="login-btn" type="submit" name="submit">Sign up</button></td>                 </tr>
<tr>         <td colspan="2">
<p style="font-size:17px">have an account ? 
<a style="text-decoration:underline;color:purple"
href="loginpage.php"> click here </a></p>
</td>   </tr>

</table>

</form>



    </div>



    <script src="script.js"></script>
</body>

</html>