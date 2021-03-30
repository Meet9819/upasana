<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Upasana Society NGO</title>
    
    <?php include"allcss.php" ?>

</head>
<body>
   
    <?php include"header2.php" ?>
    
  



 

     <section class="row newsletter_signup">
        <div class="container">
            <div class="row">
             <div class="col-md-7">  
  <h4>Home / Our Campaigns</h4>
</div>




            </div>
        </div>
    </section>


    
    <section class="row gallery-content">
        <div class="container">
           
            
         
            <div class="row">
                <div class="causes_container popup-gallery">
                    <div class="grid-sizer"></div>
                   
    <?php 

include('admin/db.php');
$result = mysqli_query($con,"SELECT * FROM campaigns order by sequence "); 
while($row = mysqli_fetch_array($result))
{

     $cal = (round($row['fundraised'] / $row['targetfund'] * 100));

echo ' 

 


                  <div class="col-sm-12 cause-item list-item education">
                         <div class="images_row pull-left">                            
                          <a href="campaigndetail.php?q='.$row['id'].'">  <img src="media/campaigns/'.$row['img'].'" alt="'.$row['name'].'"> </a>
                        </div> 


                        <div class="cause_excepts pull-left">
                            <h4 class="cuase_title"><a href="campaigndetail.php?q='.$row['id'].'">'.$row['name'].'</a></h4>
                            <p>'.substr($row['title'],0,180).'..</p>
                        </div>
                        <div class="fund_raise_info pull-left">
                          
                            <div class="row fund_progress m0">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="'.$cal.'" aria-valuemin="0" aria-valuemax="100">
                                        <div class="percentage"><span class="counter">'.$cal.'</span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row fund_raises m0">                                
                                <div class="pull-left raised amount_box">
                                    <h6>raised</h6>
                                               <h3>₹'.$row['fundraised'].'</h3>
                                </div>
                                <div class="pull-left goal amount_box">
                                    <h6>goal</h6>
                                    <h3>₹'.$row['targetfund'].'</h3>
                                </div>
                            </div>
                            <div class="row m0 text-center">
                                <a href="#donate_box" class="btn-primary btn-outline">donate now</a>
                            </div>
                        </div>
                    </div>

'; } ?> 



              
                </div>
              
            </div>
        </div>
    </section>
    
  
      <?php include"footer.php" ?>
    
    
 
    
   
    <?php include"allscript.php" ?>
</body>
</html>