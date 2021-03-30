
<!-- SESSION CODE | Login karne k baad --> 
<?php
error_reporting(0);

session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
// $user_home->redirect('login.php');
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));



$row = $stmt->fetch(PDO::FETCH_ASSOC);

$con = mysqli_connect('localhost','upasahgv_ngo','loveyoudad9820102993','upasahgv_ngo') or die ('Unable to connect');


?>
<!-- SESSION CODE | Login karne k baad --> 

  
                        




         <nav class="navbar navbar-default navbar-static-top navbar2">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>            
            <div class="collapse navbar-collapse" id="mainNav">                
                <ul class="nav navbar-nav">


          
 <li class="dropdown">

      <?php
                if(isset($_SESSION['userSession']))
                {
                 echo '    <a href="index.php" aria-haspopup="true" aria-expanded="false">  '.$row['userEmail'].' </a>
                                


                        <ul class="dropdown-menu">
                         <li><a href="profile.php">Profile</a></li>
                            <li><a href="logout.php">Logout</a></li>
                           
                           
                        </ul>
                                      
                                        
 ';
}
                else{

                }?>
                      
                    </li>





  <li class="dropdown ">
                        <a href="index.php" aria-haspopup="true" aria-expanded="false">Home</a>
                        <ul class="dropdown-menu">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="team.php">Team</a></li>
                            
                           
                        </ul>
                    </li>
                  
                    
                    <li class="dropdown ">
                        <a href="campaigns.php" role="button" aria-haspopup="true" aria-expanded="false"> Campaigns</a>
                        <ul class="dropdown-menu">
                           


                           <?php include('db.php');

$result = mysqli_query($con,"SELECT * FROM campaigns order by sequence asc"); 
 $tmpCount = 1;
while($row = mysqli_fetch_array($result))
{

echo '  

                                 <li><a href="campaigndetail.php?q='.$row['id'].'">'.$row['name'].'</a></li>

'; } ?>
                          
                           
                        </ul>
                    </li>
                    <li >
                        <a href="donate.php" >Donate</a>
                        
                    </li>    <li><a href="event.php">Events</a></li>
                  <li><a href="achievements.php">Achievements</a></li>
                  <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">contact</a></li>


       
                </ul>
                <ul class="nav social_navbar navbar-right">
                     <li><a target="_blank"   href="https://m.facebook.com/upasanasociety/"><i class="fa fa-facebook"></i></a></li>
                      <li><a target="_blank"   href="https://www.instagram.com/upasanasociety/"><i class="fa fa-instagram"></i></a></li>
                        <li><a  target="_blank"  href="https://www.linkedin.com/in/upasanasociety/"><i class="fa fa-linkedin"></i></a></li>
                    <li><a  target="_blank"  href="https://twitter.com/upasanasociety"><i class="fa fa-twitter"></i></a></li>
                    <li><a  target="_blank"  href="https://www.youtube.com/channel/UC6DV_3zitCgExBO7lWBymqw"><i class="fa fa-youtube"></i></a></li>
                  
                 
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="row header1">
        <div class="container">
            <div class="logo pull-left">
                <a href="index.php"><img src="images/logo.png" alt=""></a>
            </div>
          
            <a href="#donate_box" class="btn-primary btn-outline hidden-sm hidden-xs pull-right">donate </a>
            
            <div class="pull-right emergency-contact">
                <div class="pull-left">
                  
                    <div class="infos_col">
                        <a href="#donate_box" class="btn-primary btn-outline hidden-sm hidden-xs pull-right">Become a Changemaker </a>
            
                    </div>
                </div>
              
            </div>
        </div>        
    </header>