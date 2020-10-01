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
    $q=mysqli_query($conn,"select * from  logindata where status='user';");
    
    
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Admin page</title>
    <link rel = "icon" href ="images/icon-image.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="querries.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet">   
</head>


    <body>

<!--------------------------------------------------
    
header

---------------------------------------------------->

<?php 
include 'header.php';


?>



<!-- 
    <h1 align="center" style="color:red"> Admin Panel </h1><br/><br/>

    <div class="maindiv">
        <div class="addmobile">
<a href="addmobiledetails.php"> <h2>Add mobile Details <h2>



      </a>
        </div>


        <div class="showmobile">
                <a href="showmobiledetails.php"> <h2>Show mobile Details </h2>



                </a>
        </div>


        <div class="regdetails">
            <a href="registrationdetails.php"> <h2>Registration Details </h2>



            </a>
        </div>



</div> -->


<div class='login-div row'> 
    <div style="padding:40px 0;text-align:center;margin-top:20px"><h1  style="color:red"> Admin Panel </h1> </div>
<div class="maindiv-admin-panel">
      

        <div class="outeradmindiv"><a href="addmobiledetails.php"> <div class="admin-box"><p>Add Mobile Details <p></div></a></div>
        <div class="outeradmindiv"> <a href="showmobiledetails.php"><div class="admin-box"> <p>Show mobile Details </p></div></a></div>
        <div class="outeradmindiv"> <a href="addcompanydetails.php">  <div class="admin-box"><p>Add Company Details <p></div></a></div>
        <div class="outeradmindiv"> <a href="showcompanydetails.php"><div class="admin-box"> <p>Show company Details </p></div></a></div>
        <div class="outeradmindiv"><a href="registrationdetails.php"><div class="admin-box"> <p>Show Registration Details </p></div></a></div>

</div>
</div>
<script src="script.js"></script>
    </body>










</html>
