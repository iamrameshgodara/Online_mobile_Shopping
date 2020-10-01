<?php
    session_start();
   
    include "connection.php";
    
    $iphonesq=mysqli_query($conn,"select * from mobile_details where companyname='apple' order by price desc ;");
       $a=0;
    $hotsellingq=mysqli_query($conn,"select * from mobile_details where os!='no' order by price desc ;");
    $hotcount=0;
    $q=mysqli_query($conn,"select * from mobile_details ;");
    $ar=mysqli_fetch_array($q);
    /*this $ar is used becoz one array is already used in while loop so cant fetch values here so used this here */
    $companyName=mysqli_query($conn,"select distinct * from company_details order by companyname asc limit 5;");
    

    ?>


<?php 



/*----------------------------------
|
| BRANDS SLIDER CODE
|
------------------------------------*/


$companies=mysqli_query($conn,"select * from company_details order by companyname;");
// $datas=array();
while($compdata=mysqli_fetch_assoc($companies)){

    $datas[]=$compdata;
   
}
$lengthdatas=count($datas);


?>



<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body class="dark-mode-class">

    <!-- <script> alert(document.cookie);</script> -->

    <!-----------------------------------------------------------------------
HEADER
------------------------------------------------------------------------->
    <?php 
  
  include "header.php";
  ?>
    <!-- HERO SLIDER -->

    <!-- <section class="hero-section"> -->


    <div class="hero-container">

        <div class="hero-slider">
            <img class="hero-lastclone" src=" images/4.jpg" alt="img-4">
            <img src="images/1.jpg" alt="img-1">
            <img src="images/2.jpg" alt="img-2">
            <img src="images/3.jpg" alt="img-3">
            <img src="images/4.jpg" alt="img-4">
            <img class="hero-firstclone" src=" images/1.jpg" alt="img-1">



        </div>

    </div>

    <button class="hero-btn-prev"> <i class="fad fa-chevron-left"></i></button>
    <button class="hero-btn-next"><i class="fad fa-chevron-right"></i></button>


    <!-- </section> -->










    <section class="brand-name mobile-view-brand">
        <div class="row">
            <h2> Top Brands</h2>
        </div>
        <div class="row top-brand-dark-mode">

            <?php 
              while($row=mysqli_fetch_array($companyName))
              {

              ?>
            <div class="col span-1-of-5 box">
                <a href="indexmobi2.php? id=<?php echo $row['companyname'];?>">
                    <div class="box-details">
                        <?php if(empty($row['companylogoDarkMode'])){
                            $row['companylogoDarkMode']=$row['companylogo'];

                        } ?>
                        <img class="normalModeLogo" src="images/<?php echo $row['companylogo'];?>">
                        <img class="darkModeLogo" src="images/<?php echo $row['companylogoDarkMode'];?>">
                        <!-- <h3><b> <?php echo $row['companyname'];?> </b></h3> -->
                    </div>
                </a>
            </div>
            <?php
               }
              ?>



        </div>
    </section>



        <!-- top brand slider -->

        <section class="brand-name-slider">


            <div class="row top-brands-name">
                <h2>TOP BRANDS</h2>
            </div>

            <div class="container-js-slider row">
                <div class="slider-js-ed top-phones-list" id="apple-slider-div" style="position: relative;margin-top:0">


                    <?php
                for($i=$lengthdatas-5;$i<$lengthdatas;$i++){
                      include 'brandslidersection.php';
                } 
                for($i=0;$i<$lengthdatas;$i++){
                    include 'brandslidersection.php';
                }           
                for($i=0;$i<5;$i++){  
                    include 'brandslidersection.php';
                }
  
         ?>



                </div>

                <!-- <a class="show-all-btn btn-all" href="indexmobi2.php? id=<?php echo "apple" ;?>"> Show all </a> -->
            </div>
            <button class="btn-prev-brand-js" id="btn-prev-brand-js-apple"><i class="fad fa-chevron-left"> </i></button>
            <button class="btn-next-brand-js" id="btn-next-brand-js-apple"> <i class="fad fa-chevron-right"></i></button>

        </section>



        <!-- top brand slider close  -->

        <!-- 

    <div class="row main-container">

        <div class="slider-box">
            <img src="images/iphones.png">
            <img src="images/appleoffer.jpg">
            <img src="images/xaomioffer.png">
            <img src="images/appleoffer.jpg">



        </div>



    </div> -->
  

    <!-- <section>

             <div class="row big-box">

               <div class="big-box-part" >
               <div class="big-box-details">
            <h3>All New iPhone SE </h3>       
            </div>
               <div class="big-box-image"> 


               <img src="images/iphonesesmalloffer.png">
               </div>




            </div >

               <div class="big-box-part mobile-box-hide" >
               <div class="big-box-details"> 
               <h3>OnePlus 7T Pro</h3>  
               </div>
               <div class="big-box-image">
               <img src="images/oneplusofferphone.png">
             </div>
            </div>


             </div>




            </section> -->





    <section class="hot-selling-smartphone">
        <div class="row ">
            <h2>Apple iPhones</h2>
        </div>


        <div class="row">
            <div class="top-phones-list">
                <?php
    
    while($arr=mysqli_fetch_array($iphonesq))
    {
        $a++;
        ?>



                <div class="col span-1-of-4 top-box">

                    <a href="indexmobi2.php? id=<?php echo $arr['sno']; ?>"><img class="top-box-img"
                            src="images/<?php echo $arr['image']; ?>">
                        <div class="show-details">
                            <h4> &#8377 <?php echo $arr['price']; ?> <h4>
                                    <p>  <span class="capitalize"><?php echo $arr['companyname']." "; ?></span><?php echo $arr['modelno']; ?>
                                    </p>
                        </div>
                    </a>



                </div>

                <?php
    if($a>=4)
    {
        break;
    }
    }
    
    ?>

            </div>

        </div>
        <a class="show-all-btn btn-all" href="indexmobi2.php? id=<?php echo "apple" ;?>"> Show all </a>
    </section>



    <section class="hot-selling-smartphone">
        <div class="row">
            <h2>Hot selling Phones</h2>
        </div>


        <div class=" row">
            <div class="top-phones-list">
                <?php
    
    while($hotarr=mysqli_fetch_array($hotsellingq))
    {
        $hotcount++;
        ?>



                <div class="col span-1-of-4 top-box">

                    <a href="indexmobi2.php? id=<?php echo $hotarr['sno']; ?>"><img class="top-box-img"
                            src="images/<?php echo $hotarr['image']; ?>">
                        <div class="show-details">
                            <h4> &#8377 <?php echo $hotarr['price']; ?> <h4>
                                    <p> <span class="capitalize"><?php echo $hotarr['companyname']." ";?></span><?php echo $hotarr['modelno']; ?>
                                    </p>
                        </div>
                    </a>



                </div>

                <?php
    if($hotcount>=4)
    {
        break;
    }
    }
    
    ?>

            </div>

        </div>
        <a class="show-all-btn btn-all" href="indextopclass.php? topid=<?php echo "showallhot" ;?>"> Show all </a>




    </section>






    <section style="padding-bottom:0;">
        <div class="offer-baner">
            <div class="offer-banner-details">
                <h1> Apple iPhone SE</h1>
            </div>
            <div class="offer-banner-image">
                <img src="images/iphoneseoffer.png">

            </div>

        </div>

    </section>






    <section class="category-section">
        <div>
            <h2> Shop By categories</h2>
        </div>
        <div class="row big-top-phone-div">
            <div class="top-class">
                <a href="indextopclass.php? topid=<?php echo "topcameraphone" ;?>">
                    <div class="part">



                        <h3>Top camera phone </h3>



                    </div>
                </a>
            </div>
            <div class="top-class">

                <a href="indextopclass.php? topid=<?php echo "topbatteryphone" ;?>">
                    <div class="part">
                        <h3>Top battery phone </h3>
                    </div>
                </a>
            </div>
