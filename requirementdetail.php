<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <?php include"allcss.php"; ?>
    
  
</head>
<body>
   
     <?php include"header2.php"; ?>
    


    
    <section class="row page-header">
        <div class="container">
          
  <?php

                                               include "db.php";
$var=$_GET['q'];

$result = mysqli_query($con,"SELECT * FROM campaigns WHERE id=$var");
while($row = mysqli_fetch_array($result))
{

echo '



<h4>'.$row['name'].'</h4>

'; } ?> 
        </div>
    </section>
    
    <section class="row gallery-content">
        <div class="container">
           
            <div class="row">
                <div class="col-md-8 single-project single-cause"> 


                     <?php

                                               include "db.php";
$var=$_GET['q'];

$result = mysqli_query($con,"SELECT * FROM requirement WHERE id=$var");
while($row = mysqli_fetch_array($result))
{

echo '


                  <div class="featured-content">
                        <div class="item"><img src="media/requirement/'.$row['img'].'" alt=""></div>
                        <div class="item"></div>
                      
                    </div>
                    <div class="row m0 project_title">
                        <h2 class="hhh h1 pull-left">'.$row['name'].'</h2>
                        <a href="profile.php" class="btn-primary pull-right">Apply Now</a>
                    </div>
                   


                 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Details</a></li>
   
    <li><a data-toggle="tab" href="#req">Requirement</a></li>
    <li><a data-toggle="tab" href="#menu3">Campaigns</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     '.$row['detail'].'
    </div>
    
    <div id="req" class="tab-pane fade">
       '.$row['requirement'].'
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Campaigns</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>

                  
                
                   '; } ?>  

   
                    <div class="row shareOnRow m0">
                        <ul class="list-unstyled pull-left">
                            <li>SHARE IT ON</li>
                            <li><a target="_blank" href="https://twitter.com/upasanasociety"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/channel/UC6DV_3zitCgExBO7lWBymqw"><i class="fa fa-youtube"></i></a></li> <li><a target="_blank" href="https://www.instagram.com/upasanasociety/"><i class="fa fa-instagram"></i></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/in/upasanasociety/"><i class="fa fa-linkedin"></i></a></li>
                   <li><a target="_blank" href="https://m.facebook.com/upasanasociety/"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                        <a href="#donate_box" class="btn-primary pull-right">donate now</a> 
                    </div>

                    
                 
               
                 
                </div>


              
<?php include "leftmenu.php"; ?>


            </div>
        </div>
    </section>
 
    
     <?php include"footer.php"; ?>
    

    <?php include"allscript.php"; ?>
</body>
</html>