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
    $a=$_GET['id'];
    $q=mysqli_query($conn,"select * from mobile_details where sno='$a';");
    $arr=mysqli_fetch_array($q);
    if(isset($_FILES['image'])){
    
    
        $filename=$_FILES['image']['name'];
        $tmp_file=$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];//optional ,not used for file upload its just for check type of file
        $file_size=$_FILES['image']['size'];//optional ,not used for file upload its just for check size of file
        
        move_uploaded_file($tmp_file, "images/". $filename);
        
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
    
       $que=mysqli_query($conn,"update mobile_details set modelno='$modelno',companyname='$companyname',price='$price',ram='$ram',rom='$rom',camera='$camera',display='$display',processor='$processor',os='$os' where sno='$a';");
        if(!empty($image)){
            $queimg=mysqli_query($conn,"update mobile_details set image='$image' where sno='$a';");
        }
       
       
        echo "<script type='text/javascript'>  window.location='showmobiledetails.php'; </script>";
        
        
    } 
    }
    
   
    
    
    ?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Update mobile details</title>
    <link rel="icon" href="images/icon-image.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="querries.css">
    <link rel="stylesheet" type="text/css" href="grid.css">

    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>


    <header>
        <nav>
            <div class="row main-header">

                <div class="logo"> <a href="adminpage.php"> Dhonism </a></div>




            </div>


        </nav>

    </header>
    <div class="row login-div">

        <form class="login-form" action="#" method="post" enctype="multipart/form-data">
            <div class="login-panel-heading">
                <h3>Update Details</h3>
            </div>
            <table>


                <tr>
                    <td>modelno </td>
                    <td><input type="text" name="modelno" value="<?php echo $arr['modelno']; ?>"></td>
                </tr>
                <tr>
                    <td>company name </td>
                    <td><input type="text" name="companyname" value="<?php echo $arr['companyname']; ?>"></td>
                </tr>
                <tr>
                    <td>price</td>
                    <td><input type="text" name="price" value="<?php echo $arr['price']; ?>"></td>
                </tr>
                <tr>
                    <td>RAM</td>
                    <td><input type="text" name="ram" value="<?php echo $arr['ram']; ?>"></td>
                </tr>
                <tr>
                    <td>ROM</td>
                    <td><input type="text" name="rom" value="<?php echo $arr['rom']; ?>"></td>
                </tr>
                <tr>
                    <td>CAMERA</td>
                    <td><input type="text" name="camera" value="<?php echo $arr['camera']; ?>"></td>
                </tr>
                <tr >
                    <td>image</td>
                    <td style="border:none;animation:none"><input type="file" name="image"  style="border:none;animation:none"></td>
                </tr>
                <tr>
                    <td>DISPLAY</td>
                    <td><input type="text" name="display" value="<?php echo $arr['display']; ?>"></td>
                </tr>
                <tr>
                    <td>processor</td>
                    <td> <input type="text" name="processor" value="<?php echo $arr['processor']; ?>"></td>
                </tr>
                <tr>
                    <td>OS</td>
                    <td> <input type="text" name="os" value="<?php echo $arr['os']; ?>"></td>
                </tr>
                <td colspan="2"> <button class="login-btn" type="submit" name="submit">Update </button></td>
                </tr>








            </table>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>