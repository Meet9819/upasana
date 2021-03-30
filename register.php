<?php
//reCAPTCHA Configuration - go to Google and get the below keys http://www.google.com/recaptcha/admin
define('SITE_KEY',"6LfRLhcTAAAAAOqtHfcEm9NdCzNQ0D9kCqD_oiNA"); 
define('SECRET_KEY',"6LfRLhcTAAAAAAhy-ddbdlzVBykh_RX4QlLiodrj")
?>


<?php
session_start();
require_once 'class.user.php';

$reg_user = new USER();

if($reg_user->is_logged_in()!="")
{
    $reg_user->redirect('index.php');
}


if(isset($_POST['btn-signup']))
{
    $uname = trim($_POST['txtuname']);
    $email = trim($_POST['txtemail']);
    $upass = trim($_POST['txtpass']);
    $mobile = trim($_POST['mobile']);
    $address = trim($_POST['address']);
    $code = md5(uniqid(rand()));
    
    $stmt = $reg_user->runQuery("SELECT * FROM tbl_users WHERE userEmail=:email_id");
    $stmt->execute(array(":email_id"=>$email));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($stmt->rowCount() > 0)
    {
        $msg = "
              <div class='alert alert-error'>
                <button class='close' data-dismiss='alert'>&times;</button>
                    <strong>Sorry !</strong>  email allready exists , Please Try another one
              </div>
              ";
    }
    else
    {
        if($reg_user->register($uname,$email,$upass,$code,$mobile,$address))
        {           
            $id = $reg_user->lasdID();      
            $key = base64_encode($id);
            $id = $key;
            
            $message = "<center>
            <img style='width:300px' src='http://amarprerana.org/ngo/images/logo.png'/>      <br>                
                        <p style='font-size:20px;color:black'>Hi $uname,
                        <br /><br />
                        Welcome to KDM NUTRITION AND WELLNESS LLP <br/>
                        To finish signing up, press the below button to confirm that we got your Email Address correct! <br/>
                        <br /><br />
<a style='padding:10px;color:white;background-color:#1fae04;text-decoration:none' href='http://amarprerana.org/ngo/verify.php?id=$id&code=$code'><b >Confirm Email Address</b></a>
                        <br /><br />
                        Thank You <br>

                    

</p></center>";
                        
            $subject = "Please confirm your Email Registraton | Upasana Society NGO";
                        
            $reg_user->send_mail($email,$message,$subject); 
            $msg = "
                    <div class='alert alert-danger'>
                        <button class='close' data-dismiss='alert'>&times;</button>
                        <strong>Success!</strong>  We've sent an email to $email.
                    Please click on the confirmation link in the email to create your account. 
                    </div>
                    ";
        }
        else
        {
            echo "sorry , Query could no execute...";
        }       
    }
}
?>





 <?php include "allcss.php"; ?>

<body>

<div id="wrapper" class="wrapper clearfix">

	<?php include "header.php"; ?>



		<div class="container">
			<div class="row">
				<div class="col-xs-12  col-sm-12  col-md-12">
				

						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									 <h3 class="contact_page_title">Register Form</h3>
									
									<div class="register-form">
										 

										 <?php if(isset($msg)) echo $msg;  ?> 
 
                                     
										 <form class="mb-0" action="" method="post" name="registration" id="create-account_form">
											<div class="form-group">
												<input class="form-control"  placeholder="Enter your username"  name="txtuname" required="" type="text"> 



											</div>
											<div class="form-group">
												<input class="form-control"  placeholder="Type your email address" name="txtemail" required="" type="email">
                                       
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Type your password" value="" name="txtpass"  required="" type="password">
											</div>
											<div class="form-group">
												<input class="form-control" id="mobile" placeholder="Enter Your Mobile No" value="" name="mobile" required="" type="text">
											</div>  


											<div class="form-group">
												<input class="form-control" id="address" placeholder="Enter Your Address" value="" name="address" required="" type="text">

											</div>


											  <input class="btn btn-primary btn-block mt-30" name="btn-signup" type="submit" value="Register" />

											
										</form>

                                       <br>

										<div style="text-align: center;" class="pull-center lost-pass">
											<a href="login.php"><b>Have an account? Login Here</b></a>
										</div>
									</div>
								</div>
							</div>
						
						</div>
				
				</div>
			
			</div>
			
		</div>

	
<?php include "footer.php"; ?>
</div>
<?php include "allscript.php"; ?>