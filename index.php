<?php include "allcss.php"; ?> 

<body> 

<?php include "header2.php"; ?>

    <!--Featured Slider-->
    <section class="row featured_events">
      
       <?php 

include('admin/db.php');
$result = mysqli_query($con,"SELECT * FROM slider"); 
while($row = mysqli_fetch_array($result))
{

echo ' 
  <div class="item">
            <img src="media/slider/'.$row['img'].'" alt="">
         

         <div class="row caption m0">
                <div class="caption_row">
                    <div class="container">
                        <div class="event_box featured_event_box row m0">
                            
                            <h4 class="event_link"><a href="single-event.html">'.$row['title'].'</a></h4>
                            <p>'.$row['subtitle'].'</p>
                           
                            <div class="row m0 text-center">
                                <a href="#donate_box" class="btn-primary">donate now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

        </div>



             

'; } ?> 

      
    </section> 


        <section style="    padding: 25px 0 45px;" class="row sponsor_banner text-center">
        <div class="container">
            <div class="row sectionTitle">
               
                <h3>Welcome to Upasana Society NGO <br> 
                    <span style="font-size: 17px">
                Making a difference one step at a time.</span></h3>
            </div>
          
        </div>
    </section>
    

    
      <section class="how_help row" style='background-image: url(images/homegrey.png);'>
        <div class="container " >
            
            <div class="row sectionTitle text-center ">
                <h3>How can you Help ?</h3>
                <h4 ><i>Find a Project as per Your Skills</i></h4>
            </div>


                    <div class="row col-md-6">
                        <div class="row  text-center">
                        <?php 
                        include('admin/db.php');
                        $result = mysqli_query($con,"SELECT * FROM category"); 
                        while($row = mysqli_fetch_array($result))
                        {
                        echo '
                         <div class="col-sm-4 help-process">
                                <div class="icon_box row m0">
                                    <img style="" src="media/category/'.$row['img'].'" alt="">
                                </div>
                                <h5>'.$row['title'].'</h5>
                            </div>            
                        '; } 
                        ?>  

               
                        </div> 

                         <div class="row  text-center" > <br><br>
                                  <a href="requirement.php" class="btn-primary">Find Me a Project</a>     <br><br> 
                         </div> 

                       
                    </div> 
                           
                    <div class="row col-md-1">
                      <div ></div>
                    </div>

                    <div class="row col-md-5">                 
                     <div class="row  text-center">
                         <h4 style=" line-height: 1.5;text-transform: capitalize;font-weight: bold;">An Individual who would want to initiate Upasana Society campaigns in his/her area/city/State</h4> 


                         <iframe width="100%" height="190" src="https://www.youtube.com/embed/QSlXFjFOOvg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
 
                       

                    </div> 

                      <div class="row  text-center"> <br><br> 
                       <a href="volunteer.php" class="btn-primary btn-outline">Become a Changemaker</a>
<br><br> 
                         </div> 


                    </div> 






        </div>
    </section>
    
    <!--Our Casuses-->
    <section class="row our_casuses">
        <div class="container">
            <div class="row sectionTitle text-center">
              
                <h3>Our Campaigns </h3>
            </div>
            <div class="row">
                <div class="causes_carousel">
                   




    <?php 

include('admin/db.php');
$result = mysqli_query($con,"SELECT * FROM campaigns order by id desc"); 
while($row = mysqli_fetch_array($result))
{
  $cal = (round($row['fundraised'] / $row['targetfund'] * 100));
echo ' 


                    <div class="item">
                        <div class="images_row row m0">
                            <img src="media/campaigns/'.$row['img'].'" alt="">
                            <a href="campaigndetail.php?q='.$row['id'].'" class="btn-primary">Know More </a>
                        </div>
                        <div class="cause_excepts row m0">
                            <h4 class="cuase_title"><a href="campaigndetail.php?q='.$row['id'].'">'.$row['name'].'</a></h4>
                            <p>'.substr($row['title'],0,180).'..</p>
                            <div class="row fund_progress m0">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="'.$cal.'" aria-valuemin="0" aria-valuemax="100">
                                        <div class="percentage"><span class="counter">'.$cal.'</span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row fund_raises m0">                                
                                <div class="pull-left raised amount_box">
                                    <h6>Target Fund</h6>
                                    <h3>'.$row['targetfund'].'</h3>
                                </div>
                                <div class="pull-left goal amount_box">
                                 <h6>Fund Raised</h6>
                                    <h3>'.$row['fundraised'].'</h3>
                                </div>
                            </div>
                        </div>
                    </div>




'; } ?> 



                </div>
            </div>
        </div>
    </section>



    <section class="row quotes_row">
        <div class="container">
            <div class="row sectionTitle text-center">
                <h3>Testimonials</h3>
            </div>


            <div class="row"> 


                 <div class="causes_carousel">
                   




    <?php 

include('admin/db.php');
$result = mysqli_query($con,"SELECT * FROM testimonials order by id desc"); 
while($row = mysqli_fetch_array($result))
{

echo ' 

   <div class="col-sm-12 quotation_block text-center">
                  <div class="quote_block row">
                        <span class="quote_sign">“</span>
                        <p>'.$row['message'].'</p>
                    </div>
                    <h5>'.$row['name'].'</h5>
                    <h6>'.$row['post'].'</h6>
                </div>

                   




'; } ?> 



                </div>






            </div>
        </div>
    </section>
    
    <section class="row our_casuses">
       <div class="container">
            <div class="row sectionTitle text-center">
              
                <h3>Our achievements </h3>
            </div>
            <div class="row">
                <div class="causes_carousel">
                   




    <?php 

include('admin/db.php');
$result = mysqli_query($con,"SELECT * FROM achievements order by id desc"); 
while($row = mysqli_fetch_array($result))
{

echo ' 


                    <div class="item">
                        <div class="images_row row m0">
                            <img src="media/campaigns/'.$row['img'].'" alt="">
                            <a href="#donate_box" class="btn-primary">donate now</a>
                        </div>
                        <div class="cause_excepts row m0">
                            <h4 class="cuase_title"><a href="single-cause.html">'.$row['title'].'</a></h4>
                          '.substr($row['description'],0,180).'..
                           
                           
                        </div>
                    </div>




'; } ?> 



                </div>
            </div>
        </div>
    </section>
    
    <section class="row latest_news">
        <div class="container">
            <div class="row sectionTitle text-center">
                <h3>Blogs </h3>
            </div>
            <div class="row"> 

                   <?php 

include('admin/db.php');
$result = mysqli_query($con,"SELECT * FROM blog order by id desc limit 4"); 
while($row = mysqli_fetch_array($result))
{

echo ' 
 

                <div class="latest-post col-md-3 col-sm-6">                    
                    <div class="row m0 featured_cont">
                        <img src="media/blog/'.$row['img'].'" alt="" class="img-responsive">
                        <i class="fa fa-youtube-play"></i>
                    </div>
                    <h5 class="post-title"><a href="blogdetail.php?q='.$row['id'].'">'.$row['title'].'</a></h5>
                    <h6 class="post-meta"><a href="#">6th July 2019</a></h6>
                    <div class="post-excerpts row m0">'.substr($row['description'],0,180).'..</div>
                    <a href="blogdetail.php?q='.$row['id'].'" class="btn-primary btn-outline">read more</a>
                </div>

             

'; } ?> 
               
            </div>
        </div>
    </section>
    
  
    
   <?php include "footer.php"; ?> 

   
 <?php include "allscript.php"; ?>
