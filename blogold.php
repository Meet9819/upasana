<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Upasana Society NGO</title>
    
    
    <!--Fonts-->
    <?php include "allcss.php"; ?>
    
    <!--[if lt IE 9]>
        
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
   <?php include "header2.php"; ?>
    
    <section class="row page-header">
        <div class="container">
            <h4>blog</h4>
        </div>
    </section>
    
    <section class="row blog-content page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                                       
               
                    


    <?php 

include('admin/db.php');
$result = mysqli_query($con,"SELECT * FROM blog"); 
while($row = mysqli_fetch_array($result))
{

echo ' 
     <article class="post post-type-gallery row">
                        <div class="row featured-contents">
                            <div class="post-gallery">
                                <div class="item"><img src="media/blog/'.$row['img'].'" alt=""></div>
                                <div class="item"><img src="media/blog/2.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="row article-body">
                            <h3 class="post-title"><a href="blogdetail.php?q='.$row['id'].'">'.$row['title'].'</a></h3>
                            <ul class="post-meta nav">
                                <li class="post-date"><i class="fa fa-calendar-o"></i> <a href="#">june 29, 2016</a></li>       
                                <li class="post-comments"><i class="fa fa-comments"></i> <a href="#">1 comment</a></li>
                                <li class="posted-by"><i class="fa fa-user"></i>posted by: <a href="#">admin</a></li>
                                <li class="category"><i class="fa fa-folder"></i>category: <a href="#">education</a>, <a href="#">food</a></li>
                            </ul>
                            <div class="post-excerpt row">
                                <p>'.$row['description'].'</p>
                            </div>
                            <a href="blogdetail.php?q='.$row['id'].'" class="btn-primary btn-outline dark">read more</a>
                        </div>
                    </article> 




              

'; } ?> 



               
                    
                    <article class="post post-type-video row">
                        <div class="row featured-contents">
                            <iframe src="https://www.youtube.com/embed/EDZqaB4qXIc" allowfullscreen></iframe>
                        </div>
                        <div class="row article-body">
                            <h3 class="post-title"><a href="single.html">EVENT FOR PROVIDING PENS TO THE CHILDRENS</a></h3>
                            <ul class="post-meta nav">
                                <li class="post-date"><i class="fa fa-calendar-o"></i> <a href="#">june 29, 2016</a></li>       
                                <li class="post-comments"><i class="fa fa-comments"></i> <a href="#">1 comment</a></li>
                                <li class="posted-by"><i class="fa fa-user"></i>posted by: <a href="#">admin</a></li>
                                <li class="category"><i class="fa fa-folder"></i>category: <a href="#">education</a>, <a href="#">food</a></li>
                            </ul>
                            <div class="post-excerpt row">
                                <p>Quisque eros leo, pellentesque id leo non, scelerisque hendrerit mauris. Integer dapibus purus in aliquet vehicula. In laoreet justo ac sapien malesuada laoreet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                            <a href="single.html" class="btn-primary btn-outline dark">read more</a>
                        </div>
                    </article>
                    
                 
                  
                    
                </div>
                <div class="col-md-4 sidebar post-sidebar">
                    <div class="row m0 widget widget-search">
                        <h4 class="widget-title">search</h4>
                        <form action="#" class="row m0 search-form" method="get" role="search">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search here">
                                <span class="input-group-addon"><button type="submit"><i class="fa fa-search"></i></button></span>
                            </div>
                        </form>
                    </div>
                    
                    <div class="row m0 widget widget-category">
                        <h4 class="widget-title">categories</h4>
                        <ul class="nav">
                            <li><a href="#">education</a></li>
                            <li><a href="#">environment</a></li>
                            <li><a href="#">building homes</a></li>
                            <li><a href="#">donating clothes</a></li>
                            <li><a href="#">food</a></li>
                            <li><a href="#">OTHERS</a></li>
                        </ul>
                    </div>
                    
                    <div class="row m0 widget widget-recent-posts">
                        <h4 class="widget-title">recent post</h4>



 <?php 

include('admin/db.php');
$result = mysqli_query($con,"SELECT * FROM event"); 
while($row = mysqli_fetch_array($result))
{

echo ' 


                        <div class="media recent-post">
                            <div class="media-left"><a href="single.html"><img style="width:100px" src="media/event/'.$row['img'].'" alt=""></a></div>
                            <div class="media-body">
                                <h5 class="title"><a href="#"> '.$row['title'].'</a></h5>
                                <h5 class="date"><i class="fa fa-calendar-o"></i><a href="#">June 29, 2015</a></h5>
                            </div>
                        </div>


                      

'; } ?> 
                          

                      
                    </div>
                    
                    <div class="row m0 widget widget-tags">
                        <h4 class="widget-title">Tags</h4>
                        <a href="#" class="tag">causes</a>
                        <a href="#" class="tag">donate</a>
                        <a href="#" class="tag">child</a>
                        <a href="#" class="tag">care</a>
                        <a href="#" class="tag">children help</a>
                        <a href="#" class="tag">donate</a>
                        <a href="#" class="tag">child</a>
                        <a href="#" class="tag">causes</a>
                        <a href="#" class="tag">donate</a>
                        <a href="#" class="tag">child</a>
                        <a href="#" class="tag">care</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
 
    
    <?php include "footer.php"; ?>
    
    
   
    
    <?php include "allscript.php"; ?>
</body>
</html>