<?php
session_start();
if(!isset($_SESSION["userSession"])){
header("Location: login.php");
exit(); }
?>

    <?php
include 'logindb.php';
$query = $db->query("SELECT * FROM tbl_users WHERE userID = ".$_SESSION['userSession']);

$custRow = $query->fetch_assoc();
?>
       

       <?php include "allcss.php"; ?> 
<body>
   
 <?php include "header2.php"; ?>   
    
    <section class="row page-header">
        <div class="container">
            <h4>Profile</h4>
        </div>
    </section>



 <section class="row gallery-content">
        <div class="container">
           
            <div class="row">
                <div class="col-md-8 single-project single-cause"> 



                
                <ul class="nav nav-tabs">

    <li class="active"><a data-toggle="tab" href="#home">Suggestions</a></li>
   
   
      <li><a data-toggle="tab" href="#menu3">About </a></li>
        <li><a data-toggle="tab" href="#menu3">My Project</a></li>
  </ul>

 
  <div class="tab-content">
 
    <div id="home" class="tab-pane fade in active">
   
    </div>


 </div>
                

                        
                 
                 
                </div>





                <div class="col-md-4 sidebar cause-sidebar">
                  



                     <div class="row m0 widget widget-category" style="text-align: center;">  
                        <h4 class="widget-title">My Profile</h4>
                <p><?php echo $custRow['userName']; ?> 
                <br><?php echo $custRow['userEmail']; ?> <br>
                    <?php echo $custRow['mobile']; ?>
                </p>
                        <a href="profileedit.php" class="btn-primary pull-center">Edit Your Profile</a>
                    </div>
                    


                 
                </div>



            </div>
        </div>
    </section>

    <section class="row contact-content page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">



 




         </div></div></section> 



<?php include "footer.php";
?>

<?php include "allscript.php";
?>
