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

    if(isset($_FILES['image'])){


        $file_name=$_FILES['image']['name'];
        $file_type=$_FILES['image']['type'];
        $tmp_file=$_FILES['image']['tmp_name'];
        $file_size=$_FILES['image']['size'];
           
            move_uploaded_file($tmp_file, "images/" . $file_name);
          
    }

    if(isset($_POST['submit']))
    {
        $modelno=$_POST['modelno'];
        $companyname=$_POST['companyname'];
        $price=$_POST['price'];
        $ram=$_POST['ram'];
        $rom=$_POST['rom'];
        $camera=$_POST['camera'];
        $image=$_FILES['image']['name'];
        $display=$_POST['display'];
        $processor=$_POST['processor'];
        $os=$_POST['os'];
        $battery=$_POST['battery'];
        $color=$_POST['color'];
        
        
        
       
        $q=mysqli_query($conn,"insert into mobile_details(modelno,companyname,price,ram,rom,camera,image,display,processor,os,battery,color) values('$modelno','$companyname','$price','$ram','$rom','$camera','$image','$display','$processor','$os','$battery','$color');");
        echo "<script> alert('item added successfully');</script>";
    }
    
    
    
    
    
    
    
    



?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Add Mobile Details </title>
    <link rel="icon" href="images/icon-image.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="querries.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet">



</head>



<body>


    <header>
        <nav>
            <div class="row main-header">

                <div class="logo"> <a href="adminpage.php"> Dhonism </a></div>




            </div>


        </nav>

    </header>

    <div class="add-details-container">
        <h3 style="color:black;text-align:center;padding-top:20px;font-size:160%"> Add Mobile Details : </h3>
        <form class="add-mobile-form" action="#" method="post" enctype="multipart/form-data">
            <table class="addmobile-table">
                <tr>
                    <td>Model no</td>
                    <td> <input type="text" name="modelno" placeholder="Modelno"></td>
                </tr>
                <tr>
                    <td>Company name</td>
                    <td><input type="text" name="companyname" placeholder="Companyname"></td>
                </tr>
                <tr>
                    <td>Price </td>
                    <td><input type="text" name="price" placeholder="Price"></td>
                </tr>
                <tr>
                    <td>RAM</td>
                    <td><input type="text" name="ram" placeholder="RAM"></td>
                </tr>
                <tr>
                    <td>ROM</td>
                    <td> <input type="text" name="rom" placeholder="ROM"></td>
                </tr>
                <tr>
                    <td>Camera </td>
                    <td> <input type="text" name="camera" placeholder="Camera"></td>
                </tr>
                <tr>
                    <td> Image </td>
                    <td> <input type="file" style="border:none;background-color:transparent" name="image"
                            placeholder="Upload"> </td>
                </tr>
                <tr>
                    <td> Display </td>
                    <td> <input type="text" name="display" placeholder="Display"> </td>
                </tr>
                <tr>
                    <td> Processor </td>
                    <td> <input type="text" name="processor" placeholder="Processor"> </td>
                </tr>
                <tr>
                    <td>OS </td>
                    <td> <input type="text" name="os" placeholder="Operatingsystem"> </td>
                </tr>
                <tr>
                    <td> Battery </td>
                    <td> <input type="text" name="battery" placeholder="battery"> </td>
                </tr>
                <tr>
                    <td>Color </td>
                    <td> <input type="text" name="color" placeholder="color"> </td>
                </tr>



            </table>

            <button type="submit" name="submit"> Submit</button>





        </form>
    </div>
    <script src="script.js"></script>
</body>


</html>