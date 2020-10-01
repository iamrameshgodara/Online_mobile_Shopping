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
    $username=$_SESSION['uname'];
    $qur=mysqli_query($conn,"select quantity from cart where username='$username';");
    
    $quarr=mysqli_fetch_array($qur);
    
    
    
    
    $price=0;
    
    

    
    
    $importcartdata=mysqli_query($conn,"select * from cart where username='$username';");
    
    
    
    
    ?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Cart</title>
    <link rel="icon" href="images/icon-image.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="querries.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet">

</head>
<body>
<!--------------------------------------------------
    
header and filter

---------------------------------------------------->

<?php 
include 'header.php';

?>


    <?php
   if(!empty($quarr))
    
    {
      ?>
    <section>



        <div class="row main-cart">
            <h1 style="text-align:center;"><b>Cart Items </b> </h1>

        </div>
        <?php
    while($arr=mysqli_fetch_array($importcartdata))
    {
        $amountofsingle=$arr['price']*$arr['quantity'];
        $price=$amountofsingle+$price;
        
        ?>
        <div class="row cart-items">
            <div class=" cart-image">
               <a href="indexmobi2.php? id=<?php echo $arr['modelno']; ?>"><img src="images/<?php echo $arr['image']; ?>"> </a><br />

            </div>

            <div class="cart-disc">

                <?php echo $arr['companyname']." ".$arr['modelno'] ; ?> <br><br>
                <?php echo "PRICE: &#8377; ".$amountofsingle; ?>
                <br> <br> Quantity: 
                <a href="decreasecartvalue.php? id=<?php echo $arr['sno'];?>"> <i
                        class="fas fa-minus-circle"></i> </a> 
                        
                        <?php echo $arr['quantity']; ?> <a
                    href="addcartvalue.php? id=<?php echo $arr['sno'];?>"><i class="fas fa-plus-circle"></i></a>
                <br><br><a class="remove-btn" href="deletecartvalue.php? id=<?php echo $arr['sno'];?>">Remove </a>
            </div>

        </div>
        <br>
        
        <?php
    }
?>

</section>
        <div class="row">
            <div class="total-amount ">
                <p> Total amount: &#8377 
                    <?php
                            echo "<b>".$price."</b>";
                            ?>
                </p>
            
              <a  class="pay-btn btn-all" href="buynow.php? id=<?php echo $price;?>"> pay now </a>

            </div>
            </div>

        <?php
    }
    else
    {
    ?>

        <div class="row order-not-found">
        <img style="margin-top:10vh" src="images/order.gif"><br>
        <a class="shop-more-btn btn-all" href="index.php">shop more </a>
        </div>
        <?php 
    } 
    
    ?>

<?php 
    
    require "footer.php"; 
    ?>

            <script src="script.js"> </script>
</body>

</html>