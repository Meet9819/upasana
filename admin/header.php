
<div class="main-menu">
    <header class="header">
        <a href="index.php" class="logo">Upasana</a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
        <div class="user">
            <a href="#" class="avatar"><img src="images/user.png" alt=""><span class="status online"></span></a>
            <h5 class="name"><a href="profile.php">
                            <?php echo $_SESSION['username']; ?>!
</a></h5>
            <h5 class="position">Administrator</h5>
            <!-- /.name -->
            <div class="control-wrap js__drop_down">
                <i class="fa fa-caret-down js__drop_down_button"></i>
                <div class="control-list">
                    <div class="control-item"><a href="profile.php"><i class="fa fa-user"></i> Profile</a></div>
                   
                    <div class="control-item"><a href="logout.php"><i class="fa fa-sign-out"></i> Log out</a></div>
                </div>
                <!-- /.control-list -->
            </div>
            <!-- /.control-wrap -->
        </div>
        <!-- /.user -->
    </header>
    <!-- /.header -->
    <div class="content">

        <div class="navigation">
            <h5 class="title">Navigation</h5>
            <!-- /.title -->
            <ul class="menu js__accordion">
                <li class="">
                    <a class="waves-effect" href="index.php"><i class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
                </li>


  <li>
                    <a class="waves-effect" href="user.php"><i class="menu-icon fa fa-briefcase"></i><span>User Management</span></a>
                </li>




  <li>
                    <a class="waves-effect" href="banner.php"><i class="menu-icon fa fa-male"></i><span>Slider</span></a>
                </li>

   


                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-product-hunt "></i><span>Skills</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="categoryadd.php">Add Skills</a></li>
                        <li><a href="categoryview.php">View Skills</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>



    <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-product-hunt "></i><span>Projects</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="requirementadd.php">Add Projects</a></li>
                        <li><a href="requirementview.php">View Projects</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>


 <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-rss "></i><span>Achievements</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="achievementsadd.php">Add Achievements</a></li>
                        <li><a href="achievementsview.php">View Achievements</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>

             <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-product-hunt "></i><span>Campaigns</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="campaignsadd.php">Add Campaigns</a></li>
                        <li><a href="campaignsview.php">View Campaigns</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>


 <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-calendar   "></i><span>Events</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="eventadd.php">Add Events</a></li>
                        <li><a href="eventview.php">View Events</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>
 <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-rss "></i><span>Blogs</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="blogadd.php">Add Blogs</a></li>
                        <li><a href="blogview.php">View Blogs</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>

  <li>
                    <a class="waves-effect" href="testimonials.php"><i class="menu-icon fa fa-briefcase"></i><span>Testimonials</span></a>
                </li>


 <li>
                    <a class="waves-effect" href="contactus.php"><i class="menu-icon fa fa-table"></i><span>Contact Us Form</span></a>
                </li>

            
             <li>
                    <a class="waves-effect" href="subscribe.php"><i class="menu-icon fa fa-briefcase"></i><span>Subscribe</span></a>
                </li>
                

              

            </ul>
           
            <!-- /.menu js__accordion -->
        </div>
        <!-- /.navigation -->
    </div>
    <!-- /.content -->
</div>
<!-- /.main-menu -->




<div class="fixed-navbar">
    <div class="pull-left">
        <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
        <h1 class="page-title"></h1>
        <!-- /.page-title -->
    </div>
    <!-- /.pull-left -->
    <div class="pull-right">
        
        <!-- /.ico-item -->
        <div class="ico-item fa fa-arrows-alt js__full_screen"></div>
      
        <a href="logout.php" class="ico-item fa fa-power-off"></a>
    </div>
    <!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->



