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


if(isset($_FILES['lightmodelogo'])){


$filename=$_FILES['lightmodelogo']['name'];
$tmp_file=$_FILES['lightmodelogo']['tmp_name'];
$file_type=$_FILES['lightmodelogo']['type'];//optional ,not used for file upload its just for check type of file
$file_size=$_FILES['lightmodelogo']['size'];//optional ,not used for file upload its just for check size of file

move_uploaded_file($tmp_file, "images/".$filename);

}

if(isset($_FILES['darkmodelogo'])){


$filename=$_FILES['darkmodelogo']['name'];
$tmp_file=$_FILES['darkmodelogo']['tmp_name'];
$file_type=$_FILES['darkmodelogo']['type'];//optional ,not used for file upload its just for check type of file
$file_size=$_FILES['darkmodelogo']['size'];//optional ,not used for file upload its just for check size of file

move_uploaded_file($tmp_file, "images/". $filename);

}


    
    if(isset($_POST['submit'])){
        if(!empty($_POST['companyname']) && (!empty($_FILES['lightmodelogo']['name']))){
        $companyname=$_POST['companyname'];
        $lightmodelogo=$_FILES['lightmodelogo']['name'];
        $darkmodelogo=$_FILES['darkmodelogo']['name'];
$q=mysqli_query($conn,"insert into company_details(companyname,companylogo,companylogoDarkMode) values('$companyname','$lightmodelogo','$darkmodelogo');");
echo "<script> alert('item added successfully');</script>";       
}
else{
    echo " <script> alert('Please fill all fields properly.');</script>";
}
    }
    
    
    
    
    
    



?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Add Company Details </title>
    <link rel="icon" href="images/icon-image.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="querries.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet">
<style>

    body{
        min-height:100vh;
    }
    
</style>


</head>



<body>


<header>
        <nav>
            <div class="row main-header">

            <div class="logo"> <a href="adminpage.php" > Dhonism </a></div>


                
                
            </div>


        </nav>

    </header>
<div class="add-details-container">
<h3 style="color:black;text-align:center;padding-top:20px;font-size:160%"> Add Company Details : </h3>
<form class="add-mobile-form" action="#" method="post" enctype="multipart/form-data">
<table class="addmobile-table">

  <tr><td>Company name</td> <td><input type="text" name="companyname" placeholder="Companyname"></td></tr>
  <tr><td>Light Mode Logo</td> <td><input type="file" name="lightmodelogo" style="border:none;background-color:transparent"></td></tr>
  <tr><td>Dark Mode Logo</td> <td><input type="file" name="darkmodelogo" style="border:none;background-color:transparent"></td></tr>
  
</table>

<button type="submit" name="submit" > Submit</button>





</form>
</div>
<script src="script.js"></script>
</body>


</html>



