
                <div class="col-md-4 sidebar cause-sidebar"> 

                        
                          
                        <?php 
                        include('admin/db.php');
                        $result = mysqli_query($con,"SELECT * FROM campaigns where id = '$campid'"); 
                        while($row = mysqli_fetch_array($result))
                        {
                        echo '  
                      <div class="row m0 widget widget-similar-project widget-similar">
                        <h4 class="hhh h2">Campaign</h4>
                        <div class="similar-project">    
                        <div class="row cause-item environment">
                                <div class="images_row row m0">
                                     <img src="media/campaigns/'.$row['img'].'" alt="">
                                   
                                    </div>
                                <div class="cause_excepts row m0">
                                    <h4 class="cuase_title">
                                    <a href="single-cause.html"> '.$row['title'].'</a></h4>
                                    '.substr($row['description'],0,250).'..
                                  
                                </div>
                            </div>        
                        </div>
                    </div>       

                         '; } ?> 
                          


                     




                    <div class="row m0 widget widget-category">
                        <h4 class="widget-title">Our Campaigns</h4>
                        <ul class="nav">
                             <?php include('db.php');

                            $result = mysqli_query($con,"SELECT * FROM campaigns order by sequence limit 4"); 
                            $tmpCount = 1;
                            while($row = mysqli_fetch_array($result))
                            {
                            echo '  
                                 <li><a href="campaigndetail.php?q='.$row['id'].'">'.$row['name'].'</a></li>
                                '; } ?>
              
                        </ul>
                    </div> 

                     <div class="row m0 widget widget-category" style="text-align: center;">  
                        <h4 class="widget-title">How Can You Help ?</h4>
                            <p><i>Choose the Skills you are good at </i></p>
                        <a href="#donate_box" class="btn-primary pull-center">Become A Changemaker</a>
                    </div>
                    






                    <div class="row m0 widget widget-similar-project widget-similar">
                        <h4 class="hhh h2">Related Achivements</h4>
                        <div class="similar-project">                            
                          
                        <?php 
                        include('admin/db.php');
                        $result = mysqli_query($con,"SELECT * FROM achievements limit 1"); 
                        while($row = mysqli_fetch_array($result))
                        {
                        echo ' 
                        <div class="row cause-item environment">
                                <div class="images_row row m0">
                                     <img src="media/achievements/'.$row['img'].'" alt="">
                                   
                                    </div>
                                <div class="cause_excepts row m0">
                                    <h4 class="cuase_title">
                                    <a href="single-cause.html"> '.$row['title'].'</a></h4>
                                    '.substr($row['description'],0,180).'
                                  
                                </div>
                            </div>          

                         '; } ?> 
                          


                          
                        </div>
                    </div>
                </div>
