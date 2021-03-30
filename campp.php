<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Upasana Society NGO</title>
    
    
    <!--Fonts-->
    <?php include"allcss.php" ?>
    
    
</head>
<body>
   
    <?php include"header2.php" ?>
    
    <section class="row page-header">
        <div class="container">
            <h4>Campaigns</h4>
        </div>
    </section>
    
    <section class="row page-content">
        <div class="container">            
            <div class="row event-listing-row">
               
               

    <?php 

include('admin/db.php');
$result = mysqli_query($con,"SELECT * FROM campaigns order by id desc"); 
while($row = mysqli_fetch_array($result))
{

echo ' 


                <div class="col-sm-6 col-md-4 event-listing">
                    <div class="images_row row m0">
                        <a href="campaigndetail.php?q='.$row['id'].'"><img src="media/campaigns/'.$row['img'].'" alt=""></a>
                    </div>
                    <div class="event_excepts row m0">
                        <h4 class="event_title"><a href="single-event.html">'.$row['name'].'</a></h4>
                     
                        <p>'.substr($row['title'],0,180).'..</p>
                        <a href="campaigndetail.php?q='.$row['id'].'" class="btn-primary btn-outline">read more</a>
                    </div>
                 
                </div>

'; } ?> 



            </div>
            <ul class="gallery-pagination list-unstyled">
                <li class="prev"><a href="#">prev</a></li>
                <li class="page-no first-no active"><a href="#">1</a></li>
                <li class="page-no last-no"><a href="#">2</a></li>
                <li class="next"><a href="#">next</a></li>
            </ul>
        </div>
    </section>
    

    
    <?php include"footer.php" ?>
    
  
    
    
    <?php include"allscript.php" ?>
</body>
</html>