<?php
    session_start();
    
    
    /* if(empty($_SESSION['uname']))
     {
     header("location: login.php");
     
     }  */
    
     include "connection.php";
        
    
    


/*

     if(isset($_GET['id'])){
        $idfordata=$_GET['id'];
        $_SESSION['idfordata']=$idfordata;
        
        }
        if(isset($_SESSION['idfordata'])){
            $sessioniddata=$_SESSION['idfordata'];
    
        }
        
        
        if(isset($_GET['currentpage'])){
        $currentpage=$_GET['currentpage'];
       
        }
        else{
            $currentpage=1;
        }
       
        
        $limit=3;
        $offset=($currentpage-1) * $limit;
            
        $qtotal=mysqli_query($conn,"select * from mobile_details where companyname= '$sessioniddata' or sno='$sessioniddata' or os='$sessioniddata'  ;");
        $q=mysqli_query($conn,"select * from mobile_details where companyname='$sessioniddata' or sno='$sessioniddata' or os='$sessioniddata' limit $offset, $limit  ;");
        
        $count=mysqli_num_rows($q);
        $result=mysqli_num_rows($qtotal);
        if($result >0){
         $totalpage=ceil($result / $limit);
        
        
        }
*/    










    //$q=mysqli_query($conn,"select * from mobile_details ;");

    if(isset($_GET['topid'])){
        $idfortop=$_GET['topid'];
        $_SESSION['idfortop']=$idfortop;
        
        }

        if(isset($_SESSION['idfortop'])){
            $sessiontopiddata=$_SESSION['idfortop'];
    
        }
        
        if(isset($_GET['currentpage'])){
            $currentpage=$_GET['currentpage'];
           
            }
            else{
                $currentpage=1;
            }
            $limit=3;

            $offset=($currentpage-1) * $limit;

           



    // $idfortop=$_GET['topid'];
    
    
    
    if($sessiontopiddata=='topcameraphone')
    {

        $qtotal=mysqli_query($conn,"select * from mobile_details order by camera desc;");
        $q=mysqli_query($conn,"select * from mobile_details order by camera desc limit $offset, $limit ;");
    }
    
    else
    if($sessiontopiddata=='topbatteryphone')
    {
        
       
        

        $qtotal=mysqli_query($conn,"select * from mobile_details order by battery desc;");
        $q=mysqli_query($conn,"select * from mobile_details order by battery desc limit $offset, $limit ;");
        
    }
    else
    if($sessiontopiddata=='topramphone')
    {
        
       
         
        $qtotal=mysqli_query($conn,"select * from mobile_details order by ram desc;");
        $q=mysqli_query($conn,"select * from mobile_details order by ram desc limit $offset, $limit ;");
        
    }
    
    else
    if($sessiontopiddata=='androidphones')
    {
        
       
         
        $qtotal=mysqli_query($conn,"select * from mobile_details where os='android' order by rom desc;");
        $q=mysqli_query($conn,"select * from mobile_details where os='android' order by rom desc limit $offset, $limit ;");
        
    }
    
    else
    if($sessiontopiddata=='hightolow')
    {
        
        
        

        $qtotal=mysqli_query($conn,"select * from mobile_details order by price desc;");
        $q=mysqli_query($conn,"select * from mobile_details order by price desc limit $offset, $limit ;");
        
    }
    
    
    else
    if($sessiontopiddata=='lowtohigh')
    {
        
        
        
        $qtotal=mysqli_query($conn,"select * from mobile_details order by price asc;");
        $q=mysqli_query($conn,"select * from mobile_details order by price asc limit $offset, $limit ;");
        
    }
    
    
    
    
    else
   
   
    if($sessiontopiddata=='showallhot')
    {
        
        
        $qtotal=mysqli_query($conn,"select * from mobile_details order by rom desc;");
        $q=mysqli_query($conn,"select * from mobile_details order by price desc limit $offset, $limit ;"); 
        
        
    }
  else{
    
    }



    
    $count=mysqli_num_rows($q);
    $result=mysqli_num_rows($qtotal);
    $totalpage=0;
    if($result >0){
     $totalpage=ceil($result / $limit);
    
    
    }
    
    
    
    
    
    
    
    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Mobile details</title>
    <link rel="icon" href="images/icon-image.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="querries.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet">

</head>

<body>
<!--------------------------------------------------
    
header and filter

---------------------------------------------------->

<?php 
include 'header.php';
include 'filter.php';

