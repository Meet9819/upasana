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
    
    <!--[if lt IE 9]>
        
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
   
    <?php include"header2.php" ?>
    

     <section class="row newsletter_signup">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
            <h4>Home / Events</h4>
                </div>

                <div class="col-md-5 text-right">
      
                   <?php
                      ini_set('display_errors', 1);
                      error_reporting(~0);
                      $strKeyword = null;
                      if(isset($_POST["txtKeyword"]))
                      {
                          $strKeyword = $_POST["txtKeyword"];
                      }
                  ?>         

                <form class="col-sm-12 form-inline newsletter_signup_form" name="frmSearch" method="post" action="requirement.php" id="search-global-form">
                           <select name="camp" id="three" class="form-control">
                                  <option>Select Campaign</option>
                                   <?php

                                        include"db.php";

                                        $result = mysqli_query($con,"SELECT * FROM campaigns");
                                        while($row = mysqli_fetch_array($result))
                                        {
                                        echo '<option value="'.$row['id'].'">' .$row['name'].'</option>';
                                        } 
                                        ?>

                            </select>                    
                    <input type="submit" value="Search" class="btn-primary white">
                </form> 
                   <?php include "searchconfig.php"; ?>
                
                <?php
                  
                   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
                   $sql = "SELECT * FROM requirement WHERE name LIKE '%".$strKeyword."%' ";
                   $query = mysqli_query($conn,$sql);
                ?>

                </div>
              


            </div>

            </div>
    </section>
    
    <section class="row page-content">
        <div class="container">            
            <div class="row event-listing-row">
               
               

    <?php 

include('admin/db.php');
$result = mysqli_query($con,"SELECT * FROM event"); 
while($row = mysqli_fetch_array($result))
{

echo ' 


                <div class="col-sm-6 col-md-4 event-listing">
                    <div class="images_row row m0">
                        <a href="eventdetail.php?q='.$row['id'].'"><img src="media/event/'.$row['img'].'" alt=""></a>
                    </div>
                    <div class="event_excepts row m0">
                        <h4 class="event_title"><a href="single-event.html">'.$row['title'].'</a></h4>
                     
                        <p>'.substr($row['description'],0,180).'..</p>
                        <a href="eventdetail.php?q='.$row['id'].'" class="btn-primary btn-outline">read more</a>
                    </div>
                 
                </div>

'; } ?> 



            </div>
          
        </div>
    </section>
    

    
    <?php include"footer.php" ?>
  
    
    
    <?php include"allscript.php" ?>
</body>
</html>