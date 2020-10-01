<?php
    
    session_start();
    
   
    
    include "connection.php";
        
    

    //$c=mysqli_num_rows($q);
    if(isset($_POST['gosubmitfilter']))
    
    {
        
        //$apple=$_POST['applebrand'];
        //$lg=$_POST['lgbrand'];
        //$samsung=$_POST['samsungbrand'];
        //$nokia=$_POST['nokiabrand'];
        //$oneplus=$_POST['oneplusbrand'];
        if(!isset($_POST['samsungbrand']) AND !isset($_POST['nokiabrand']) AND !isset($_POST['applebrand']) AND !isset($_POST['lgbrand']) AND
           !isset($_POST['oneplusbrand']) AND !isset($_POST['above20']) AND !isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='asdbnbxmnx';");
        }
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20']) AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='apple' OR companyname='lg' OR companyname='oneplus') order by companyname;");
            
            
        }
        
        
        
        else  if(isset($_POST['samsungbrand'])  AND isset($_POST['applebrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung'  OR companyname='apple' OR companyname='lg' OR companyname='oneplus')  order by companyname;");
            
            
        }
        
        
        
        else if( isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='nokia' OR companyname='apple' OR companyname='lg' OR companyname='oneplus')  order by companyname;");
            
            
        }
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand'])  AND isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='apple'  OR companyname='oneplus')  order by companyname;");
            
            
        }
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia'  OR companyname='lg' OR companyname='oneplus')  order by companyname;");
            
            
        }
        
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['lgbrand'])  AND isset($_POST['above20']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='apple' OR companyname='lg') order by companyname;");
            
            
        }
        
        
        else  if(isset($_POST['lgbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='lg' OR companyname='nokia' OR companyname='oneplus') order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='lg' OR companyname='oneplus')  order by companyname;");
            
            
        }
        
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['applebrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='oneplus' OR companyname='apple')  order by companyname;");
            
            
        }
        
        
        
        else  if(isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['applebrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='lg' OR companyname='oneplus' OR companyname='apple')  order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='lg' OR companyname='nokia' OR companyname='apple')  order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['lgbrand']) AND isset($_POST['applebrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='lg' OR companyname='apple')  order by companyname;");
            
            
        }
        
        else  if(isset($_POST['applebrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='apple' OR companyname='nokia' OR companyname='oneplus')  order by companyname;");
            
            
        }
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='oneplus')  order by companyname;");
            
            
        }
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['lgbrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='lg')  order by companyname;");
            
            
        }
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='apple')  order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='lg' OR companyname='nokia') order by companyname;");
            
            
        }
        
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia') order by companyname;");
            
            
        }
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['lgbrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='smasung' OR companyname='lg')  order by companyname;");
            
            
        }
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='lg' OR companyname='oneplus')  order by companyname;");
            
            
        }
        
        else if(isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='nokia' OR companyname='oneplus') order by companyname;");
            
            
        }
        
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='oneplus') order by companyname;");
            
            
        }
        
        else  if(isset($_POST['applebrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='apple' OR companyname='oneplus') ;");
            
            
        }
        else if(isset($_POST['applebrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['above20']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='apple' OR companyname='nokia')  order by companyname;");
            
            
        }
        
        else if(isset($_POST['applebrand']) AND isset($_POST['samsungbrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='apple' OR companyname='samsung')  order by companyname;");
            
            
        }
        
        else if(isset($_POST['applebrand']) AND isset($_POST['lgbrand']) AND isset($_POST['above20']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='apple' OR companyname='lg') ;");
            
            
        }
        
        else if(isset($_POST['nokiabrand']) AND isset($_POST['above20']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='nokia' ;");
            
            
        }
        
        else  if(isset($_POST['applebrand']) AND isset($_POST['above20']) AND isset($_POST['below20']) )
        {
            
            $q=mysqli_query($conn,"select * from mobile_details where companyname='apple';");
            
            
        }
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['above20']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='lg' ;");
            
            
        }
        
        else if(isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='oneplus';");
            
            
        }
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['above20'])  AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung';");
            
            
        }
        
        
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='apple' OR companyname='lg' OR companyname='oneplus') AND price>20000 order by companyname;");
            
            
        }
        
        else  if(isset($_POST['samsungbrand'])  AND isset($_POST['applebrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung'  OR companyname='apple' OR companyname='lg' OR companyname='oneplus') AND price>20000 order by companyname;");
            
            
        }
        
        
        
        
        else  if( isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='nokia' OR companyname='apple' OR companyname='lg' OR companyname='oneplus') AND price>20000 order by companyname;");
            
            
        }
        
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand'])  AND isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='apple'  OR companyname='oneplus') AND price>20000 order by companyname;");
            
            
        }
        
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia'  OR companyname='lg' OR companyname='oneplus') AND price>20000 order by companyname;");
            
            
        }
        
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['lgbrand'])  AND isset($_POST['above20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='apple' OR companyname='lg') AND price>20000 order by companyname;");
            
            
        }
        
        
        
        
        
        
        else  if(isset($_POST['lgbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='lg' OR companyname='nokia' OR companyname='oneplus') AND price>20000 order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='lg' OR companyname='oneplus') AND price>20000  order by companyname;");
            
            
        }
        
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['applebrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='oneplus' OR companyname='apple') AND price>20000 order by companyname;");
            
            
        }
        
        
        
        else  if(isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['applebrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='lg' OR companyname='oneplus' OR companyname='apple') AND price>20000 order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='lg' OR companyname='nokia' OR companyname='apple') AND price>20000 order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['lgbrand']) AND isset($_POST['applebrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='lg' OR companyname='apple') AND price>20000 order by companyname;");
            
            
        }
        
        else  if(isset($_POST['applebrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='apple' OR companyname='nokia' OR companyname='oneplus') AND price>20000 order by companyname;");
            
            
        }
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='oneplus') AND price>20000 order by companyname;");
            
            
        }
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['lgbrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='lg') AND price>20000 order by companyname;");
            
            
        }
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='apple') AND price>20000 order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='lg' OR companyname='nokia') AND price>20000 order by companyname;");
            
            
        }
        
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia') AND price>20000 order by companyname;");
            
            
        }
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['lgbrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='smasung' OR companyname='lg') AND price>20000 order by companyname;");
            
            
        }
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='lg' OR companyname='oneplus') AND price>20000 order by companyname;");
            
            
        }
        
        else if(isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='nokia' OR companyname='oneplus')AND price>20000 order by companyname;");
            
            
        }
        
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='oneplus') AND price>20000 order by companyname;");
            
            
        }
        
        else  if(isset($_POST['applebrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='apple' OR companyname='oneplus') AND price>20000 order by companyname ;");
            
            
        }
        else if(isset($_POST['applebrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['above20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='apple' OR companyname='nokia') AND price>20000 order by companyname;");
            
            
        }
        
        else if(isset($_POST['applebrand']) AND isset($_POST['samsungbrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='apple' OR companyname='samsung') AND price>20000 order by companyname;");
            
            
        }
        
        else if(isset($_POST['applebrand']) AND isset($_POST['lgbrand']) AND isset($_POST['above20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='apple' OR companyname='lg')AND price>20000 order by companyname ;");
            
            
        }
        
        else if(isset($_POST['nokiabrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='nokia' AND price>20000 order by companyname ;");
            
            
        }
        
        else  if(isset($_POST['applebrand']) AND isset($_POST['above20'])  )
        {
            
            $q=mysqli_query($conn,"select * from mobile_details where companyname='apple' AND price>20000 ;");
            
            
        }
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='lg'AND price>20000 ;");
            
            
        }
        
        else if(isset($_POST['oneplusbrand']) AND isset($_POST['above20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='oneplus'AND price>20000;");
            
            
        }
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['above20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung' AND price>20000;");
            
            
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='apple' OR companyname='lg' OR companyname='oneplus') AND price<20000 order by companyname;");
            
            
        }
        
        else  if(isset($_POST['samsungbrand'])  AND isset($_POST['applebrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung'  OR companyname='apple' OR companyname='lg' OR companyname='oneplus') AND price<20000 order by companyname;");
            
            
        }
        
        
        
        
        else  if( isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='nokia' OR companyname='apple' OR companyname='lg' OR companyname='oneplus') AND price<20000 order by companyname;");
            
            
        }
        
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand'])  AND isset($_POST['oneplusbrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='apple'  OR companyname='oneplus') AND price<20000 order by companyname;");
            
            
        }
        
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia'  OR companyname='lg' OR companyname='oneplus') AND price<20000 order by companyname;");
            
            
        }
        
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['lgbrand'])  AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='apple' OR companyname='lg') AND price<20000 order by companyname;");
            
            
        }
        
        
        
        
        
        
        else  if(isset($_POST['lgbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='lg' OR companyname='nokia' OR companyname='oneplus') AND price<20000 order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='lg' OR companyname='oneplus') AND price<20000 order by companyname;");
            
            
        }
        
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['applebrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='oneplus' OR companyname='apple') AND price<20000 order by companyname;");
            
            
        }
        
        
        
        else  if(isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['applebrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='lg' OR companyname='oneplus' OR companyname='apple') AND price<20000 order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='lg' OR companyname='nokia' OR companyname='apple') AND price<20000 order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['lgbrand']) AND isset($_POST['applebrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='lg' OR companyname='apple') AND price<20000 order by companyname;");
            
            
        }
        
        else  if(isset($_POST['applebrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='apple' OR companyname='nokia' OR companyname='oneplus') AND price<20000 order by companyname;");
            
            
        }
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='oneplus') AND price<20000 order by companyname;");
            
            
        }
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['lgbrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='lg') AND price<20000 order by companyname;");
            
            
        }
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia' OR companyname='apple') AND price<20000 order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='lg' OR companyname='nokia') AND price<20000 order by companyname;");
            
            
        }
        
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='nokia')AND price<20000 order by companyname;");
            
            
        }
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['lgbrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='smasung' OR companyname='lg') AND price<20000 order by companyname;");
            
            
        }
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='lg' OR companyname='oneplus') AND price<20000 order by companyname;");
            
            
        }
        
        else if(isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='nokia' OR companyname='oneplus') AND price<20000 order by companyname;");
            
            
        }
        
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='samsung' OR companyname='oneplus') AND price<20000 order by companyname;");
            
            
        }
        
        else  if(isset($_POST['applebrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='apple' OR companyname='oneplus') AND price<20000 ;");
            
            
        }
        else if(isset($_POST['applebrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='apple' OR companyname='nokia') AND price<20000  order by companyname;");
            
            
        }
        
        else if(isset($_POST['applebrand']) AND isset($_POST['samsungbrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='apple' OR companyname='samsung') AND price<20000 order by companyname;");
            
            
        }
        
        else if(isset($_POST['applebrand']) AND isset($_POST['lgbrand']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where (companyname='apple' OR companyname='lg') AND price<20000;");
            
            
        }
        
        else if(isset($_POST['nokiabrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='nokia' and price<20000 ;");
            
            
        }
        
        else  if(isset($_POST['applebrand']) AND isset($_POST['below20'])  )
        {
            
            $q=mysqli_query($conn,"select * from mobile_details where companyname='apple' and price<20000;");
            
            
        }
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='lg' AND price<20000 ;");
            
            
        }
        
        else if(isset($_POST['oneplusbrand']) AND isset($_POST['below20'])  )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='oneplus' AND price<20000;");
            
            
        }
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['below20']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung' AND price<20000;");
            
            
        }
        
        
        
        
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung' OR companyname='nokia' OR companyname='apple' OR companyname='lg' OR companyname='oneplus' order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['samsungbrand'])  AND isset($_POST['applebrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung'  OR companyname='apple' OR companyname='lg' OR companyname='oneplus' order by companyname;");
            
            
        }
        
        
        
        else if( isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='nokia' OR companyname='apple' OR companyname='lg' OR companyname='oneplus' order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand'])  AND isset($_POST['oneplusbrand']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung' OR companyname='nokia' OR companyname='apple'  OR companyname='oneplus' order by companyname;");
            
            
        }
        
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung' OR companyname='nokia'  OR companyname='lg' OR companyname='oneplus' order by companyname;");
            
            
        }
        
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']) AND isset($_POST['lgbrand']) )
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung' OR companyname='nokia' OR companyname='apple' OR companyname='lg' order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='lg' OR companyname='nokia' OR companyname='oneplus' order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung' OR companyname='lg' OR companyname='oneplus' order by companyname;");
            
            
        }
        
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['applebrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung' OR companyname='oneplus' OR companyname='apple' order by companyname;");
            
            
        }
        
        
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']) AND isset($_POST['applebrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='lg' OR companyname='oneplus' OR companyname='apple' order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='lg' OR companyname='nokia' OR companyname='apple' order by companyname;");
            
            
        }
        
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['lgbrand']) AND isset($_POST['applebrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung' OR companyname='lg' OR companyname='apple' order by companyname;");
            
            
        }
        
        else if(isset($_POST['applebrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='apple' OR companyname='nokia' OR companyname='oneplus' order by companyname;");
            
            
        }
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung' OR companyname='nokia' OR companyname='oneplus' order by companyname;");
            
            
        }
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['lgbrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung' OR companyname='nokia' OR companyname='lg' order by companyname;");
            
            
        }
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']) AND isset($_POST['applebrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung' OR companyname='nokia' OR companyname='apple' order by companyname;");
            
            
        }
        
        
        
        
        else  if(isset($_POST['applebrand']) AND isset($_POST['lgbrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='apple' AND companyname='lg' order by companyname;");
            
            
        }
        
        
        else  if(isset($_POST['applebrand']) AND isset($_POST['samsungbrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='apple' OR companyname='samsung' order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['applebrand']) AND isset($_POST['nokiabrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='apple' OR companyname='nokia' order by companyname;");
            
            
        }
        
        
        else  if(isset($_POST['applebrand']) AND isset($_POST['oneplusbrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='apple' OR companyname='oneplus' order by companyname;");
            
            
        }
        
        else  if(isset($_POST['samsungbrand']) AND isset($_POST['oneplusbrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung' OR companyname='oneplus' order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['nokiabrand']) AND isset($_POST['oneplusbrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='nokia' OR companyname='oneplus' order by companyname;");
            
            
        }
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['oneplusbrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='lg' OR companyname='oneplus' order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['lgbrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='smasung' OR companyname='lg' order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['samsungbrand']) AND isset($_POST['nokiabrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung' OR companyname='nokia' order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['lgbrand']) AND isset($_POST['nokiabrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='lg' OR companyname='nokia' order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['applebrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='apple';");
            
            
        }
        
        else if(isset($_POST['lgbrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='lg';");
            
            
        }
        
        else if(isset($_POST['oneplusbrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='oneplus';");
            
            
        }
        
        else if(isset($_POST['samsungbrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='samsung';");
            
            
        }
        
        else  if(isset($_POST['nokiabrand']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where companyname='nokia';");
            
            
        }
        
        else  if(isset($_POST['above20']) AND isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details order by companyname;");
            
            
        }
        
        
        
        else if(isset($_POST['below20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where price<20000 order by companyname;");
            
            
        }
        
        
        else if(isset($_POST['above20']))
        {
            $q=mysqli_query($conn,"select * from mobile_details where price>20000 order by companyname;");
            
            
        }
        
        
        
        
        
        $c=mysqli_num_rows($q);
    }
    
 
    
    
    
    ?>



<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Filtered items</title>
    <link rel="icon" href="images/icon-image.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="querries.css">
    <link rel="stylesheet" type="text/css" href="grid.css">
    
    <link href="https://kit-pro.fontawesome.com/releases/v5.14.0/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>

<body>

<?php 
  
  include "header.php";
  include "filter.php";
  ?>



    <section class=" mobile-details">
        <?php
    if($c==0)
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

<a name="addcart" class=" btn addtocart btn-all" href="cart.php? id=<?php echo $arr['sno']; ?>"> Add to cart
</a>
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
<!-- these are buttons for laptop, btns for mobileis above -->
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

    <?php 
    
    require "footer.php"; 
    ?>



    <script src="script.js"></script>
</body>

</html>