?>


    <section class=" mobile-details">
       
       
    <?php
        //session used coz $search's data stored in session so on changing 
        //page $search will not be null
    if(empty($sessiontopiddata) || $count===0)
    {
        
        ?>
        <div class="row order-not-found">
            <img src="images/order.gif"><br>
            <a class="shop-more-btn btn-all" href="index.php">shop more </a>
        </div>



        <?php
    }
    else
    {
       
   
        
    while($arr=mysqli_fetch_array($q))
    {
        
        
        ?>

        <div class="image-plus-desc">
            <div class="row detail-box">


                <div class="col span-1-of-2 mobile-details-image">

                    <img src="images/<?php echo $arr['image'] ;?>">
                    <p>  <span class="capitalize"><?php echo $arr['companyname']." "; ?></span><?php echo $arr['modelno']; ?> </p>

                            Price: <b>&#x20B9; <?php echo $arr['price']; ?> </b>

                </div>

                <div class=" add-buy-btn-media">

                    <a class=" btn addtocart btn-all" href="cart.php? id=<?php echo $arr['sno']; ?>"> Add to cart </a>
                    <a class="btn buynow btn-all" href="cart.php? id=<?php echo $arr['sno']; ?>"> Buy now </a>

                </div>


                <div class="col span-1-of-2 mobile-specification">

                    <table>

                        <div class="specification-name">
                            <h2> Specifications </h2>
                        </div>
                        <p>
                            <tr>
                                <td>Model No : </td>
                                <td><?php echo $arr['modelno']; ?> </td>
                            </tr>
                        </p>
                        <tr>
                            <td>Company name :</td>
                            <td> <span class="capitalize"><?php echo $arr['companyname']; ?></span></td>
                        </tr>
                        <tr>
                            <td>Price : </td>
                            <td><?php echo "&#x20B9;".$arr['price']; ?></td>
                        </tr>
                        <tr>
                            <td>RAM : </td>
                            <td><?php echo $arr['ram']." GB"; ?></td>
                        </tr>
                        <tr>
                            <td>ROM : </td>
                            <td><?php echo $arr['rom']." GB"; ?></td>
                        </tr>
                        <tr>
                            <td>Camera : </td>
                            <td><?php echo $arr['camera']." MP"; ?></td>
                        </tr>
                        <tr>
                            <td>Display :</td>
                            <td> <?php echo $arr['display']; ?></td>
                        </tr>
                        <tr>
                            <td>Processor :</td>
                            <td> <?php echo $arr['processor']; ?></td>
                        </tr>
                        <tr>
                            <td>Operating System :</td>
                            <td> <?php echo $arr['os']; ?></td>
                        </tr>
                        <tr>
                            <td>Battery :</td>
                            <td> <?php echo $arr['battery']." Mah"; ?></td>
                        </tr>
                        <tr>
                            <td>Color :</td>
                            <td> <?php echo $arr['color']; ?></td>
                        </tr>

                    </table>


                    <div class=" add-buy-btn-big">

                        <a class=" btn addtocart btn-all" href="cart.php? id=<?php echo $arr['sno']; ?>"> Add to cart </a>
                        <a class="btn buynow btn-all" href="cart.php? id=<?php echo $arr['sno']; ?>"> Buy now </a>

                    </div>

                </div>



            </div>

        </div>



        <?php
    }
}
    ?>
    </section>


    <div class="pagination">
       
            
            <?php 
              if($totalpage>1){
                 
                if ($currentpage > 1) {
                    
                    $prevpage = $currentpage - 1;
                    
                    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><button class='pagination-btn'> Prev</button></a>  ";
                 }
                
            for($i=($currentpage - $limit+1);$i<=($currentpage + $limit-1);$i++)
            {
                if($i>0 && $i<=$totalpage){
                
                if($i==$currentpage){
                    $active="pageactive";
                }
                else{
                    $active="";
                }
            

          echo " <a class='$active' href='{$_SERVER['PHP_SELF']}? currentpage= $i' >  $i</a> ";


           
                }      
                  }
                 
                  if ($currentpage != $totalpage) {
                    
                    $nextpage = $currentpage + 1;
                    
                    //this if is just for showing last page
                    if($currentpage < $totalpage-2){
                    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpage'>... $totalpage</a> ";
                    
                    }
                    //main links
                    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'><button class='pagination-btn'> Next</button></a> ";
                    
                    
                 } 
                    }
            ?>
      
    </div>


    <?php 
    
    require "footer.php"; 
    ?>



    <script src="script.js"></script>
</body>


</html>
