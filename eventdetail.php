<!DOCTYPE html>
<html lang="en">
<head>
    <?php include"allcss.php"; ?>  
</head>
<body>
   
     <?php include"header2.php"; ?>
    
  
  <?php
 include "db.php";
$var=$_GET['q'];

$result = mysqli_query($con,"SELECT * FROM event WHERE id=$var");
while($row = mysqli_fetch_array($result))
{

echo '


     <section class="row newsletter_signup">
        <div class="container">
          <h4>Home / Events / '.$row['title'].'</h4>
        </div>
    </section>


'; } ?> 
        
    
    <section class="row gallery-content">
        <div class="container">
           
            <div class="row">
                <div class="col-md-8 single-project single-cause"> 


                     <?php

                                               include "db.php";
                    $var=$_GET['q'];

                    $result = mysqli_query($con,"SELECT * FROM event WHERE id=$var");
                    while($row = mysqli_fetch_array($result))
                    {

                    $campid = $row['campid'];
                    echo '
                <div class="featured-content">
                        <div class="item"><img src="media/event/'.$row['img'].'" alt=""></div>
                        <div class="item"><img src="media/event/6.jpg" alt=""></div>
                      
                    </div> 
                    <div class="row m0 project_title">
                        <h2 class="hhh h1 pull-left">'.$row['title'].'</h2>
                        <a href="#donate_box" class="btn-primary pull-right">donate now</a>
                    </div>
                   
                   <p>Venue - '.$row['venue'].' <br>Event Date - '.$row['startdatee'].' to '.$row['enddatee'].'</p> 

                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Requirement</a></li>
                     
                      <li><a data-toggle="tab" href="#fbphoto">Photos</a></li>
                      <li><a data-toggle="tab" href="#video">Videos</a></li>
                    </ul>

                    <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                     <p>'.$row['description'].'</p>
                    </div>  
                     <div id="fbphoto" class="tab-pane fade">
                     <p style="padding:25px"> '.$row['fblink'].'</p>
                    </div>
                    <div id="video" class="tab-pane fade">
                      <p style="padding:25px"> '.$row['youtubelink'].'</p>
                    </div>
                    </div>    

                  


                    <p> '.$row['googlemap'].'</p> 

                  
                
                   '; } ?>   


                
                    
                    <div class="row shareOnRow m0">
                        <ul class="list-unstyled pull-left">
                            <li>SHARE IT ON</li>
                            <li><a target="_blank" href="https://twitter.com/upasanasociety"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/channel/UC6DV_3zitCgExBO7lWBymqw"><i class="fa fa-youtube"></i></a></li> <li><a target="_blank" href="https://www.instagram.com/upasanasociety/"><i class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/in/upasanasociety/"><i class="fa fa-linkedin"></i></a></li>
                           <li><a target="_blank" href="https://m.facebook.com/upasanasociety/"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div> 




            
                </div>

              <?php include "leftmenu.php"; ?>
            </div>
        </div>
    </section>
 
    
     <?php include"footer.php"; ?>
    
    
      <script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
    
    <?php include"allscript.php"; ?>
</body>
</html>