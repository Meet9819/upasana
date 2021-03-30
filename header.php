
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
            </div>            
            <div class="collapse navbar-collapse" id="mainNav">
                <a href="volunteer.php" class="volunteer-link btn-primary btn-outline hidden-sm hidden-xs pull-right">become volunteer</a>
                <ul class="nav navbar-nav navbar-right">


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
            </div>
        </div>
    </nav>
    