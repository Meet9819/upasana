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

$result = mysqli_query($con,"SELECT * FROM blog WHERE id=$var");
while($row = mysqli_fetch_array($result))
{

echo '
     <section class="row newsletter_signup">
        <div class="container">
          <h4>Home / Blogs / '.$row['title'].'</h4>
        </div>
    </section>



'; } ?> 
       
    
    <section class="row gallery-content">
        <div class="container">
           
            <div class="row">
                <div class="col-md-8 single-project single-cause"> 


                     <?php   include "db.php";
$var=$_GET['q'];

$result = mysqli_query($con,"SELECT * FROM blog WHERE id=$var");
while($row = mysqli_fetch_array($result))
{

echo '

 <div class="featured-content">
                        <div class="item"><img src="media/blog/'.$row['img'].'" alt=""></div>
                        <div class="item"><img src="media/blog/6.jpg" alt=""></div>
                      
                    </div>
               
                    <div class="row m0 project_title">
                        <h2 class="hhh h1 pull-left">'.$row['title'].'</h2>
                        <a href="#donate_box" class="btn-primary pull-right">donate now</a>
                    </div>
                   

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
   
      <li><a data-toggle="tab" href="#menu3">Events</a></li>
        <li><a data-toggle="tab" href="#menu3">Blogs</a></li>
          <li><a data-toggle="tab" href="#fbphoto">Photos</a></li>
            <li><a data-toggle="tab" href="#video">Videos</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     <p>'.$row['description'].'</p>
    </div>
    
  
     <div id="fbphoto" class="tab-pane fade">
     <p style="padding:25px"> '.$row['fb'].' </p>

    </div>
  <div id="video" class="tab-pane fade">
      <p style="padding:25px">'.$row['video'].' </p>
    </div>


  </div>

    

                  
                
                   '; } ?>   



               
                 
                    
                    <div class="row shareOnRow m0">
                        <ul class="list-unstyled pull-left">
                            <li>SHARE IT ON</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
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