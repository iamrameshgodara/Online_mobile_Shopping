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
?>



<html>

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
</head>

<body>
<div class="row">
<h1 style="margin-top:40px"> Thanks for your order :)</h1>
<p> <a href="index.php" style="text-decoration:underline;color:orange"> click here</a> to go to home page </p>
</div>
<script src="script.js"></script>
</body>
</html>