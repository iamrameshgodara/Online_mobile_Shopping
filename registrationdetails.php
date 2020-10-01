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
        
    
    $q=mysqli_query($conn,"select * from logindata where status='user' ;");
    
?>







<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Registration Details</title>
    <link rel="icon" href="images/icon-image.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="querries.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet">
</head>



<body>


<header>
        <nav>
            <div class="row main-header">

                <div  class="logo"> <a href="adminpage.php"> Dhonism </a></div>




            </div>


        </nav>

    </header>

<div class=" row"></div>
    <form action="#" method="post" class="show-mobile-details">
<h3 align="center" style="margin-top:40px"> User Data </h3>




<table class="show-mobile-details-table">
            <tr>
                            <th>
                                S. no.
                            </th>

                            <th>
                                    User name
                            </th>

                            

                            <th>
                                        First name
                            </th>

                            <th>
                                    Last name
                            </th>

                            <th>
                                    Address
                            </th>

                            <th>
                                    Contact no
                            </th>

            </tr>


<?php
    while($ar=mysqli_fetch_array($q))
    {
        ?>
         <tr>
    <td>
<?php
    echo $ar['sno'];
    ?>
</td>



<td>
<?php
    echo $ar['username'];
    ?>
</td>






<td>
<?php
    echo $ar['fname'];
    ?>
</td>


<td>
<?php
    echo $ar['lname'];
    ?>
</td>

<td>
<?php
    echo $ar['address'];
    ?>
</td>



<td>
<?php
    echo $ar['contactno'];
    ?>
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
