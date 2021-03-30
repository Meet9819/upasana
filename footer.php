 <section class="row newsletter_signup">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h4>Subscribe </h4>
                    <p>Register yourself for Latest Update</p>
                </div>

                  <?php
include('db.php');
if(isset($_POST['save']))
{
          $name=$_POST['name'];
            
          $email=$_POST['email'];
          $save=mysqli_query($con,"INSERT INTO subscribe (name,email) VALUES ('$name','$email')");

   ?>
                <script>
                alert('Successfully Inserted...');
                window.location.href='index.php';
                </script>
                <?php

                   
    }
?>

  

                <form action="" method="post" enctype="multipart/form-data" class="col-sm-7 form-inline newsletter_signup_form">
                    <input type="text" class="form-control" name="name" placeholder="Name" required="">
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                    <input type="submit" name="save" value="submit" class="btn-primary white">
                </form>
            </div>
        </div>
    </section> 





        <footer class="row foooter ">
            <div class="container">
                <div class="row footer_sidebar">
                   
                    <div class="widget widget-recent-posts col-sm-6 col-md-4">
                        <h5 class="widget-title">All Campaigns</h5>
                        <ul class="nav recent-posts">
                        <?php
                        include('admin/db.php');
                        $result = mysqli_query($con,"SELECT * FROM campaigns limit 5"); 
                        while($row = mysqli_fetch_array($result))
                        {

                        echo '<li><a href="campaigndetail.php?q='.$row['id'].'">'.$row['name'].'</a></li> ' ; } ?>

                        </ul>
                    </div>
                    <div class="widget widget-recent-tweets col-sm-6 col-md-4">
                        <h5 class="widget-title">Achievements</h5>
                        <div class="tweet m0">

                            <?php
                        include('admin/db.php');
                        $result = mysqli_query($con,"SELECT * FROM achievements limit 5"); 
                        while($row = mysqli_fetch_array($result))
                        {
                        echo '
                            <p><a href="achievementsdetail.php?q='.$row['id'].'"> '.$row['title'].'</a></p> <br> ' ; 
                        } ?>



                        </div>
                       
                    </div>
                    <div class="widget widget-contact col-sm-6 col-md-4">
                        <h5 class="widget-title">CONTACT</h5>
                        <address>

                         
                            <span>Phone</span> : 9769727057 / 7045127770 <br>
                        <span>Email</span> : <a href="mailto:upasana@theupasana.org">upasana@theupasana.org</a>
                      </address>
                       <a href="about.php" class="btn-primary btn-outline">Know More</a>
                    </div>
                </div>
            </div>            
        
          <div class="row copyright_area m0">
            <div class="container">
                <div class="copy_inner row">
                    <div class="col-sm-7 copyright_text">Copyright 2019. All Rights Reserved </div>
                    <div class="col-sm-5 footer-nav">
                        <ul class="nav">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Desclaimer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </footer>