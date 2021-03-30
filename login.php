  <!-- LOGIN -->

<?php
session_start();
require_once 'class.user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
    $user_login->redirect('index.php');
}

if(isset($_POST['btn-login']))
{
    $email = trim($_POST['txtemail']);
    $upass = trim($_POST['txtupass']);

    if($user_login->login($email,$upass))
    {
        $user_login->redirect('login.php');
    }
}
?>
    <!-- LOGIN --> 
 

 <?php include "allcss.php"; ?> 
<body>
   
 <?php include "header2.php"; ?>   
    
   
    
    <section class="row contact-content page-content">



        <div class="container">
            <div class="row">
                <div class="col-xs-12  col-sm-12  col-md-12">
                
                        <div style="width: 370px;margin: 40px auto;">
                            <div class="modal-content">
                                <div class="modal-body">
                                    
                                     <h3 class="contact_page_title">Login</h3>
                                    <div class="sign-form"> 

                                       <?php 
        if(isset($_GET['inactive']))
        {
            ?>
             <div class='alert alert-danger'>
                <button class='close' data-dismiss='alert'>&times;</button>
                 <strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it.
              </div>
             <?php
        }
        ?>
        <?php
        if(isset($_GET['error']))
        {
            ?>
            <div class='alert alert-danger'>
                <button class='close' data-dismiss='alert'>&times;</button>
                  <strong>Wrong Details!</strong>
            </div>
        <?php
        }
        ?>

                <form class="mb-0" action="" method="post" name="registration" id="create-account_form">


                                            <div class="form-group">
                                                 <input class="form-control" placeholder="Enter your Email Id"  id="email" name="txtemail" required="" type="email">

                                            </div>
                                            <div class="form-group">
                                               <input class="form-control" id="passwd" name="txtupass" placeholder="Enter your Password" required="" type="password">
 

                                            </div>
                                            
                                            <div class="pull-right lost-pass">
                                                <a href="fpass.php"><b>Forget Password?</b></a><br><br>
                                            </div>  


                                             <button type="submit" name="btn-login" class="btn btn-primary btn-block"> Sign In</button>


                                        </form>
                                        <div class="text-center" class="pull-center lost-pass"> <br>
                                            <a href="register.php"><b>Create New Account</b></a>
                                        </div>

                                     
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                
            </div>
        


    </section>
    
 <?php include "footer.php"; ?>

    
 
  <?php include "allscript.php"; ?>






