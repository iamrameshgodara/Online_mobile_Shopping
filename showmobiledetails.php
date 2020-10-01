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
        

    $q=mysqli_query($conn,"select * from mobile_details;");
    
    if(isset($_POST['submit']))
    {
        
        $searchdetail=$_POST['searchdetail'];
        $q=mysqli_query($conn,"select * from mobile_details where companyname like  '%$searchdetail%' or modelno like '%$searchdetail%'or battery like '%$searchdetail%' or os like '%$searchdetail%' or display like '%$searchdetail%' or camera like '%$searchdetail%' or processor like '%$searchdetail%' or color like '%$searchdetail%' or RAM like '%$searchdetail%' or ROM like '%$searchdetail%' ;");
        
    }
    if(isset($_POST['refresh'])){
        $q=mysqli_query($conn,"select * from mobile_details;");
    }

?>




<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Mobile Details</title>
    <link rel="icon" href="images/icon-image.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="querries.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet">

    <style>
        a {
            text-decoration: none;

        }
    </style>




</head>

<body>

    <header>
        <nav >
            <div class="row main-header">

                <div class="logo"> <a href="adminpage.php"> Dhonism </a></div>




            </div>


        </nav>

    </header>


    <form action="#" method="post" class="show-mobile-details">
    <div class="search-item-show-items">   
    Search item from list: 
    
    <div class="search-bar"><input type="text" name="searchdetail" placeholder=" Search item from list...">

        <button type="submit" name="submit" ><i  class="fas fa-search"></i> </button>
    </div>
    <button  type="submit" name="refresh" style="width:auto;margin-left:20px;font-size:23px;color:white"><i class="fas fa-sync-alt"></i> </button>
    </div>

        




        <table class="show-mobile-details-table">
            <tr>
                <th>
                    sno
                </th>




                <th>
                    Model no
                </th>




                <th>
                    Company name
                </th>




                <th>
                    Price
                </th>




                <th>
                    RAM
                </th>




                <th>
                    ROM
                </th>




                <th>
                    Camera
                </th>




                <th>
                    image
                </th>





                <th>
                    Display
                </th>





                <th>
                    processor
                </th>





                <th>
                    OS
                </th>

                <th>
                    Battery
                </th>

                <th>
                    Color
                </th>


                <th>
                    Delete
                </th>
                <th>
                    Update
                </th>

            </tr>


            <?php
  while($ar=mysqli_fetch_array($q))
    {
    
?>
            <tr>
                <td>
                    <?php echo $ar['sno']; ?>
                </td>




                <td>
                    <?php echo $ar['modelno']; ?>

                </td>




                <td>
                    <?php echo $ar['companyname']; ?>

                </td>





                <td>
                    <?php echo $ar['price']; ?>

                </td>




                <td>
                    <?php echo $ar['ram']; ?>

                </td>




                <td>
                    <?php echo $ar['rom']; ?>

                </td>





                <td>
                    <?php echo $ar['camera']; ?>

                </td>





                <td>
                    <?php
                    if(!empty($ar['image'])){
                    ?>
                    <img src="images/<?php echo $ar['image']; ?>" height="100px" width="80px">
                        <?php
                    }
                    else{
                        echo " No image Uploaded";
                    }
                        ?>
                </td>





                <td>
                    <?php echo $ar['display']; ?>

                </td>





                <td>
                    <?php echo $ar['processor']; ?>

                </td>






                <td>
                    <?php echo $ar['os']; ?>

                </td>


                <td>
                    <?php echo $ar['battery']; ?>

                </td>


                <td>
                    <?php echo $ar['color']; ?>

                </td>



                <td >

                    <a href="deletemobiledetails.php?id=<?php echo $ar['sno']; ?>"> <i style=" color:black" class="fas fa-trash"></i> </a>
                   </td> 
                   <td >   
                <a href="updatemobiledetails.php?id=<?php echo $ar['sno']; ?>"> <i style=" color:black" class="fas fa-edit"></i> </a>
                </td> 

     </tr>





            <?php
    }
?>

        </table>




    </form>
    <script src="script.js"></script>
</body>



</html>