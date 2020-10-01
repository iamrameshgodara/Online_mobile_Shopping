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
   
    $a=$_GET['id'];
    
    $q=mysqli_query($conn,"select * from company_details where sno='$a';");
    $arr=mysqli_fetch_array($q);
 
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



    if(isset($_POST['submit']))
    {
    
    $companyname=$_POST['companyname'];
    $lightmodelogo=$_FILES['lightmodelogo']['name'];
    $darkmodelogo=$_FILES['darkmodelogo']['name'];

       $que=mysqli_query($conn,"update company_details set companyname='$companyname' where sno='$a';");
        if(!empty($lightmodelogo)){
            $quelm=mysqli_query($conn,"update company_details set companylogo='$lightmodelogo' where sno='$a';");
        }
        if(!empty($darkmodelogo)){
            $quedm=mysqli_query($conn,"update company_details set companylogoDarkMode='$darkmodelogo' where sno='$a';");
        }

       
       
        echo "<script type='text/javascript'>  window.location='showcompanydetails.php'; </script>";
        
        
        
    }
    
   
    
    
    ?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Update</title>
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
                    <td>Company name </td>
                    <td><input type="text" name="companyname" value="<?php echo $arr['companyname']; ?>"></td>
                </tr>
                
               
                <tr >
                    <td>Light mode logo</td>
                    <td style="border:none;animation:none"><input type="file" name="lightmodelogo"  style="border:none;animation:none"></td>
                </tr>
                <tr >
                    <td>Dark mode logo</td>
                    <td style="border:none;animation:none"><input type="file" name="darkmodelogo"  style="border:none;animation:none"></td>
                </tr>
                
                <td colspan="2"> <button class="login-btn" type="submit" name="submit">Update </button></td>
                </tr>








            </table>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>