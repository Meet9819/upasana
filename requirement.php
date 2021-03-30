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
               




                  <!-- SEARCH CODE -->  
 <?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    $strKeyword = null;
    if(isset($_POST["txtKeyword"]))
    {
        $strKeyword = $_POST["txtKeyword"];
    }


?>         


                <!-- SEARCH CODE -->

                <form class="col-sm-12 form-inline newsletter_signup_form" name="frmSearch" method="post" action="requirement.php" id="search-global-form">


                  <input type="text" class="form-control" value="<?php echo $strKeyword;?>" name="txtKeyword" id="txtKeyword"  placeholder="Search by Name">

                        
                         


                   <select name="catid" id="three" class="form-control">
                                  <option>Select Category</option>
                                   <?php

include"db.php";

$result = mysqli_query($con,"SELECT * FROM category");
while($row = mysqli_fetch_array($result))
{
echo '<option value="'.$row['id'].'">' .$row['title'].'</option>';
} 
?>

                            </select> 

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

                    
                    <input type="submit" value="submit" class="btn-primary white">
                </form>


                <!-- SEARCH CODE -->
<?php
   $serverName = "localhost";
   $userName = "upasahgv_ngo";
   $userPassword = "loveyoudad9820102993";
   $dbName = "upasahgv_ngo";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
   $sql = "SELECT * FROM requirement WHERE name LIKE '%".$strKeyword."%' ";
   $query = mysqli_query($conn,$sql);
?>



            </div>
        </div>
    </section>
    

    
    <section class="row page-content">
        <div class="container">            
            <div class="row event-listing-row">
         



   

<?php
 include "db.php";


while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
 <?php echo' 
                                

                <div class="col-sm-6 col-md-4 event-listing">
                    <div class="images_row row m0">
                        <a href="requirementdetail.php?q='.$result['id'].'"><img src="media/requirement/'.$result['img'].'" alt=""></a>
                    </div>
                    <div class="event_excepts row m0">
                        <h4 class="event_title"><a href="requirementdetail.php?q='.$result['id'].'">'.$result['name'].'</a></h4>
                     
                        <p>'.substr($result['detail'],0,180).'..</p>
                        <a href="requirementdetail.php?q='.$result['id'].'" class="btn-primary btn-outline">read more</a>
                    </div>
                 
                </div>



'; } mysqli_close($conn);
?> 


   



            </div>
          
        </div>
    </section>
    

    
    <?php include"footer.php" ?>
    
 
    
    <?php include"allscript.php" ?>
</body>
</html>