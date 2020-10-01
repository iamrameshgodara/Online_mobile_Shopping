<?php
    session_start();
    if(empty($_SESSION['uname'])){
        echo "<script type='text/javascript'>  window.location='index.php'; </script>";
    }else{
        include "connection.php";
    }
    $a=$_GET['id'];
    


?>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Buy Now</title>
    <link rel="icon" href="images/icon-image.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="querries.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<style>

table{
    
}
tr{
    margin:10px 0;
}
table tr td{
    margin:20px;
    
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
<br>
<h2>Payment Gateway: </h2>
<form action="success.php" method="post" style="text-align:center">
<table >
<tr><td colspan="2">Amount to pay:<?php echo $a;  ?></td></tr>
<tr><td>enter account number:</td><td><input type="text" name="accountnumber" placeholder="Account number"></td></tr>
<tr><td>enter account holder name:</td><td><input type="text" name="accountname" placeholder="Account holder name "></td></tr>
<tr><td>enter IFSC Code:</td><td><input type="text" name="ifsccode" placeholder=" IFSC Code"></td></tr>
<tr><td>enter Bank name:</td><td><input type="text" name="bankname" placeholder=" Bank name"></td></tr>
<tr><td colspan="2"><input type="submit" name="proceedtopay" value="Proceed"></td></tr>


</table>
<br/>

 <br/>
 <br/>

<br/>



<form>
</div>
<script src="script.js"></script>
</body>





</html>
