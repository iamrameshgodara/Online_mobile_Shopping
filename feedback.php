<?php

if(isset($_POST['feedback'])){
   
echo '<script> alert("thanks for you valuable feedback :) ");</script>';
   
   header('location: index.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>feedback</title>
    <link rel="icon" href="images/icon-image.png">
    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="querries.css">
    <link rel="stylesheet" type="text/css" href="grid.css">


    <style> 
.main-container-about-us {
    margin: auto;
    font-size:100%;
    
} 
form.feedback-form textarea{
   border:1px solid #777;
   height:100px;
  width:90%;
   margin:20px auto;
   padding:0;
   font-size:100%;
}
</style>
</head>


<body> 



<header>
        <nav>
            <div class="row main-header">

            <div class="logo"> <a href="index.php" > Dhonism </a></div>


                
                
            </div>


        </nav>

    </header>
<section>
    <div class=" row main-container-about-us" > 
        <h3> hi ! <br><p>please give your feedback.</p></h3>
        <form class="feedback-form" method="post" action="#">
        <textarea rows="4" cols="50" name="text-feedback" required> </textarea><br><br>
        <button type="submit" name="feedback" class="btn-all"style="padding:12px 15px"> Submit</button>
        </form>
        
        <div>
            
                <ul class="social-links" style="margin-top:30px;float:left">
                    <h3 style="padding:5px 30px">Connect: </h3>

                    <li><a href="https://twitter.com/RamesChaudhary"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/rames_chaudhary/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/rameshgodara/"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></li>
                    

                </ul>

            </div>

        
 </div>
<section>
 <script src="script.js"></script>
</body>

</html>