<br/>
            <div class="top-class">
                <a href="indextopclass.php? topid=<?php echo "topramphone" ;?>">
                    <div class="part">
                        
                        <h3>Top RAM phone</h3>


                    </div>
                </a>
            </div>
            <div class="top-class">

                <a href="indextopclass.php? topid=<?php echo "topromphone" ;?>">
                    <div class="part">
                        <h3>Top ROM phone</h3>
                    </div>
                </a>

            </div>

        </div>


        <!--         
        <div class="row big-top-phone-div">
            <div class="part"><a href="indextopclass.php? topid=<?php echo "topromphone" ;?>">

                    <h3>Top ROM phone</h3>

                </a>
            </div>
            <div class="part"> <a href="indextopclass.php? topid=<?php echo "hightolow" ;?>">

                    <h3>High to Low Price phone</h3>

                </a>
            </div>
            <div class="part"><a href="indextopclass.php? topid=<?php echo "lowtohigh" ;?>">

                    <h3> Low to High Price phone</h3>

                </a>
            </div>

        </div> -->

    </section>











<!-- 
    <section>
        <div class=" row main-container-bottom">
            <div class="slider-box-bottom">
                <img src="images/iphones.png">
                <img src="images/appleoffer.jpg">
                <img src="images/xaomioffer.png">
                <img src="images/appleoffer.jpg">

            </div>
        </div>
    </section> -->


    <?php 
    
    require "footer.php"; 
    ?>





    <script type="text/javascript" src="heroscript.js"></script>
    <script type="text/javascript" src=sliderscript.js> </script>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>