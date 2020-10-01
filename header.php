<!------------------------------------------------ 
         Header 
-------------------------------------------------->

<header class="header-big">
    <nav>
        <div class="row main-header">

            <!-- <a href="index.php" > <img src="images/logo.png" class="logo "> </a> -->
            <ul class="header-nav-ul-big">
                <li class="logo">

                    <a href="index.php"> Dhonism </a>
                </li>

                        <li class="search-li">

                    <form class="search-box" action="indexsearchcontent.php" method="post">
                        <input type="text" name="searchbar" placeholder="Search">
                        <button type="submit" name="searchsubmit"><i class="fal fa-search"></i>  </button>


                    </form>
                </li>

                <!-- <ul class="main-nav big">
                    <li><a href="loginpage.php">Login </a></li>
                    <li><a href="signuppage.php"> Sign Up </a></li>

                </ul> -->
                <li class="main-nav-li">
                    <ul class="main-nav ">
                        <li><a href="loginpage.php" style="color:white"><i class="fal fa-user"></i> </a></li>
                        <li >
                            <div class="dark-mode-btn" ><button name="dark-btn"> <i class="fal fa-moon"></i></button>
                            </div>
                        </li>

                    </ul>
                </li>
                <li class='main-nav-loggedin-li'>
                    <!-- php and js code is little below for this login system same as for mobile view -->
                    <ul class="main-nav-loggedin">
                        <li><a href="userProfile.php"><i class="fas fa-user"></i></a></li>
                        <li><a href="cartwithdata.php"><i class="fal fa-shopping-bag"></i> </a></li>
                        <li >
                            <div class="dark-mode-btn" ><button name="dark-btn"> <i class="fal fa-moon"></i></button>
                            </div>
                        </li>

                        <!-- <li> <?php// echo $_SESSION['uname']?></li>
                    <li><a href="logout.php"> Log out </a></li>
                    <li><a href="cartwithdata.php"> <i class="fas fa-shopping-cart"></i> </a></li> -->

                    </ul>
                </li>
            </ul>
        </div>


    </nav>

</header>




<!-- 
    Mobile view header
 -->

<header class="header-mobile">
    <nav>
        <div class="row main-header">
            <ul class='header-nav-ul'>
                <li class="bar-btn">
                <i class="fal fa-bars"></i>
                </li>
                <li class="cross-bar-btn">

                <i class="fal fa-times"></i>

                </li>
                <li class="logo">
                    <a href="index.php"> Dhonism </a>
                </li>

                <li class='cart-btn-top'>

                    <a href="cartwithdata.php"> <i class="fal fa-shopping-bag"></i> </a>

                </li>
                <li class="search-btn-top">

                <i class="fal fa-search"></i>

                </li>
                
            </ul>
            <form class="search-box" action="indexsearchcontent.php" method="post">
                <input type="text" name="searchbar" placeholder="Search">
                <button type="submit" name="searchsubmit"><i class="fal fa-search"></i> </button>


            </form>
            <div class="cancel-search-btn-top"> Cancel</div>

        </div>


    </nav>

</header>
<div class="bar-details">

    <ul class="mobile-loggedout">

        <li> <a href="loginpage.php">Login</a> </li>
        <li><a href="signuppage.php"> Register</a></li>
        <li><a href="feedback.php"> Support</a></li>
        <li> <div class="dark-mode-btn" ><button name="dark-btn"> <i class="fal fa-moon"></i></button>
                            </div></li>

    </ul>
    <ul class="mobile-loggedin">

        <li> <a href="userProfile.php">Profile</a> </li>

        <li><a href="feedback.php"> Support</a></li>
        <li> <div class="dark-mode-btn" ><button name="dark-btn"> <i class="fal fa-moon"></i></button>
                            </div></li>
        
        <li><a href="logout.php"> Logout</a></li>
    </ul>


</div>


<?php
    if(empty($_SESSION['uname']))
    {
        
        
        
      echo "<script> 
      
      document.querySelector('.main-nav-loggedin').style.display='none'; 
      document.querySelector('.mobile-loggedin').style.display='none';//mobile login view
      document.querySelector('.cart-btn-top').style.display='none';//mobile cart view

      </script>" ;  
    }
    else{
        echo "<script> 
      
        document.querySelector('.main-nav').style.display='none'; 
        document.querySelector('.mobile-loggedout').style.display='none'; //mobile logout view
        
        </script>" ; 

    }
?>
<!-- <script type='text/script' src="script.js"></script> -->